<div class="tab-pane active">
    <form class="login" name="signIn" method="post" onsubmit="return check_validation_signin()" action="process_signin.php" id="form1">

        <!-- 2.1.1 nhập tên và mật khẩu -->
        <span id="user_signin_empty" class="show-error">Tên đăng nhập không được để trống!</span>
        <input class="input-login" type="text" name="user_name" id="user_name" placeholder="Tên đăng nhập">
        <i class="fas fa-user"></i>
        <span id="password_signin_empty" class="show-error">Mật khẩu không được để trống!</span>
        <input class="input-login" type="password" name="password" id="password" placeholder="Mật khẩu">

        <i class="fas fa-key"></i>
        <!-- <a href="#0" class="hide-password">Show</a> -->

        <!-- 2.1.2 ghi nhớ đăng nhập, quên mật khẩu -->
        <div class="box-center">
            <div>
                <input type="checkbox" name="remember"> 
                <label class="rememberme-text" for="rememberMe">Ghi nhớ Đăng Nhập?</label>
            </div> <!-- tạo dữ liệu lưu lại lượt đăng nhập -->
            <div>
                <a class="forgot-pass" href="#">Quên mật khẩu?</a>
            </div> <!-- trỏ đến phần lấy lại mật khẩu -->
        </div>

        <!-- 2.1.3 nút đăng ký -->
        <button class="btn-button" type="submit" onclick="return check_validation_signin()">Đăng Nhập</button>

    </form>
</div>