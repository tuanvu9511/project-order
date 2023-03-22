@extends('layouts.master')

@section('script-extend')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection

@section('content')
    <div class="page-head row">
        <div class="page-title col">
            <h3>Tạo mới đơn hàng</h3>

        </div>
        <div class="page-function col text-right">
            <a class="btn btn-info" href="{{route('orderView')}}">
                <i class="fa fa-undo" aria-hidden="true"> Thông tin đơn hàng</i>
            </a>
        </div>
    </div>
    <br>
    <div class="row col-6 offset-2">
        <label for="" class="col">Lựa chọn khách hàng</label>
        <select name="" id="" class="col form-control"></select>  
    </div>  

@endsection
