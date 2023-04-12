
<div class="thongtinthietbi  border pt-3 pb-3  mt-3">
    <div class="col-12">
        <label for=""><b>3. Yêu cầu thiết bị đơn hàng</b></label>
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
                <td class="">1</td>
                <td>
                    <input type="text" class="form-control" name="yc_1" id="yc_1">
                </td>
                <td>
                    <input type="text" id="sl_1" name="sl_1" class="form-control text-right" placeholder="0">
                </td>
                <td>
                    <input type="text" id="tg_1" name="tg_1" class="form-control text-right" placeholder="0">
                </td>
                <td>
                    <select name="unit_time_1" class="form-control">
                        <option value="date" selected>Ngày</option>
                        <option value="week">Tuần</option>
                        <option value="month">Tháng</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="unit_price_1" class="form-control text-right" id="dg_1" placeholder="0">
                </td>
                <td>
                    <input  id="tt_1" type="text" class="form-control text-right" readonly  placeholder="0">
                </td>
                <td><button class="btn" type="button" onclick="removeclass(1)"><i class="fa fa-trash"></i></button></td>
            </tr>
        </tbody>
    </table>
    <div class="col-12">
        <div class="col-6 offset-6 text-right border-bottom input-group" id="totalbeforetax">
            <div class="col-6 ">Tổng tiền trước thuế:  </div>    
            <div class="col-6 "><input type="text" name="totalbeforetax" id="totalbeforetax-input" class="border-0 text-right" readonly></div>    
        </div>
        <div class="col-6 offset-6 text-right border-bottom input-group"  id="taxcost">
            <div class="col-6 ">Thuế VAT:  </div>    
            <div class="col-6"><input type="text" name="taxcost" id="taxcost-input" class="border-0 text-right"  readonly></div>
        </div>
        <div class="col-6 offset-6 text-right border-bottom input-group" id="totalaftertax">
            <div class="col-6 ">Tổng tiền sau thuế:</div>    
            <div class="col-6"><input type="text" name="taxcost" id="taxcost-input" class="border-0 text-right"  readonly></div>
        </div>
    </div>
    <div class="col-12 row">

        <div class="col row  form-check">
            <input type="checkbox" id="is_tax" name="is_VAT" value="0" onchange="changeistax()"> <label for="flexCheckDefault"> Hóa đơn VAT</label>
        </div>

        <div class="col row  form-check">
            <input type="checkbox" checked=""> <label for=""> Miễn phí vận chuyển lắp đặt</label>
        </div>

        <div class="col row  form-check">
            <input type="checkbox" checked=""> <label for="">Thanh toán sau khi kết thúc</label>
        </div>

        <div class="col row  form-check">
            <input type="checkbox" name="is_deposite"> <label for="">Đặt cọc</label>
        </div>

    </div>
</div>
<script type="text/javascript">
    function format_curency(a) 
    {
        a.value = a.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
    };
    function recal(){
        n = parseFloat(document.getElementById('totalrow').value)+1;
        var total = 0;
        for(m=1;m < n; m++){
            total = parseInt(removedot(document.getElementById('tt_'+m))) + total;
       };
       total = total.toString().split(".").join("").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
       document.getElementById('totalbeforetax-input').value = total;
    }
    function replacedot(x){
            return x.value.split(".").join("").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
        };
    function removedot(y){
        return y.value.split('.').join('');
    };
    function total(i)
    {
        a = document.getElementById('tt_'+i);
        b = document.getElementById('sl_'+i);
        c = document.getElementById('tg_'+i);
        d = document.getElementById('dg_'+i);
        b.value = replacedot(b);
        c.value = replacedot(c);
        d.value = replacedot(d);
        a.value = removedot(b)*removedot(c)*removedot(d);
        a.value = replacedot(a);
        recal();
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
         cell1.innerHTML = tableRow.rows.length;
         cell1.setAttribute('class','text-center');
         cell2.innerHTML = '<input type="text" class="form-control" name="yc_'+t.value+'" id="yc_'+t.value+'">';
         cell3.innerHTML = '<input type="text" name="sl_'+t.value+'" id="sl_'+t.value+'" class="form-control text-right" placeholder="0">';
         cell4.innerHTML = '<input type="text" name="tg_'+t.value+'" id="tg_'+t.value+'" class="form-control text-right" placeholder="0">';
         cell5.innerHTML =  '<select name="unit_time_'+t.value+'" class="form-control">'+
                                '<option value="date">Ngày</option>'+
                                '<option value="week">Tuần</option>'+
                                '<option value="month">Tháng</option>'+
                            '</select>';
         cell6.innerHTML = '<input type="text" name="dg_'+t.value+'" id="dg_'+t.value+'" class="form-control text-right" placeholder="0">';
         cell7.innerHTML = '<input   id="tt_'+t.value+'" type="text" class="form-control text-right" readonly  placeholder="0">';
         cell8.innerHTML = '<button class="btn" type="button" onclick="removeclass('+t.value+')"><i class="fa fa-trash"></i></button>';
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
            table = document.getElementById("tabledevice");
            if(table.rows.length>2){
                element.remove();
                for(e=1;e<table.rows.length;e++){
                    table.rows[e].cells[0].innerHTML = e;
                }
            }
        };
        function changeistax(){
            if(document.getElementById("is_tax").checked == false){
                document.getElementById("taxcost").style.display = "none";
                document.getElementById("totalaftertax").style.display = "none";
            }else{
                document.getElementById("taxcost").style.display = "block";
                document.getElementById("totalaftertax").style.display = "block";
            }
        }
</script>