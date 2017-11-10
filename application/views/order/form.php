<div class="col-md-12"> <?=anchor('#','ย้อนกลับ',array('class'=>'btn btn-link','onclick'=>'window.history.back(); return false;'));?> <hr> </div>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-body">
      <?=form_open_multipart('',array('class'=>'form-horizontal'));?>
      <div class="form-group"> <?=form_label('หัวข้อเรื่อง','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_input(array('name'=>'title','class'=>'form-control'),set_value('title'));?> </div>
      </div>
      <div class="form-group"> <?=form_label('วันที่บันทึก','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_input(array('name'=>'date_create','class'=>'form-control','disabled'=>TRUE,'value'=>date('d-m-Y',time())));?> </div>
      </div>
      <div class="form-group"> <?=form_label('หมายเลขไอพี','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_input(array('name'=>'ip_address','class'=>'form-control','readonly'=>TRUE,'value'=>$this->input->ip_address()));?> </div>
      </div>
      <div class="form-group"> <?=form_label('ชื่อผู้แจ้ง','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_input(array('name'=>'fullname','class'=>'form-control'),set_value('fullname'));?> </div>
      </div>
      <div class="form-group"> <?=form_label('','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9"> <?=form_textarea(array('name'=>'detail','class'=>'form-control textarea','value'=>''),set_value('detail'));?> </div>
      </div>
      <div class="form-group"> <?=form_label('','',array('class'=>'control-label col-md-3'));?>
        <div class="col-md-9">
          <?=form_submit('','บันทึก',array('class'=>'btn btn-primary'));?>
          <?=form_reset('','ล้าง',array('class'=>'btn btn-default'));?>
        </div>
      </div>
      <?=form_close();?>
    </div>
    <div class="panel-footer"> <?php $this->load->view('_partials/messages');?> </div>
  </div>
</div>
<div class="col-md-12">
  <p class="help-block">*กรอกข้อมูลให้ครบทุกช่อง</p>
  <p class="help-block">*หัวข้อเรื่องมีความยาวไปเกิน 100 ตัวอักษร</p>
</div>

<script type="text/javascript">
$(function(){
  $('.textarea').wysihtml5();
});
</script>
