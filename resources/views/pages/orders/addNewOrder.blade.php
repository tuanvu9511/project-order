@extends('layouts.master')

@section('css-extend')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('script-extend')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
            });
        });
    </script>
    <script>
        function change_nameconsignee(){
            var s = document.getElementById('custumerName');
            document.getElementById('nameConsignee').value = s.value;
        };
        function change_consigneePhone(){
            var a = document.getElementById('phoneNumber').value;
            document.getElementById('consigneePhone').value = a;
        };
        function change_deliveryAddress(){
            var z = document.getElementById('custumerAddress').value;
            document.getElementById('deliveryAddress').value = z;
        };
        function change_rentaltime(){
        };
        function recal_endrental(){
            var z = document.getElementById('timeUnit').value;
            alert(z);
        };
    </script>
@endsection

@section('content')
    <div class="page-head row">
        <div class="page-title col">
            <h3><i class="fa fa-list"> </i> Tạo mới đơn hàng</h3>

        </div>
        <div class="page-function col text-right">
            <a class="btn btn-info" href="{{route('orderView')}}">
                <i class="fa fa-undo" aria-hidden="true"> Thông tin đơn hàng</i>
            </a>
        </div>
    </div>
    <br>
    <form action="{{route('testdd')}}" method="POST">@csrf
   <div class="thongtinkhachhang border pt-3 pb-3 container">
        <div class="col-12 row">
            <div class="col">
                <h4> <i class="fa fa-address-book"></i> Thông tin khách hàng</h4>
            </div>
            <div class="col row">
                <div class="col">
                    <input type="checkbox" name="typeCustumer" checked> Khách hàng cá nhân
                </div>
                <div class="col">
                    <input type="checkbox" name="typeCustumer"> Khách hàng doanh nghiệp
                </div>
            </div>
        </div>
        <div class="col-12 row mt-3 input-group">
            <label class="col-2"> <i class="fa fa-users"> Tên đơn vị: </i></label>
            <input type="text" class="form-control col-10" name="companyName">
            <button class="btn btn-outline-secondary" type="button" id="btn-danhhbakhachhang" data-bs-toggle="modal" data-bs-target="#danhhbakhachhang"><i class="fa fa-book"></i> Danh bạ</button>
        </div>

        <div class="col-12 row mt-3">
            <lable class="col-2"><i class="fa fa-user"></i>  Đại diện: <span style="color:red">*</span></lable>
           <input type="text" class="form-control col-4" required name="custumerName" id="custumerName" onchange="change_nameconsignee()">
            <lable class="col-1"><i class="fa fa-id-card"> </i>Số CCCD: </lable>
            <input type="text" class="form-control col-2" name="idcard">
            <lable class="col-1"><i class="fa fa-calendar"> Cấp ngày: </i></lable>
            <input type="text" class="form-control  col-2">
        </div>
        <div class="col-12 row mt-3">
            <label for="" class="col-2"><i class="fa fa-phone" > Điện thoại: <span style="color:red">*</span></i> </label>
            <input type="text" class="form-control col-10" required name="phoneNumber" id="phoneNumber" onchange="change_consigneePhone()">
        </div>
        <div class="col-12 row mt-3">
            <label for="" class="col-2"><i class="fa fa-location-arrow" > Địa chỉ: <span style="color:red">*</span></i></label>
            <input type="text" class="form-control col-10" required name="custumerAddress" id="custumerAddress" onchange="change_deliveryAddress()">
        </div>
   </div>

   <div class="thongtinlapmay border pt-3 pb-3 container mt-3">
        <div class="col-12 row">
           <label for="" class="col-3"><h5><i class="fa fa-user"> Người nhận thiết bi</i></h5> </label> 
           <input type="text" class="form-control col-3" readonly="" name="nameConsignee" id="nameConsignee">
           <label for="" class="col-2"><h5 class="text-right"><i class="fa fa-phone"> Điện thoại</i></h5></label> 
           <input type="text" class="form-control col-2" readonly="" name="consigneePhone" id="consigneePhone">
           <div class="col-2">
               <a href="" class="form-control"> <i class="fa fa-pencil-square-o" aria-hidden="true"> Thay đổi</i> </a>
           </div>
       </div>
       <div class="col-12 row  mt-3">
           <label for="" class="col-3"><h5><i class="fa fa-location-arrow"> Địa chỉ lắp máy</h5></i></label>
           <input type="text" class="form-control col-7" readonly="" name="deliveryAddress" id="deliveryAddress">
          
       </div>

        
   </div>

   <div class="thoigianthue border pt-3 pb-3 container mt-3 align-content" onchange="change_rentaltime()">
        <div class="col-12 row">
            <label for="" class="col-3">Thời gian thuê từ ngày</label>
            <input type="date" class="form-control col-2" name="startTiem" id="startTiem">
            <label for="" class="col-1 text-center">đến</label>
            <input type="date" class="form-control col-2" name="endTime" id="endTime">
            <label for="" class="col-2 text-right"><div><input type="number" name="timeValue" class="form-control" min="1" value="1" onchange="recal_endrental()"></div></label>
            <select name="timeUnit" id="timeUnit" class="form-control col-2" onchange="recal_endrental()">
                <option value="1">Ngày</option>
                <option value="2">Tuần</option>
                <option value="3">Tháng</option>
            </select>
        </div>
   </div>

   <div class="thongtinthietbi  border pt-3 pb-3 container mt-3 align-content">
        <div class="col-12">
            <label for=""><h5>Thông tin thiết bi</h5></label>
        </div>
       <table class="table table-bordered table-hover">
           <thead class="thead-light text-center">
               <tr>
                   <th class="col-1"><a href="#" class="btn"><i class="fa fa-plus-circle"></i></a></th>
                   <th class="col-4"><i class="fa fa-laptop"></i>Thiết bị</th>
                   <th class="col-1"><i class="fa fa-table"> </i>Số lượng</th>
                   <th class="col-2"><i class="fa fa-calendar"> </i>Thời gian</th>
                   <th class="col-2"><i class="fa fa-money"> Đơn giá</i> </th>
                   <th class="col-2"><i class="fa fa-money"> Thành tiền</i> </th>
               </tr>
           </thead>
           <tbody  class="text-center">
               <tr>
                   <td>1</td>
                   <td><select name="" id="" class="form-control"></select></td>
                   <td><input type="number" class="form-control"></td>
                   <td><input type="text" class="form-control"></td>
                   <td><input type="number" class="form-control"></td>
                   <td></td>
               </tr>
           </tbody>
           <tfoot class="text-center">
               <tr>
                   <td colspan="5"><b>Thành tiền trước thuế</b></td>
                   <td></td>
               </tr>
                <tr>
                   <td colspan="5"><b>VAT </b></td>
                   <td> </td>
               </tr>
               <tr>
                   <td colspan="5"><b>Tổng tiền sau thuế </b></td>
                   <td></td>
               </tr>
           </tfoot>
        </table>
        <div class="col-12 row">
            <div class="col row  form-check">
                <input type="checkbox" id="flexCheckDefault"> <label for="flexCheckDefault"> Không lấy hóa đơn</label>
            </div>
            <div class="col row  form-check">
                <input type="checkbox" checked=""> <label for=""> Miễn phí vận chuyển lắp đặt</label>
            </div>
             <div class="col row  form-check">
                <input type="checkbox" checked=""> <label for="">Thanh toán sau khi kết thúc</label>
            </div>
             <div class="col row  form-check">
                <input type="checkbox"> <label for="">Đặt cọc</label>
            </div>
            
        </div>
   </div>
   <div class="ghichu  border pt-3 pb-3 container mt-3 align-content">
    <div class="col-12 row">
        <label for="">Ghi chú</label>
        <textarea name=" " id="" class="form-control"></textarea>
    </div>
       
   </div>
   <div class="col-12 text-center mt-3">
       <button class="btn btn-warning mr-5" onclick="#">
           Làm mới
       </button>
       <button class="btn btn-primary" type="submit">
           Đặt hàng
       </button>
   </div>
   </form>

    <div class="modal fade" id="danhhbakhachhang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="danhsachkh-modal">
                    <table class="table table-bordered table-hover " id="example">
                        <thead>
                            <tr>
                                <th style="size:10%;">TT</th>
                                <th style="size:60%">Tên Đơn Vị</th>
                                <th style="size:10%">Đại Diện</th>
                                <th style="size:20%">Điện thoại</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Khách hàng cá nhân</td>
                                <td>Ngô Tuấn Vũ</td>
                                <td>0984131355</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
