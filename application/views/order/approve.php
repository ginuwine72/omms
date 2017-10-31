<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการแจ้งซ่อมที่ #<?=$order['id'];?></h3> </div>
  <div class="panel-body">
    <?=form_open(uri_string(),array('class'=>'form-horizontal'));?>
    <?=form_hidden('id',$order['id']);?>
    <div class="form-group"> <label for="" class="control-label col-md-3">ชื่อผู้แจ้ง</label>
      <div class="col-md-9"> <?=$order['fullname'];?> </div>
    </div>
    <div class="form-group"> <label for="" class="control-label col-md-3">ไอพีแอดเดรส</label>
      <div class="col-md-9"> <?=$order['ip_address'];?> </div>
    </div>
    <div class="form-group"> <label for="" class="control-label col-md-3">วันที่บันทึก</label>
      <div class="col-md-9"> <?=($order['date_create']) ? date('d-m-Y H:i',$order['date_create']) : 'N/A';?> </div>
    </div>
    <div class="form-group"> <label for="" class="control-label col-md-3">หัวข้อเรื่อง</label>
      <div class="col-md-9"> <?=$order['title'];?> </div>
    </div>
    <div class="form-group"> <label for="" class="control-label col-md-3">เนื้อหา</label>
      <div class="col-md-9"> <?=$order['detail'];?> </div>
    </div>
    <div class="form-group"> <label for="" class="control-label col-md-3"></label>
      <div class="col-md-9"> </div>
    </div>
    <?php if ($this->ion_auth->in_group('technician')) : ?>
      <hr>
      <div class="form-group"> <label for="" class="control-label col-md-3">ช่างผู้ตรวจสอบ</label>
        <div class="col-md-9"> <?=form_input(array('name'=>'','class'=>'form-control','disabled'=>TRUE),set_value('',($order['technician_id']['username']) ? $order['technician_id']['username'] : 'N/A'));?> </div>
      </div>
      <div class="form-group"> <label for="" class="control-label col-md-3">วันที่อัพเดท</label>
        <div class="col-md-9"> <?=form_input(array('name'=>'technician_update','class'=>'form-control','disabled'=>TRUE),set_value('',($order['technician_update']) ? date('d-m-Y H:i',$order['technician_update']) : 'N/A'));?> </div>
      </div>
      <div class="form-group"> <label for="" class="control-label col-md-3">สถานะตอบกลับ</label>
        <div class="col-md-9"> <?=form_dropdown(array('name'=>'technician_status','class'=>'form-control'),array(''=>'เลือกรายการ','ง่ายมาก'=>'ง่ายมาก','ปานกลาง'=>'ปานกลาง','ยากมาก'=>'ยากมาก','ไม่สามารถซ่อมได้'=>'ไม่สามารถซ่อมได้'),set_value('technician_status',$order['technician_status']));?> </div>
      </div>
      <div class="form-group"> <label for="" class="control-label col-md-3">หมายเหตการตอบกลับุ</label>
        <div class="col-md-9"> <?=form_textarea(array('name'=>'technician_remark','class'=>'form-control','value'=>$order['technician_remark']));?> </div>
      </div>
    <?php endif;?>
    <?php if ($this->ion_auth->in_group('admin')) : ?>
      <hr>
      <div class="form-group"> <label for="" class="control-label col-md-3">แอดมินผู้รับเรื่อง</label>
        <div class="col-md-9"> <?=form_input(array('name'=>'','class'=>'form-control','disabled'=>TRUE),set_value('',($order['admin_id']['username']) ? $order['admin_id']['username'] : 'N/A'));?> </div>
      </div>
      <div class="form-group"> <label for="" class="control-label col-md-3">วันที่อัพเดท</label>
        <div class="col-md-9"> <?=form_input(array('name'=>'','class'=>'form-control','disabled'=>TRUE),set_value('',($order['admin_update']) ? date('d-m-Y H:i',$order['admin_update']) : 'N/A'));?> </div>
      </div>
      <div class="form-group"> <label for="" class="control-label col-md-3">สถานะตอบกลับ</label>
        <div class="col-md-9"> <?=form_dropdown(array('name'=>'technician_status','class'=>'form-control'),array(''=>'เลือกรายการ','ง่ายมาก'=>'ง่ายมาก','ปานกลาง'=>'ปานกลาง','ยากมาก'=>'ยากมาก','ไม่สามารถซ่อมได้'=>'ไม่สามารถซ่อมได้'),set_value('technician_status',$order['technician_status']));?> </div>
      </div>
      <div class="form-group"> <label for="" class="control-label col-md-3">หมายเหตุการตอบกลับ</label>
        <div class="col-md-9"> <?=form_textarea(array('name'=>'admin_remark','class'=>'form-control','value'=>$order['admin_remark']));?> </div>
      </div>
    <?php endif;?>
    <div class="form-group"> <label for="" class="control-label col-md-3"></label>
      <div class="col-md-9"> <?=form_submit('','บันทึกข้อมูล',array('class'=>'btn btn-primary'));?> </div>
    </div>
    <?=form_close();?>
  </div>
</div>
