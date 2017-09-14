<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand <?=($parent === 'home') ? 'active' : '';?>" href="<?=site_url();?>">หน้าหลัก</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li> <a href="<?=site_url('admin/order');?>">รายการแจ้งซ่อม</a> </li>
        <li> <a href="<?=site_url('admin/user');?>">รายการสมาชิก</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle <?=($parent === 'account') ? 'active' : '';?>" data-toggle="dropdown">บัญชีของคุณ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li> <a href="<?=site_url('account');?>">ข้อมูลส่วนตัว</a> </li>
            <li class="divider"></li>
            <li> <a href="<?=site_url('admin/order');?>">เข้าสู่ระบบแอดมิน</a> </li>
            <li class="divider"></li>
            <li> <a href="<?=site_url('auth/logout');?>">ออกจากระบบ</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
