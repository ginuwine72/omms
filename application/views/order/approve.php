<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการแจ้งซ่อมที่ #<?=$order['id'];?></h3> </div>
  <div class="panel-body"> </div>
  <?=form_open(uri_string(),array('class'=>'form-horizontal'));?>
  <?=form_hidden('id',$order['id']);?>
  <div class="form-group">
    <label for="" class="control-label col-md-3">ชื่อผู้แจ้ง</label>
    <div class="col-md-9">
      <?=$order['fullname'];?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3">ไอพีแอดเดรส</label>
    <div class="col-md-9">
      <?=$order['ip_address'];?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3">วันที่บันทึก</label>
    <div class="col-md-9">
      <?=($order['date_create']) ? date('d-m-Y H:i',$order['date_create']) : 'N/A';?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3">หัวข้อเรื่อง</label>
    <div class="col-md-9">
      <?=$order['title'];?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3">เนื้อหา</label>
    <div class="col-md-9">
      <?=$order['detail'];?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3"></label>
    <div class="col-md-9">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3">ผู้รับเรื่อง</label>
    <div class="col-md-9">
      <?=form_input(array('name'=>'','class'=>'form-control','disabled'=>TRUE),set_value('',($order['admin_id']['username']) ? $order['admin_id']['username'] : 'N/A'));?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3">วันที่อัพเดท</label>
    <div class="col-md-9">
      <?=form_input(array('name'=>'','class'=>'form-control','disabled'=>TRUE),set_value('',($order['date_update']) ? date('d-m-Y H:i',$order['date_update']) : 'N/A'));?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3">สถานะ</label>
    <div class="col-md-9">
      <?=form_dropdown(array('name'=>'status','class'=>'form-control'),array('รอดำเนินการ'=>'รอดำเนินการ','ปฏิเสธ'=>'ปฏิเสธ','ตอบรับ'=>'ตอบรับ'),set_value('status',$order['status']));?>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="control-label col-md-3"></label>
    <div class="col-md-9">
      <?=form_submit('','บันทึกข้อมูล',array('class'=>'btn btn-primary'));?>
    </div>
  </div>
  <?=form_close();?>
  <div class="panel-footer"> </div>
</div>
