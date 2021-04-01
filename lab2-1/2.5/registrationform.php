<HTML>
    <HEAD>
        <TITLE>A Simple Form</TITLE>
    </HEAD>
    <BODY>
        <FORM
            ACTION="registrationform.html"
            METHOD=POST >
            Register Account<!-- comment -->
            <BR><!-- comment -->
            <label>Họ: </label>
            <INPUT type="text" name="FIRSTNAME">
            <BR><BR>
            <label>Tên: </label>
            <INPUT type="text" name="LASTNAME"><!-- comment -->
            <BR><BR>
            <label>Tên người dùng: </label>
            <INPUT type="text" name="ACCOUNTNAME" value="@gmail.com">
            <BR>
            <label>Bạn có thể sử dụng dấu chấm, chữ cái hoặc chữ số</label><!-- comment -->
            <br><BR>
            <label>Mật khẩu: </label>
            <INPUT type="text" name="PASSWORD">
            <BR><!-- comment -->
            <label>Sử dụng 8 kí tự trở lên và kết hợp giữ chữ cái chữ số</label>
            <br><BR>
            <label>Xác nhận: </label>
            <INPUT type="text" name="CONFIRM">
            <BR><BR>
            <INPUT TYPE="SUBMIT" VALUE="Click to Submit">
            <INPUT TYPE="RESET" VALUE="Earse and Restart">
        </FORM>
    </BODY>
</HTML>


