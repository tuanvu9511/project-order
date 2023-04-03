
<div class="thongtinthietbi  border pt-3 pb-3  mt-3">
    <div class="col-12">
        <label for=""><b>3. Thông tin thiết bị</b></label>
    </div>
    <table class="table-bordered" id="tabledevice">
        <thead class="thead-light text-center">
            <tr>
                <th width="5%">
                    <button type="button" onclick="addRow()" class="btn"><i class="fa fa-plus-circle"></i></btn>
                    <input type="number" name="totalrow" id="totalrow" value="1" id="col" hidden>
                </th>
                <th width="24%">Thiết bị</th>
                <th width="8%">Số lượng</th>
                <th width="8%">Thời gian</th>
                <th width="14%">Đơn vị</th>
                <th width="17%">Đơn giá </th>
                <th width="17%">Thành tiền </th>
                <th width="3%"> </th>
            </tr>
        </thead>
        <tbody  class="text-center" id="tbodytable">
            <tr onChange="total(1);" id="tr1">
                <td>1</td>
                <td>
                    <select name="rentaldevice_1" id="" class="form-control">
                        <option value="1">Cho thuê máy tính xách tay</option>   
                        <option value="2">Cho thuê case máy tính để bàn</option>   
                        <option value="3">Cho thuê màn hình máy tính</option>   
                        <option value="4">Cho thuê bộ máy tính để bàn</option>   
                        <option value="5">Cho thuê máy hủy tài liệu</option>   
                        <option value="6">Cho thuê </option>   
                    </select>
                </td>
                <td>
                    <input type="text" id="sl_1" name="sl_1" class="form-control">
                </td>
                <td>
                    <input type="text" id="tg_1" name="tg_1" class="form-control">
                </td>
                <td>
                    <select name="unit_time_1" class="form-control border-0">
                        <option value="date">Ngày</option>
                        <option value="week">Tuần</option>
                        <option value="month">Tháng</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="unit_price_1" class="form-control" id="dg_1" >
                </td>
                <td>
                    <input  id="tt_1" type="text" name="total_price_1" class="form-control" readonly>
                </td>
                <td><button class="btn" type="button" onclick="removeclass(1)"><i class="fa fa-remove"></i></button></td>
            </tr>
        </tbody>
    </table>
    <div class="col-12 row">

        <div class="col row  form-check">
            <input type="checkbox" id="flexCheckDefault"> <label for="flexCheckDefault"> Hóa đơn VAT</label>
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
<script type="text/javascript">
    function format_curency(a) 
    {
        a.value = a.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
    };

    function total(i)
    {
        a = document.getElementById('tt_'+i);
        b = document.getElementById('sl_'+i);
        c = document.getElementById('tg_'+i);
        d = document.getElementById('dg_'+i);
        function replacedot(x){
            return x.value.split(".").join("").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
        };
        function removedot(y){
            return y.value.split('.').join('');
        };
        b.value = replacedot(b);
        c.value = replacedot(c);
        d.value = replacedot(d);
        a.value = removedot(b)*removedot(c)*removedot(d);
        a.value = replacedot(a);
    };
    function addRow() {
        var tableRow = document.getElementById("tabledevice");
        var t = document.getElementById("totalrow");
        var row = document.createElement("tr");
        var cell1 = document.createElement("td");
        var cell2 = document.createElement("td");
        var cell3 = document.createElement("td");
        var cell4 = document.createElement("td");
        var cell5 = document.createElement("td");
        var cell6 = document.createElement("td");
        var cell7 = document.createElement("td");
        var cell8 = document.createElement("td");
        t.value = Number(t.value) + 1;
        row.setAttribute("onchange","total("+t.value+")");
        row.setAttribute("id","tr"+t.value);
         cell1.innerHTML = t.value;
         cell2.innerHTML += '<select name="rentaldevice_'+t.value+'" id="" class="form-control">'+
                        '<option value="">Cho thuê máy tính xách tay</option>'+   
                        '<option value="">Cho thuê case máy tính để bàn</option>'+   
                        '<option value="">Cho thuê màn hình máy tính</option>'+
                        '<option value="">Cho thuê bộ máy tính để bàn</option> '+  
                        '<option value="">Cho thuê máy hủy tài liệu</option> '+  
                        '<option value="">Cho thuê </option>'+  
                        '</select>';
         cell3.innerHTML = '<input type="text" name="sl_'+t.value+'" id="sl_'+t.value+'" class="form-control">';
         cell4.innerHTML = '<input type="text" name="tg_'+t.value+'" id="tg_'+t.value+'" class="form-control">';
         cell5.innerHTML =  '<select name="unit_time_'+t.value+'" class="form-control border-0">'+
                                '<option value="">Ngày</option>'+
                                '<option value="">Tuần</option>'+
                                '<option value="">Tháng</option>'+
                            '</select>';
         cell6.innerHTML = '<input type="text" name="dg_'+t.value+'" id="dg_'+t.value+'" class="form-control">';
         cell7.innerHTML = '<input name="tt_'+t.value+'"  id="tt_'+t.value+'" type="text" class="form-control" readonly>';
         cell8.innerHTML = '<button class="btn" type="button" onclick="removeclass('+t.value+')"><i class="fa fa-remove"></i></button>';
         row.appendChild(cell1);
         row.appendChild(cell2);
         row.appendChild(cell3);
         row.appendChild(cell4);
         row.appendChild(cell5);
         row.appendChild(cell6);
         row.appendChild(cell7);
         row.appendChild(cell8);
         tableRow.appendChild(row);
        };
        function removeclass(i){
            element = document.getElementById("tr"+i);
            if(i>1){
                element.remove();
            }
        };

</script>