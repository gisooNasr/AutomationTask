<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\User;
use App\Models\UserTransaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function list(Request $request){

        $query = UserTransaction::query()->orderBy('id', 'DESC');
        $query = self::search($request,$query);
        $data = $query->paginate(10);
        $users=User::all();
        return view('panel.transaction.list')
            ->with('data',$data)
            ->with('users',$users);
    }

    public function getForm(){
        $users=User::where('is_admin','!=',1)->orderBy('name','asc')->get();
        return view('panel.transaction.add')
        ->with('users',$users);
    }

    public function postForm(TransactionRequest $request){
        DB::transaction(function () use ($request) {
            if (request()->hasFile('file')) {
                $year =Carbon::now()->year;
                $month=Carbon::now()->month;
                $pathMain = "uploads/{$year}/{$month}/";
                    $fileName = time().request()->file('file')->getClientOriginalName();
                    request()->file('file')->move($pathMain, $fileName);
            }
            $model=new UserTransaction();
            $model->amount=$request->amount;
            $model->type=$request->type;
            $model->user_id=Auth::id();
            $model->receiver_id=$request->receiver_id;
            $model->file=$pathMain.$fileName;
            $model->save();
        });
        return redirect('/transactions')->with('success','درخواست با موفقیت ثبت شد.');
    }

    public function changeStatus(Request $request,$id){
        $transaction=UserTransaction::find($id);
        DB::beginTransaction();
        $transaction->status=$request->status;
        $transaction->description=$request->description;
        $transaction->operator_id=Auth::id();
        $transaction->save();
        DB::commit();
        return redirect()->back()->with('success','وضعیت درخواست مورد نظر با موفقیت تعیین شد.');
    }

    public static function search($request , $query){

        if ($request->get('name')) {
            $query->whereHas('user', function ($users) use ($request){
                $users->where('name', 'LIKE', '%' . $request->get('name') . '%');
            });
        }
        if ($request->get('family')) {
            $query->whereHas('user', function ($users) use ($request){
                $users->where('family', 'LIKE', '%' . $request->get('family') . '%');
            });
        }
        if ($request->get('min_amount')) {
            $query->where('amount', '>=', $request->min_amount);
        }
        if ($request->get('max_amount')) {
            $query->where('amount', '<=', $request->max_amount);
        }
        if ($request->get('type')) {
            $query->where('type', $request->type);
        }
        if (!Auth::user()->is_admin){
            $query->where('user_id',Auth::id());
        }
        return $query;
    }
}
