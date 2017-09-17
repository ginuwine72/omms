<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">เพิ่มข้อมูลกลุ่มผู้ใช้</h3> </div>
  <?=form_open(uri_string(),array('class'=>'form-horizontal'));?>
  <div class="panel-body">
    <div class="form-group">
      <label for="" class="control-label col-md-3">ชื่อกลุ่ม</label>
      <div class="col-md-9"> <?=form_input(array('name'=>'name','class'=>'form-control','placeholder'=>'ชื่อกลุ่ม'),set_value('name'));?> </div>
    </div>
    <div class="form-group">
      <label for="" class="control-label col-md-3">คำอธิบายกลุ่ม</label>
      <div class="col-md-9"> <?=form_input(array('name'=>'description','class'=>'form-control','placeholder'=>'คำอธิบายกลุ่ม'),set_value('description'));?> </div>
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
  <div class="panel-footer"> <?=$message;?> </div>
</div>
