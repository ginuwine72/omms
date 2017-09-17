<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการอุปกรณ์ที่ #<?=$device['id'];?></h3> </div>
  <div class="panel-body">
    <h4>ชื่ออุปกรณ์ : <?=$device['name'];?></h4>
    <p class="text-muted">
      วันที่บันทึก : <?=date('d-m-Y',$device['date_create']).nbs(3);?>
      วันที่อัพเดท : <?=date('d-m-Y',$device['date_update']);?>
    </p>
    <hr>
    <p><?=$device['description'];?></p>
  </div>
  <div class="panel-footer">
    <div class="row">
      <?php foreach ($asset as $value) : ?>
        <div class="col-sm-2 col-md-3 col-lg-4">
          <a href="../../uploads/attachments/<?=$value['file_name'];?>" target="_blank" class="thumbnail img-responsive img-thumbnail">
            <img src="../../uploads/attachments/<?=$value['file_name'];?>" class="img-check" style="min-height:100px;height:200px;width:200%;">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
