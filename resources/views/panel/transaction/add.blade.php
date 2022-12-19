@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h6>
            <i class="fa fa-plus mr-2"></i> افزودن درخواست
        </h6>
    </div>
    <div class="card-body">
       <form id="transForm" method="post" enctype="multipart/form-data" action="{{url('/transactions/postAdd')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label >مقدار مبلغ درخواستی (ریال)</label>
                    <input type="text" name="amount" class="form-control price" value="{{old('amount')}}">
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label >بارگذاری فایل (pdf)</label>
                    <input type="file" name="file" class="form-control" accept="application/pdf" >
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label >طرف حساب دریافت کننده مبلغ</label>
                     
                        <input class="form-control" id="searchInput" placeholder="جستجوی کاربر...">
                    
                    <select id="usersList" class="form-control h-100" name="receiver_id">
                <option value="">
                    انتخاب  
                </option>
                @foreach($users as $user)
                    <option @if(old('receiver_id') == $user->id) selected @endif value="{{$user->id}}">
                        {{$user->full_name}}
                    </option>
                @endforeach
            </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label >نوع درخواست</label>
                                        
                    <select  class="form-control h-100" name="type">
                <option value="in">
                    پرداخت  
                </option>
                <option value="out">
                    برداشت  
                </option>
               
            </select>
                </div>
            </div>
        </div>
<div class="row justify-content-end">
    <button class="btn btn-success " type="submit">ثبت</button>

</div>
    </form>
    </div>
</div>
@endsection

@section('js')
@include('panel.transaction.blocks.form-js')
@endsection