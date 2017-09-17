<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">เพิ่มข้อมูลสมาชิก</h3> </div>
  <?php echo form_open(uri_string(),array('class'=>'form-horizontal','autocomplete'=>'off'));?>
  <div class="panel-body">
    <div class="form-group">
      <?php echo form_label('อีเมล์','',array('class'=>'control-label col-md-3'));?>
      <div class="col-md-9"> <?php echo form_input(array('name'=>'email','class'=>'form-control'),set_value('email'));?> </div>
    </div>
    <div class="form-group">
      <?php echo form_label('รหัสผ่าน','',array('class'=>'control-label col-md-3'));?>
      <div class="col-md-9"> <?php echo form_password(array('name'=>'password','class'=>'form-control'));?> </div>
    </div>
    <div class="form-group">
      <?php echo form_label('รหัสผ่าน(ยืนยัน)','',array('class'=>'control-label col-md-3'));?>
      <div class="col-md-9"> <?php echo form_password(array('name'=>'password_confirm','class'=>'form-control'));?> </div>
    </div>
    <div class="form-group">
      <?php echo form_label('คำนำหน้าชื่อ','',array('class'=>'control-label col-md-3'));?>
      <div class="col-md-9"> <?php echo form_dropdown(array('name'=>'title','class'=>'form-control'),array('นาย'=>'นาย','นาง'=>'นาง','นางสาว'=>'นางสาว'),set_value('title'));?> </div>
    </div>
    <div class="form-group">
      <?php echo form_label('ชื่อ','',array('class'=>'control-label col-md-3'));?>
      <div class="col-md-9"> <?php echo form_input(array('name'=>'firstname','class'=>'form-control'),set_value('firstname'));?> </div>
    </div>
    <div class="form-group">
      <?php echo form_label('นามสกุล','',array('class'=>'control-label col-md-3'));?>
      <div class="col-md-9"> <?php echo form_input(array('name'=>'lastname','class'=>'form-control'),set_value('lastname'));?> </div>
    </div>
    <div class="form-group">
      <label for="" class="control-label col-md-3">กลุ่มผู้ใช้</label>
      <div class="col-md-9"> <?=form_dropdown(array('name'=>'groups[]','class'=>'form-control','multiple'=>TRUE),$groups,set_value('groups[]'));?> </div>
    </div>
    <div class="form-group">
      <label for="" class="control-label col-md-3">สถานะ</label>
      <div class="col-md-9"> <?=form_dropdown(array('name'=>'active','class'=>'form-control'),array('0'=>'ปิดใช้งาน','1'=>'เปิดใช้งาน'),set_value('active'));?> </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-9 col-md-offset-3"> <?php echo form_submit('','บันทึกข้อมูล',array('class'=>'btn btn-primary'));?> </div>
  </div>
  <?php echo form_close();?>
  <div class="panel-footer"> <?php $this->load->view('_partials/messages'); ?> </div>
</div>
