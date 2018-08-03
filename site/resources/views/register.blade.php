<body>
    <div class="container">
        <div class="content">
            <form action="register" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <table>
                    <tr>
                        <td>ชื่อ</td>
                        <td><input type="text" name="fname" value=""></td>
                    <tr>
                    <tr>
                        <td>นามสกุล</td>
                        <td><input type="text" name="lname" value=""></td>
                    <tr>
                    <tr>
                        <td>อายุ</td>
                        <td><input type="number" name="age" value=""></td>
                    <tr>
                </table>
                <input type="submit" value="สมัครสมาชิก">
            </form>  
        </div>
        <div class="title"><?php if(isset($fname)) echo "HELLO Mss. ".$fname." ".$lname; ?></div>
        <br><?php if(isset($age)) echo "อายุ ".$age; ?>
        <!-- หรือ -->	
        <!-- <div class="title">Hello {{{ $name or '' }}}</div> -->
    </div>
</body>