<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"> แก้ไขข้อมูลทั่วไป
      <small><?php echo lang('edit_user_subheading');?></small>
    </h3>
  </div>
  <div class="panel-body">
    <?php echo form_open(uri_string(),array('class'=>'form-horizontal'));?>
    <?php echo form_hidden('id', $user['id']);?>
    <div class="form-group">
      <?php echo form_label('คำนำหน้า','',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php $tt = array(''=>'เลือกรายการ','นาย'=>'นาย','นาง'=>'นาง','นางสาว'=>'นางสาว');
        echo form_dropdown(array('name'=>'title','class'=>'form-control'),$tt,set_value('title',$user['title']));?>
      </div>
    </div>
    <div class="form-group">
      <?php echo form_label('ชื่อ','',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php echo form_input(array('name'=>'firstname','class'=>'form-control'),set_value('firstname',$user['firstname']));?>
      </div>
    </div>
    <div class="form-group">
      <?php echo form_label('นามสกุล','',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php echo form_input(array('name'=>'lastname','class'=>'form-control'),set_value('lastname',$user['lastname']));?>
      </div>
    </div>
    <div class="form-group">
      <?php echo form_label('โทรศัพท์','phone',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php echo form_input(array('name'=>'phone','class'=>'form-control tel','maxlength'=>'10'),set_value('phone',$user['phone']));?>
      </div>
    </div>
    <div class="form-group">
      <?php echo form_label('','',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php echo form_submit('','ยืนยัน',array('class'=>'btn btn-primary'));?>
        <?php echo form_reset('','ล้าง',array('class'=>'btn btn-default'));?>
      </div>
    </div>
    <?php echo form_close();?>
  </div>
</div>
