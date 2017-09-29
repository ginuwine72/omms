<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if ($this->ion_auth->in_group('technician')): ?>
          <li class="<?=($parent=='order')?'active':'';?>"> <a href="<?=site_url('technician/order');?>">รายการแจ้งซ่อม(ช่าง)</a> </li>
        <?php endif; ?>
        <?php if ($this->ion_auth->in_group('admin')) : ?>
          <li class="<?=($parent=='order')?'active':'';?>"> <a href="<?=site_url('admin/order');?>">รายการแจ้งซ่อม(แอดมิน)</a> </li>
          <li class="<?=($parent=='device')?'active':'';?>"> <a href="<?=site_url('admin/device');?>">รายการอุปกรณ์</a> </li>
          <li class="<?=($parent=='user')?'active':'';?>"> <a href="<?=site_url('admin/user');?>">รายการสมาชิก</a> </li>
        <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
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
              <li> <a href="<?=site_url();?>">กลับหน้าหลัก</a> </li>
              <li class="divider"></li>
            <?php endif; ?>
            <li> <a href="<?=site_url('auth/logout');?>">ออกจากระบบ</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
