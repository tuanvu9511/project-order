@extends('layouts.master')
@section('css-extend')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('script-extend')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('content')
    <div class="page-head row">
        <div class="page-title col">
            <h3>Thông tin đặt hàng</h3>

        </div>
        <div class="page-function col text-right">
            <a class="btn btn-info" href="{{route('addNewOrder')}}">
                <i class="fa fa-plus-circle" aria-hidden="true"> Thêm đơn hàng</i>
            </a>
        </div>
        
    </div>
    <table class="table  table-hover table-bordered " id="example">
        <thead class="thead">
            <tr>
                <th scope="col">
                    <i class="fa fa-bars"></i>
                    TT</th>
                <th scope="col">
                    <i class="fa fa-calendar"></i>
                    Ngày giao máy</th>
                <th scope="col">
                    <i class="fa fa-user"></i>
                    Thông tin khách hàng</th>
                <th scope="col">
                    <i class="fa fa-archive"></i>
                    Thiết bị đặt hàng
                </th>
                <th scope="col">
                    <i class="fa fa-shopping-bag"></i>
                    Yêu cầu</th>
                <th scope="col">
                    <i class="fa fa-address-book"></i>
                    Địa chỉ giao máy
                </th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                    "searching": false,
                    "paging": false
            });
        });
    </script>
    <style>

    </style>
@endsection
