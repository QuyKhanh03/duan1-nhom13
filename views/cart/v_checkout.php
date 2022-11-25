<section id="content">
    <div class="main" style="min-height:768px">
        <div class="container">
           
            <form name="them_khach_hang" action="checkout.php?key=dat-hang" method="post">
                <table align="center" width="90%" cellpadding="2px" cellspacing="0">

                    <tr>
                        <td align="center">
                            Tên khách hàng<br />
                            <input type="text" value="" name="ten_khach_hang" id="ten_khach_hang" style="width:450px; text-align:center"/>
                    </tr>
                    
                    <tr>
                        <td align="center">Ngày Sinh<br /><input type="date" name="ngay_sinh" id="ngay_sinh" class="ngay" style="width:450px; text-align:center"/></td>
                    </tr>
                    <tr>
                        <td align="center">Email<br /><input type="text" value="" name="email" id="email" style="width:450px; text-align:center"/></td>
                    </tr>
                    <tr>
                        <td align="center">Địa chỉ<br /><input type="text" value="" name="dia_chi" id="dia_chi" style="width:450px; text-align:center"/></td>
                    </tr>
                    <tr>
                        <td align="center">Điện thoại<br /><input type="text" name="dien_thoai" id="dien_thoai" style="width:450px; text-align:center"/></td>
                    </tr>

                    <tr>
                        <td align="center">Ghi chú<br /><textarea name="ghi_chu" id="ghi_chu" cols="55" rows="3"  style="width:450px; text-align:center"></textarea></td>
                    </tr>



                    <tr>
                        <td align="center">Hình thức thanh toán<br />
                            <input type="radio" name="httt" value="tiền mặt" checked="true"/> Tiền mặt
                            <input type="radio" name="httt" value="chuyển khoản"/> Chuyển khoản
                            <input type="radio" name="httt" value="tín dụng"/> Tín dụng
                        </td>
                    </tr>

                    <tr>
                        <td align="center"><input type="submit"  class="btn-danger" value="Lưu" name="submit" id="submit"/>
                            <input type="button"  class="btn-primary"
                                   onclick="window.location.href = 'cart.php'"
                                   value="Quay về"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $("#submit").click(function (e) {
            var patternEmail = /\S+@\S+\.\S+/;
            if($("#ten_khach_hang").val() == "")
            {
                alert("Họ tên không được trống");
                $("#ten_khach_hang").css("border", "1px solid red");
                $("#ten_khach_hang").focus();
                return false;
            }
            else if($("#ngay_sinh").val() == "")
            {
                alert("bạn chưa chọn ngày sinh");
                $("#ngay_sinh").css("border", "1px solid red");
                $("#ngay_sinh").focus();
                return false;
            }
            else if($("#email").val() == "")
            {
                alert("Email không được trống");
                $("#email").css("border", "1px solid red");
                $("#email").focus();
                return false;
            }
            else if(!patternEmail.test($("#email").val()))
            {
                alert("Email không hợp lệ");
                $("#email").css("border", "1px solid red");
                $("#email").focus();
                return false;
            }
            else if($("#dia_chi").val() == "")
            {
                alert("Địa chỉ không được trống");
                $("#dia_chi").css("border", "1px solid red");
                $("#dia_chi").focus();
                return false;
            }
            else if($("#dien_thoai").val() == "")
            {
                alert("Điện thoại không được trống");
                $("#dien_thoai").css("border", "1px solid red");
                $("#dien_thoai").focus();
                return false;
            }

            else if($("#ghi_chu").val() == "")
            {
                alert("Ghi chú không được trống");
                $("#ghi_chu").css("border", "1px solid red");
                $("#ghi_chu").focus();
                return false;
            }
            else
            {
                alert("Đặt hàng thành công");
                return true;
            }
        });
    });
</script>