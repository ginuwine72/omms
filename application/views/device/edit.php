<?php $attachments = unserialize($device['attachments']); ?>
<div class="col-md-12"> <?=anchor('#','ย้อนกลับ',array('class'=>'btn btn-link','onclick'=>'window.history.back(); return false;'));?> <hr> </div>
<?=form_open_multipart(uri_string(),array('class'=>'form-horizontal'));?>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading"> <h3 class="panel-title">แก้ไขข้อมูลอุปกรณ์</h3> </div>
    <div class="panel-body">
      <div class="form-group">
        <?=form_label('ชื่ออุปกรณ์','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_input(array('name'=>'name','class'=>'form-control'),set_value('name',$device['name']));?> </div>
      </div>
      <div class="form-group">
        <?=form_label('ชนิดอุปกรณ์','',array('class'=>'control-label col-md-3'));?>
        <?php $tp = array(''=>'เลือกรายการ'); ?>
        <div class="col-md-9"> <?=form_input(array('name'=>'type','class'=>'form-control'),set_value('type',$device['type']));?> </div>
      </div>
      <div class="form-group">
        <?=form_label('ประเภทอุปกรณ์','',array('class'=>'control-label col-md-3'));?>
        <?php $ct = array(''=>'เลือกรายการ'); ?>
        <div class="col-md-9"> <?=form_input(array('name'=>'category','class'=>'form-control'),set_value('category',$device['category']));?> </div>
      </div>
      <div class="form-group">
        <?=form_label('วันที่บันทึก','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_input(array('name'=>'','class'=>'form-control','disabled'=>TRUE,'value'=>date('d-m-Y',$device['date_create'])));?> </div>
      </div>
      <div class="form-group">
        <?=form_label('วันที่อัพเดท','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_input(array('name'=>'','class'=>'form-control','disabled'=>TRUE,'value'=>($device['date_update']) ? date('d-m-Y',$device['date_update']) : ''));?> </div>
      </div>
      <div class="form-group">
        <?=form_label('ข้อมูลอุปกรณ์','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_textarea(array('name'=>'description','class'=>'form-control textarea','value'=>$device['description']));?> </div>
      </div>
      <div class="form-group">
        <?=form_label('','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9">
          <?=form_submit('','บันทึก',array('class'=>'btn btn-primary'));?>
          <?=form_reset('','ล้าง',array('class'=>'btn btn-default'));?>
          <?=form_button('','แนบไฟล์รูปภาพ',array('class'=>'btn btn-link pull-right','data-toggle'=>'modal','data-target'=>'#attachments'));?>
        </div>
      </div>
    </div>
    <div class="panel-footer"> <?php $this->load->view('_partials/messages');?> </div>
  </div>
</div>

<div class="modal fade" id="attachments" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header"> <h4 class="modal-title" id=""></h4> </div>
      <div class="modal-body">
        <div class="row">
          <?php foreach ($assets as $value) : ?>
            <div class="col-sm-1 col-md-2 col-lg-3">
              <label class="thumbnail img-responsive img-thumbnail">
                <img src="../../../uploads/attachments/<?=$value['file_name'];?>" class="img-check" style="min-height:100px;height:100px;width:100%;">
                <?=form_checkbox('attachments[]',$value['id'],set_checkbox('attachments[]',$value['id'],(in_array($value['id'],$attachments))));?>
              </label>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div>
    </div>
  </div>
</div>
<?=form_close();?>

<script type="text/javascript">
  $(function(){ $('.textarea').wysihtml5(); });
</script>
