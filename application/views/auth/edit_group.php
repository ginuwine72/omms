<?php $readonly = ($group['name'] === 'admin') ? 'readonly' : ''; ?>
<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">แก้ไขข้อมูลกลุ่ม</h3> </div>
  <?=form_open(uri_string(),array('class'=>'form-horizontal'));?>
  <?=form_hidden('id',$group['id']);?>
  <div class="panel-body">
    <div class="form-group">
      <label for="" class="control-label col-md-3">ชื่อกลุ่ม</label>
      <div class="col-md-9"> <?=form_input(array('name'=>'name','class'=>'form-control','placeholder'=>'ชื่อกลุ่ม',$readonly=>TRUE),set_value('name',$group['name']));?> </div>
    </div>
    <div class="form-group">
      <label for="" class="control-label col-md-3">คำอธิบายกลุ่ม</label>
      <div class="col-md-9"> <?=form_input(array('name'=>'description','class'=>'form-control','placeholder'=>'คำอธิบายกลุ่ม'),set_value('description',$group['description']));?> </div>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3"></label>
    <div class="col-md-9">
      <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
      <button type="button" class="btn btn-default" onclick="javascript:history.back()">ย้อนกลับ</button>
    </div>
  </div>
  <?=form_close();?>
  <div class="panel-footer"> <?php $this->load->view('_partials/messages'); ?> </div>
</div>
