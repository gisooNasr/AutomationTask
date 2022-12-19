<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTransaction extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['amount','type','description','user_id','receiver_id','operator_id','file','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function receiver(){
        return $this->belongsTo(User::class);
    }
    public function operator(){
        return $this->belongsTo(User::class);
    }
}
