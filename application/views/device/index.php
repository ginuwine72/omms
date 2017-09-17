<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการอุปกรณ์ทั้งหมด <?=count($devices);?> รายการ</h3> </div>
  <div class="panel-body"> <?=anchor('admin/device/add','เพิ่มอุปกรณ์',array('class'=>'btn btn-primary'));?></div>
  <table class="table table-striped table-hover">
    <thead> <tr> <th>#</th> <th>ชื่ออุปกรณ์</th> <th>ชนิดอุปกรณ์</th> <th>ประเภทอุปกรณ์</th> <th>วันที่บันทึก</th> <th></th> </tr> </thead>
    <tbody>
      <?php foreach ($devices as $key => $value) : ?>
        <tr>
          <td><?=++$key;?></td>
          <td><?=$value['name'];?></td>
          <td><?=$value['type'];?></td>
          <td><?=$value['category'];?></td>
          <td><?=date('d-m-Y',$value['date_create']);?></td>
          <td><?=anchor('admin/device/edit/'.$value['id'],'แก้ไข',array('class'=>'label label-info'));?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="panel-footer"> </div>
</div>
