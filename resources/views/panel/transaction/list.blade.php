@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <a class="btn btn-outline-primary btn-uppercase" href="{{ url('/transactions/add') }}">
                <i class="fa fa-plus mr-2"></i> افزودن درخواست
            </a>
            <button class="btn btn-outline-warning btn-uppercase" data-toggle="modal" data-target="#searchModal">
                <i class="fa fa-search mr-2"></i> جستجو
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive" >
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">درخواست دهنده </th>
                        <th scope="col">دریافت کننده </th>
                        <th scope="col"> ناظر </th>
                        <th scope="col"> نوع  </th>
                        <th scope="col">  مبلغ </th>
                        <th scope="col"> توضیحات</th>
                        <th scope="col">وضعیت </th>
                        <th scope="col">ضمائم</th>
                        <th scope="col">عملیات </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ @$row->id }}</th>
                            <td>{{@$row->user->full_name}}</td>
                            <td>{{ @$row->receiver->full_name }}</td>
                            <td>{{ @$row->operator->full_name }}</td>
                            <td>

                                @if($row->type == 'in')
                                <i class="fa fa-arrow-circle-o-left text-success"></i>پرداخت
                                @else
                                    <i class="fa fa-arrow-circle-o-right text-danger"></i>برداشت
                                @endif


                            </td>
                            <td>
                                <span class="badge badge-secondary"> {{ number_format(@$row->amount).'ریال' }}</span>
                            </td>

                            <td>{{ @$row->description }}</td>

                            <td>

                                @if($row->status ==0 && $row->operator_id != null)
                                    <span class="badge badge-danger"> رد شده</span>
                                @elseif($row->status ==1 && $row->operator_id != null)
                                    <span class="badge badge-success">تایید شده</span>
                                @else
                                    <span class="badge badge-info"> در انتظار...</span>

                                @endif


                            </td>
                            <td>
                                <a target="_blank" href="{{asset(@$row->file)}}" class="btn  btn-rounded"><i class="fa fa-eye text-info"></i></a>
                            </td>
                            <td>
                                @if($row->operator_id == null && Auth::user()->is_admin == 1)
                                    <a data-toggle="modal" data-target="#statusModal-{{$row->id}}" type="button"
                                       class="btn btn-outline-warning btn-rounded btn-uppercase">
                                        <i class="fa fa-pencil-square mr-2"></i> ویرایش
                                    </a>
                                    @include('panel.transaction.blocks.status-modal')
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="row justify-content-center">
                    @if (count($data))
                        @include('layouts.blocks.pagination', ['paginator' => $data])
                    @endif
                </div>
            </div>

        </div>
    </div>
    @include('panel.transaction.blocks.search-modal')
@endsection
