@extends('layouts.master')

@section('css-extend')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />

 
@endsection
@section('script-extend')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.8.1/autoNumeric.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
            $(".datepicker").datepicker();
        });
    </script>
    <script>
        function test(){
            alert('kiểm tra ok');
        };
        

    </script>
@endsection

@section('content')


    <div class="page-head row ">
        <div class="page-title col">
            <h3><i class="fa fa-list btn-secondary"> </i> Tạo mới đơn hàng</h3>

        </div>
        <div class="page-function col text-right">
            <a class="btn btn-info" href="{{route('orderView')}}">
                <i class="fa fa-undo" aria-hidden="true"> Thông tin đơn hàng</i>
            </a>
        </div>
    </div>
    <br>
    <div class="col-12">
        Mã đơn hàng: BH1721938
    </div>
    <form action="{{route('testdd')}}" method="POST">@csrf
  <!-- @include('pages.orders.infoCustumer') -->
  <div class="row ">
    <div class="thontinkhachhang col">
        <div class="infoCustumer border pt-3 pb-3 container mt-3">
          <label><b>1. Thông tin khách hàng</b> </label>
          <p id="infoCustumerAJAX">
               <div class="excamplt"> 
                    <p>
                       - Đơn vị: <span id="nameCompany"> Công ty TNHH Thương Mại Và Phát Triển Công Nghệ Bách Khoa 4</span>
                    </p>
                    <p>
                       - Mã số thuế: <span id="taxcode">0101176391</span>
                    </p>

                    <p>
                       - Địa chỉ: <span id="address">17A Ngõ 21 Lê Văn Lương, Thanh Xuân, Hà Nôi</span>
                    </p>
                    <p>
                       - Đại diện: <span id="nameCustumer">Ngô Tuấn Vũ </span>
                    </p>
                    <p>
                       - Điện thoại: <span id="phoneNumber"><a href="tel:0984131355">0984 13 13 55</a></span>
                    </p>
               </div>
              </p>
            <div class="col-12 text-right">
                <button class="btn  " type="button" onclick="test()"><i class="fa fa-pencil"> </i> Lựa chọn mới</button>
            </div>
          </div>
        </div>
    <div class="col">
        <div class="thongtinlapmay border pt-3 pb-3 container mt-3">
        <label><b>2. Thông tin người nhận thiết bị</b></label>
            <p id="infoReciver">
                <p>
                  - Người nhận thiết bị: 
                  <span id="TheRecipient-span">Ngô Tuấn Vũ</span>
                  <input type="text" name="TheRecipient" id="TheRecipient" class="border-0" value="Ngô Tuấn Vũ" hidden>
                </p>
                <p>
                  - Điện thoại: 
                  <span id="ContactRecipient-span">0984131355</span>
                  <input type="text" name="ContactRecipient" id="ContactRecipient" class="border-0" value="0984131355" hidden>
                </p>
                <p>
                  - Địa chỉ lắp đặt: 
                  <span id="AddressRecipeint-span">17A Ngõ 21 Lê Văn Lương, Thanh Xuân, Hà Nôi</span>
                  <input type="text" name="AddressRecipeint" id="AddressRecipeint" class="border-0 size-100" value="17A Ngõ 21 Lê Văn Lương, Thanh Xuân, Hà Nôi" hidden>
                </p>
                <p>
                    <div class="input-group row">
                        <span class="input-group-addon col-4" id="basic-addon1">- Ngày lắp:</span>
                        <input type="text" class="datepicker form-control col-8 border-0" name="setup_at" value="{{date_format(today(),'d/m/Y')}}">
                    </div>
                    <div class="input-group row">
                        <span class="input-group-addon col-4" id="basic-addon1">- Tính tiền từ ngày:</span>
                        <input type="text" class="datepicker form-control col-8 border-0" name="start_at"  value="{{date_format(today(),'d/m/Y')}}">
                    </div>
                </p>

            </p>
            <div class="col-12 text-right">
                <button class="btn" type="button" onclick="test()"><i class="fa fa-edit"> </i> thay đổi</button>
            </div>
        </div>
    </div>
  </div>
@include('pages.orders.infodeviceorder')
   <div class="ghichu  border pt-3 pb-3 container mt-3 align-content">
    <div class="col-12 row">
        <label for="">Ghi chú</label>
        <textarea name="noteForOder" id="" class="form-control"></textarea>
    </div>
       
   </div>
   <div class="col-12 text-center mt-3">     <button class="btn btn-primary" type="submit">
           Đặt hàng
       </button>
   </div>
   </form>
@endsection
