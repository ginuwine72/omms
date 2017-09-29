<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand <?=($parent === 'home') ? 'active' : '';?>" href="<?=site_url();?>">หน้าหลัก</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?=($parent === 'order') ? 'active' : '';?>"> <a href="<?=site_url('order/index');?>">รายการแจ้งซ่อม</a> </li>
        <li class="<?=($parent === 'device') ? 'active' : '';?>"> <a href="<?=site_url('device/index');?>">รายการอุปกรณ์</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if ( ! $this->ion_auth->logged_in()) : ?>
          <li class="<?=($parent === 'auth') ? 'active' : '';?>"> <a href="<?=site_url('auth/login');?>">เข้าสู่ระบบ</a> </li>
        <?php else: ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle <?=($parent === 'account') ? 'active' : '';?>" data-toggle="dropdown">บัญชีของคุณ <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li> <a href="<?=site_url('account/profile');?>">ข้อมูลส่วนตัว</a> </li>
              <li class="divider"></li>
              <?php if ($this->ion_auth->in_group('technician')): ?>
                <li> <a href="<?=site_url('technician/order');?>">ระบบช่างเทคนิค</a> </li>
                <li class="divider"></li>
              <?php endif; ?>
              <?php if ($this->ion_auth->in_group('admin')) : ?>
                <li> <a href="<?=site_url('admin/device');?>">ระบบแอดมิน</a> </li>
                <li> <a href="<?=site_url('admin/asset');?>">อัลบั้มไฟล์เอกสาร</a> </li>
                <li class="divider"></li>
              <?php endif; ?>
              <li> <a href="<?=site_url('auth/logout');?>">ออกจากระบบ</a> </li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
