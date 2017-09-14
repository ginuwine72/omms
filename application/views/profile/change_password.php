<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"> <?php echo lang('edit_user_heading');?>
      <small><?php echo lang('edit_user_subheading');?></small>
    </h3>
  </div>
  <div class="panel-body">
    <?php echo form_open(uri_string(),array('class'=>'form-horizontal'));?>
    <?php echo form_hidden('id', $user['id']);?>
    <div class="form-group">
      <?php echo form_label('รหัสผ่านเก่า','old',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php echo form_password(array('name'=>'old','class'=>'form-control'));?>
      </div>
    </div>
    <div class="form-group">
      <label for="new_password">
      </label>
      <?php echo form_label('รหัสผ่านใหม่','new',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php echo form_password(array('name'=>'new','class'=>'form-control'));?>
      </div>
    </div>
    <div class="form-group">
      <?php echo form_label('รหัสผ่านใหม่(ยืนยัน)','new_confirm',array('class'=>'control-label col-md-4'));?>
      <div class="col-md-8">
        <?php echo form_password(array('name'=>'new_confirm','class'=>'form-control'));?>
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
