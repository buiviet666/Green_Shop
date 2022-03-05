        <!-- THÔNG BÁO -->
        <div class="open_notify">
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">Hãy đăng nhập để thực hiện tác vụ này</span>
                <span class="close-btnn">
                    <span class="fas fa-times"></span>
                </span>
            </div>
        </div>
        <!-- HẾT THÔNG BÁO -->
<!-- navbar directional -->
<div class="position-rel space-flex-wrap p_t-b items-center setup992 bg-white" id="header-navbar">   
    <div class="items-center space-flex container flex-inhe">

        <!-- part one -->
        <a class="m_r2 m_b items-center n-decoration" id="logo" href="index.php">Green Shop</a>

        <!-- nút bấm khi màn hình thu nhỏ dưới 992px -->
        <button class="buttonMini" onclick="myButtonMini()"><i class="fas fa-bars" id="button_hidden_small"></i></button>

        <!-- part two -->
        <div class="header-setup all-center w100" id="collapse_btn">

            <!-- 2.1 -->
            <div class="flex-auto">
                <ul class="header-click space-flex-wrap">
                    <li><a class="hover dark n-decoration p d-block" href="index.php">Home</a></li>
                    <li><a class="hover dark n-decoration p d-block" href="about.php">About</a></li>
                    <li><a class="hover dark n-decoration p d-block" href="shop.php">Shop</a></li>
                    <li><a class="hover dark n-decoration p d-block" href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- 2.2 -->
            <div class="header-all p_t-b space-flex-wrap position-rel items-center text-center">

                <!-- tạo ra popup của tìm kiếm ở đây -->
                <div class="header-search m_t2 m_b4">
                    <div class="header-input">
                        <input type="text" class="search-time black" id="inputMobileSearch" placeholder="Search...">
                        <div class="search-icon black" onclick="demo_in2 ()" href="#0">
                            <i class="search w20 fas fa-search"></i>
                        </div>
                    </div>
                </div>

                <a class="unsee m_r3" onclick="demo_in2 ()" href="#0"> <!-- thêm chức năng để tìm kiếm những sản phẩm của shop, trỏ đến popup tìm kiếm (làm thêm) -->
                    <i class="w20 black fas fa-search">
                    </i>
                </a>

            </div>

        </div>

    </div>
</div>