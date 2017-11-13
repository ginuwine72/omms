<div class="row">
  <div class="col-md-10">
    <?=form_open('admin/asset/upload/',array('class'=>'dropzone','id'=>'my-upload','style'=>'background:#f5f5f5;'));?>
  </div>
  <div class="col-md-2">
    <?=anchor('#','ย้อนกลับ',array('class'=>'btn btn-link btn-block','onclick'=>'window.history.back(); return false;'));?>
    <?=form_submit('#','อัพโหลด',array('class'=>'btn btn-info btn-block','id'=>'my-submit')).form_close();?>
  </div>
</div>
<hr>
<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการไฟล์เอกสารทั้งหมด <?=count($assets);?> รายการ</h3> </div>
  <div class="panel-body"> </div>
  <div class="row">
    <div class="col-md-12">
      <?php foreach ($assets as $value) : ?>
        <div class="col-sm-1 col-md-2 col-lg-3">
          <div class="thumbnail">
            <img src="../uploads/attachments/<?=$value['file_name'];?>" class="" style="min-height:150px;height:150px;width:100%;">
            <div class="caption">
              <a href="../uploads/attachments/<?=$value['file_name'];?>" target="_blank" class="label label-info">ดู</a>
              <a href="<?=site_url('admin/asset/delete/'.$value['id']);?>" class="label label-warning" onclick="return confirm('ยืนยันการลบไฟล์นี้?');">ลบ</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="panel-footer"> <?=$this->pagination->create_links();?> </div>
</div>

<?=result_in_array(array(link_tag('assets/css/dropzone.min.css'),link_tag('assets/css/basic.min.css')));?>
<?=result_in_array(array(script_tag('assets/js/dropzone.min.js')));?>
<script type="text/javascript">
Dropzone.options.myUpload = {
  parallelUploads: '10',
  maxFilesize: '1',
  maxFiles: '10',
  acceptedFiles: 'image/*',
  autoProcessQueue: false,
  addRemoveLinks: true,
  dictDefaultMessage: 'คลิกหรือลากไฟล์ที่นี่ จากนั้นกดปุ่มอัพโหลด',
  init: function(){
    var submitButton = document.querySelector("#my-submit");
    myDropzone = this;
    submitButton.addEventListener("click",function(){ myDropzone.processQueue(); });
  }
};
</script>
