@extends('layouts.master')

@section('script-extend')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
    <form action="">
   <div class="thongtinkhachhang border pt-3 pb-3 container">
        <div class="col-12 row">
            <div class="col">
                <h4> <i class="fa fa-address-book"></i> Thông tin khách hàng</h4>
            </div>
            <div class="col row">
                <div class="col">
                    <input type="radio" name="typeCustumer"> Khách hàng cá nhân
                </div>
                <div class="col">
                    <input type="radio" name="typeCustumer"> Khách hàng doanh nghiệp
                </div>
            </div>
        </div>
        <div class="col-12 row mt-3">
            <lable class="col-2"> <i class="fa fa-users"> Tên đơn vị: </i></lable>
            <input type="text" class="form-control col-10" >
        </div>

        <div class="col-12 row mt-3">
            <lable class="col-2"><i class="fa fa-user">  Tên khách hàng:</i></lable>
            <input type="text" class="form-control col-4" >
            <lable class="col-1"><i class="fa fa-id-card"> Số CCCD:  </i></lable>
            <input type="text" class="form-control col-2" >
            <lable class="col-1"><i class="fa fa-calendar"> Cấp ngày: </i></lable>
            <input type="text" class="form-control  col-2" >
        </div>
        <div class="col-12 row mt-3">
            <label for="" class="col-2"><i class="fa fa-phone"> Điện thoại</i> </label>
            <input type="text" class="form-control col-10">
        </div>
        <div class="col-12 row mt-3">
            <label for="" class="col-2"><i class="fa fa-location-arrow"> Địa chỉ</i></label>
            <input type="text" class="form-control col-10">
        </div>
   </div>

   <div class="thongtinlapmay border pt-3 pb-3 container mt-3">
        <div class="col-12 row">
           <label for="" class="col-3"><h5><i class="fa fa-user"> Người nhận thiết bi</i></h5> </label> 
           <input type="text" class="form-control col-3" readonly="">
           <label for="" class="col-2"><h5 class="text-right"><i class="fa fa-phone"> Điện thoại</i></h5></label> 
           <input type="text" class="form-control col-2" readonly="">
           <div class="col-2">
               <a href="" class="btn btn-info form-control"> <i class="fa fa-pencil-square-o" aria-hidden="true"> Thay đổi</i> </a>
           </div>
       </div>
       <div class="col-12 row  mt-3">
           <label for="" class="col-3"><h5><i class="fa fa-location-arrow"> Địa chỉ lắp máy</h5></i></label>
           <input type="text" class="form-control col-7" readonly="">
           <div class="col-2">
               <a href="" class="btn btn-info form-control"><i class="fa fa-pencil-square-o" aria-hidden="true"> Thay đổi</i> </a>
           </div>
       </div>

        
   </div>

   <div class="thoigianthue border pt-3 pb-3 container mt-3 align-content">
        <div class="col-12 row">
            <label for="" class="col-3">Thời gian thuê từ ngày</label>
            <input type="date" class="form-control col-2">
            <label for="" class="col-1 text-center">đến</label>
            <input type="date" class="form-control col-2">
            <label for="" class="col-2 text-right">Đơn vị tính</label>
            <select name="" id="" class="form-control col-2">
                <option value="">Ngày</option>
                <option value="">Tuần</option>
                <option value="">Tháng</option>
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
                   <th class="col-1"><a href="" class="btn"><i class="fa fa-plus-circle"></i></a></th>
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
@endsection
