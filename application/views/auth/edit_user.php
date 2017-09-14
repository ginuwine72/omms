<div class="container">
  <div class="row" style="padding-top:10em;">
    <div class="col-sm-6 col-sm-offset-3">
      <div class="panel panel-success">
        <div class="panel-heading"> <h3 class="panel-title"> <?php echo lang('edit_user_heading');?> <small><?php echo lang('edit_user_subheading');?></small> </h3> </div>
        <div class="panel-body">
          <div id="infoMessage"><?php echo $message;?></div>
          <?php echo form_open("auth/create_user",array('class'=>'form-horizontal','autocomplete'=>'off'));?>
          <?php echo form_hidden('id', $user->id);?>
          <?php echo form_hidden($csrf); ?>
          <?php if ($identity_column!=='email') : ?>
            <div class="form-group">
              <?php echo lang('create_user_identity_label', 'identity',array('class'=>'control-label col-md-4')); ?>
              <?php echo form_error('identity'); ?>
              <div class="col-md-8"> <?php echo form_input(array('name'=>'identity','class'=>'form-control','disabled'=>TRUE),set_value('identity',$user['identity'])); ?> </div>
            </div>
          <?php endif; ?>
          <div class="form-group">
            <?php echo lang('create_user_email_label', 'email',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?php echo form_input(array('name'=>'email','class'=>'form-control','disabled'=>TRUE),set_value('email',$user['email']));?> </div>
          </div>
          <div class="form-group">
            <?php echo form_label('','',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?php echo form_input(array('name'=>'','class'=>'form-control'),set_value(''));?> </div>
          </div>
          <div class="form-group">
            <?php echo form_label('','',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?php echo form_input(array('name'=>'','class'=>'form-control'),set_value(''));?> </div>
          </div>
          <div class="form-group">
            <?php echo form_label('','',array('class'=>'control-label col-md-4'));?>
            <div class="col-md-8"> <?php echo form_input(array('name'=>'','class'=>'form-control'),set_value(''));?> </div>
          </div>
          <?php if ($this->ion_auth->is_admin()): ?>
            <h3><?php echo lang('edit_user_groups_heading');?></h3>
            <?php foreach ($groups as $group):?>
              <label class="checkbox">
                <?php
                $gID=$group['id'];
                $checked = null;
                $item = null;
                foreach ($currentGroups as $grp) {
                  if ($gID == $grp->id) {
                    $checked= ' checked="checked"';
                    break;
                  }
                }
                ?>
                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
            <?php endforeach?>
          <?php endif ?>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4"> <?php echo form_submit('submit',lang('edit_user_submit_btn'),array('class'=>'btn btn-primary'));?> </div>
          </div>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
  </div>
</div>
