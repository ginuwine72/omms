<div class="container">
  <div class="row" style="padding-top:10em;">
    <div class="col-sm-6 col-sm-offset-3">
      <div class="panel panel-success">
        <div class="panel-heading"> <h3 class="panel-title"> <?=lang('create_user_heading');?> <small><?=lang('create_user_subheading');?></small> </h3> </div>
        <div class="panel-body">
          <?=form_open("auth/create_user",array('class'=>'form-horizontal','autocomplete'=>'off'));?>
          <?php if ($identity_column!=='email') : ?>
            <div class="form-group">
              <?=lang('create_user_identity_label','identity',array('class'=>'control-label col-md-4')); ?>
              <?=form_error('identity'); ?>
            </div>
            <div class="col-md-8"> <?=form_input(array('name'=>'identity','class'=>'form-control'),set_value('identity')); ?> </div>
          <?php endif; ?>
          <div class="form-group">
            <?php echo lang('create_user_email_label', 'email',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?=form_input(array('name'=>'email','class'=>'form-control'),set_value('email'));?> </div>
          </div>
          <div class="form-group">
            <?php echo lang('create_user_password_label','password',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?=form_password('password','',array('class'=>'form-control'));?> </div>
          </div>
          <div class="form-group">
            <?php echo lang('create_user_password_confirm_label','password_confirm',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?=form_password('password_confirm','',array('class'=>'form-control'));?> </div>
          </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4"> <?=form_submit('submit', lang('create_user_submit_btn'),array('class'=>'btn btn-primary'));?> </div>
          </div>
          <?=form_close();?>
        </div>
        <div class="panel-footer text-right">
          <p><a href="<?=site_url('auth/login');?>"><?=lang('login_heading');?></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
