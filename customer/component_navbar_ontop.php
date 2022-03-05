<!-- navbar onTop -->
<div class="d-none position-rel p_t-b items-center setup992" id="navbar">
    <div class="container grey">
        <div class="space-flex">
            <!-- part one -->
            <div class="p_t">
                <i class="m_l-r fas fa-envelope"></i>
                <a class="n-decoration grey" href="mailto:">info@company.com</a>
                <i class="m_l-r fas fa-phone"></i>
                <a class="n-decoration grey" href="callto:">010-020-0304</a>
            </div>

            <!-- part two -->
            <div>
                <a class="hover n-decoration light" href="user.php"> Xin chào
                    <?php 
                    echo $_SESSION['user_name'];
                    ?>
                </a>
                <span> | </span>
                <a class="hover n-decoration light" href="signout.php">
                    Đăng xuất
                </a>
            <br>
            <a class="n-decoration grey" href="https://www.facebook.com" target="_blank">
                <i class="navbar-icon m_r w fab fa-facebook-f"></i>
            </a>
            <a class="n-decoration grey" href="https://www.instagram.com" target="_blank">
                <i class="navbar-icon m_r w fab fa-instagram"></i>
            </a>
            <a class="n-decoration grey" href="https://twitter.com" target="_blank">
                <i class="navbar-icon m_r w fab fa-twitter"></i>
            </a>
            <a class="n-decoration grey" href="https://www.linkedin.com" target="_blank">
                <i class="navbar-icon m_r w fab fa-linkedin"></i>
            </a>
        </div>

    </div>
</div>
</div>
