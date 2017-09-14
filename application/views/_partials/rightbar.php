<div class="list-group">
  <a href="<?=site_url('account/profile');?>" class="list-group-item <?=($menu === 'profile') ? 'active' : '';?>">แก้ไขข้อมูลทั่วไป</a>
  <a href="<?=site_url('account/profile/edit');?>" class="list-group-item <?=($menu === 'edit') ? 'active' : '';?>">แก้ไขข้อมูลบัญชี</a>
  <a href="<?=site_url('account/profile/change_password');?>" class="list-group-item <?=($menu === 'change_password') ? 'active' : '';?>">เปลี่ยนรหัสผ่าน</a>
</div>
<?php $this->load->view('_partials/messages'); ?>
