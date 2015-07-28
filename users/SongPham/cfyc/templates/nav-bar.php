<!-- Mobile Navigation -->
<a id="mobile-navigation-menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
    <i class="fa fa-bars"></i>
</a>
<nav id="mobile-navigation-wrapper">
    <ul class="sidebar-nav">
        <a id="mobile-navigation-menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
            <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
             <a href="#language"><img src="<?php echo USER_BASE_URL ?>/img/english.jpg" class="img-circle"></a>
        </li>
        <li>
            <a href="#">Trang Chủ</a>
        </li>
        <li>
            <div class="list-group panel">
                <a href="#club-menu" class="list-group-item-success" data-toggle="collapse" aria-expanded="false">Câu Lạc Bộ<span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="#">TP. Hồ Chí Minh</a></li>
                        <li><a href="#">Hà Nội</a></li>
                        <li><a href="#">Đà Nẵng</a></li>
                        <li><a href="#">Bình Dương</a></li>
                        <li><a href="#">Biên Hòa</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="">
            <div class="list-group panel">
                <a href="#dich-vu-menu" class="list-group-item-success" data-toggle="collapse" aria-expanded="false">Dịch Vụ <span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="#">Group Fitness</a></li>
                        <li><a href="#">Giảm Căng Cơ</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">Yoga</a></li>
                        <li><a href="#">Huấn Luyện cá nhân</a></li>
                        <li><a href="#">Kickfit</a></li>
                        <li><a href="#">Võ tự do MMA</a></li>
                        <li><a href="#">Spa</a></li>
                        <li><a href="#">Clb dành cho trẻ em</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="">
            <div class="list-group panel">
                <a href="#lifestyle-menu" class="list-group-item-success" data-toggle="collapse" aria-expanded="false">Phong Cách Sống<span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" aria-expanded="false">
                    <ul>
                        <li><a href="#">Giảm Cân</a></li>
                        <li><a href="#">Thể dục & Sức khỏe</a></li>
                        <li><a href="#">Luyện Tập</a></li>
                        <li><a href="#">Phong Cách Sống</a></li>
                        <li><a href="#">Dinh Dưỡng</a></li>
                        <li><a href="#">Gia Đình</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <a href="#" onclick = $("#mobile-navigation-menu-close").click(); >Thành Viên</a>
        </li>
        <li>
            <a href="#" onclick = $("#mobile-navigation-menu-close").click(); >Lịch học</a>
        </li>
    </ul>
</nav>
<div class="logo">
    <img src="<?php echo USER_BASE_URL ?>/img/logo.png" class="img-responsive logo-img" alt="California Fitness &amp; Yoga">
</div>
<nav id="desktop-navigation">
    <ul class="desktop-menu">
        <li><a href="#top" class="">Trang Chủ</a></li>
        <li><a href="#"   data-toggle="collapse" data-target="#clubs" class="">Câu Lạc Bộ</a></li>
        <li><a href="#"  data-toggle="collapse" data-target="#services" class="">Dịch Vụ</a></li>
        <li><a href="#lifestyle"  data-toggle="collapse" data-target="#lifestyle" class="">Phong Cách Sống</a></li>
        <li><a href="#"  class="">Thành Viên</a></li>
        <li><a href="#"  class="">Lịch học</a></li>
        <li><a href="#"  class=""><img src="<?php echo USER_BASE_URL ?>/img/vietnamese.jpg" class="img-circle"></a></li>
        <li class="search"></li>
    </ul>
    <div id="clubs" class="sub-menu clubs collapse">
        <ul>
            <li><a href="#">TP. Hồ Chí Minh</a></li>
            <li><a href="#">Hà Nội</a></li>
            <li><a href="#">Đà Nẵng</a></li>
            <li><a href="#">Bình Dương</a></li>
            <li><a href="#">Biên Hòa</a></li>
        </ul>
    </div>
    <div id="services" class="sub-menu collapse">
        <ul>
            <li><a href="#">Group Fitness</a></li>
            <li><a href="#">Giảm Căng Cơ</a></li>
            <li><a href="#">Dance</a></li>
            <li><a href="#">Yoga</a></li>
            <li><a href="#">Huấn Luyện cá nhân</a></li>
            <li><a href="#">Kickfit</a></li>
            <li><a href="#">Võ tự do MMA</a></li>
            <li><a href="#">Spa</a></li>
            <li><a href="#">Clb dành cho trẻ em</a></li>
        </ul>
    </div>
    <div id="lifestyle" class="sub-menu collapse">
        <ul>
            <li><a href="#">Giảm Cân</a></li>
            <li><a href="#">Thể dục & Sức khỏe</a></li>
            <li><a href="#">Luyện Tập</a></li>
            <li><a href="#">Phong Cách Sống</a></li>
            <li><a href="#">Dinh Dưỡng</a></li>
            <li><a href="#">Gia Đình</a></li>
        </ul>
    </div>
</nav>