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
            $('#DEMO').autoNumeric('init');
        });
    </script>
    <script>
        function test(){
            alert('kiểm tra ok');
        };
        function format_curency(a) {
            a.value = a.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
        }

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
                <button class="btn  " type="button" onclick="test( )"><i class="fa fa-pencil"> </i> Lựa chọn mới</button>
            </div>
          </div>
        </div>
    <div class="col">
        <div class="thongtinlapmay border pt-3 pb-3 container mt-3">
        <label><b>2. Thông tin người nhận thiết bị</b></label>
            <p id="infoReciver">
                <p>
                  - Người nhận thiết bị: <span id="reciverName">Ngô Tuấn Vũ </span>
                </p>
                <p>
                  - Điện thoại: <span id="reciverPhone"><a href="tel:0984131355">0984131355</a></span>
                </p>
                <p>
                  - Địa chỉ lắp đặt: <span id="revicerAddress">17A Ngõ 21 Lê Văn Lương, Thanh Xuân, Hà Nôi</span>
                </p>
                <p>
                    <div class="input-group row">
                        <span class="input-group-addon col-4" id="basic-addon1">- Ngày lắp:</span>
                        <input type="text" class="datepicker form-control col-8 border-0" value="{{date_format(today(),'d/m/Y')}}">
                    </div>
                </p>

            </p>
            <div class="col-12 text-right">
                <button class="btn" type="button" onclick="test()"><i class="fa fa-edit"> </i> thay đổi</button>
            </div>
        </div>
    </div>
  </div>
   <div class="thongtinthietbi  border pt-3 pb-3  mt-3">
        <div class="col-12">
            <label for=""><b>3. Thông tin thiết bị</b></label>
        </div>
       <table class="table-bordered table-hover">
           <thead class="thead-light text-center">
               <tr>
                   <th width="5%"><a href="#" class="btn"><i class="fa fa-plus-circle"></i></a></th>
                   <th width="24%">Thiết bị</th>
                   <th width="8%">Số lượng</th>
                   <th width="8%">Thời gian</th>
                   <th width="14%">Đơn vị</th>
                   <th width="18%">Đơn giá </th>
                   <th width="18%">Thành tiền </th>
               </tr>
           </thead>
           <tbody  class="text-center">
               <tr>
                   <td>1</td>
                   <td>
                      <select name="" id="" class="form-control">
                        <option value="">Cho thuê máy tính xách tay</option>   
                        <option value="">Cho thuê case máy tính để bàn</option>   
                        <option value="">Cho thuê màn hình máy tính</option>   
                        <option value="">Cho thuê bộ máy tính để bàn</option>   
                        <option value="">Cho thuê máy hủy tài liệu</option>   
                        <option value="">Cho thuê </option>   
                       </select>
                   </td>
                   <td><input type="number" class="form-control"></td>
                   <td><input type="text" class="form-control"></td>
                   <td><select type="text" class="form-control border-0">
                           <option value="">Ngày</option>
                           <option value="">Tuần</option>
                           <option value="">Tháng</option>
                       </select></td>
                   <td>
                        <input type="text" class="form-control" onChange="format_curency(this);">
                    </td>
                   <td>
                       

                        <input  onChange="format_curency(this);" type="text">
                   </td>
               </tr>
           </tbody>
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
