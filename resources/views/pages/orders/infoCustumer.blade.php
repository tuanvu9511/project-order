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