<div class="container">
  <div class="row" style="padding-top:10em;">
    <div class="col-sm-6 col-sm-offset-3">
      <div class="panel panel-success">
        <div class="panel-heading"> <h3 class="panel-title"> <?php echo lang('login_heading');?> <small><?php echo lang('login_subheading');?></small> </h3> </div>
        <div class="panel-body">
          <?php echo form_open("auth/login",array('class'=>'form-horizontal','autocomplete'=>'off'));?>
          <div class="form-group"> <?php echo form_label('ชื่อผู้ใช้:', 'identity',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?php echo form_input($identity,'',array('class'=>'form-control'));?> </div>
          </div>
          <div class="form-group"> <?php echo lang('login_password_label', 'password',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?php echo form_input($password,'',array('class'=>'form-control'));?> </div>
          </div>
          <div class="form-group"> <?php echo lang('login_remember_label', 'remember',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8">
              <div class="checkbox"> <label> <?php echo form_checkbox('remember', '1', FALSE,array('id'=>'remember'));?> </label> </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4"> <?php echo form_submit('submit', lang('login_submit_btn'), array('class'=>'btn btn-primary'));?> </div>
          </div>
          <?php echo form_close();?>
        </div>
        <div class="panel-footer text-right">
          <p><a href="<?=site_url('auth/forgot_password');?>"><?php echo lang('login_forgot_password');?></a></p>
          <p><a href="<?=site_url('auth/create_user');?>"><?php echo lang('create_user_heading');?></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
