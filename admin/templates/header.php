<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a class="logo">Quản<span class="lite">Trị</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">

         
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">Chào,<?php echo $_SESSION['admin']['ho_ten']?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              
              <li>
                <a href="dang_xuat_admin.php"><i class="icon_key_alt"></i> Đăng Xuất</a>
              </li>
              
            </ul>
          </li>
        </ul>
      </div>
    </header>