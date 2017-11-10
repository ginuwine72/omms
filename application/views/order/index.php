<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการแจ้งซ่อมทั้งหมด <?=count($orders);?> รายการ</h3> </div>
  <div class="panel-body"> </div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>รายการที่</th>
        <th>หัวข้อเรื่อง</th>
        <th>วันที่แจ้ง</th>
        <th>วันที่อัพเดท</th>
        <th>การประเมิน</th>
        <th>สถานะ</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($orders as $key => $value) : ?>
        <tr>
          <td><?=++$key;?></td>
          <td><?=$value['title'];?></td>
          <td><?=($value['date_create']) ? date('d-m-Y H:i',$value['date_create']) : 'N/A';?></td>
          <td><?=($value['date_update']) ? date('d-m-Y H:i',$value['date_update']) : 'N/A';?></td>
          <td><?=$value['admin_status'];?></td>
          <td><?=$value['status'];?></td>
          <td>
            <?php if ($this->ion_auth->in_group('admin')) : ?>
              <?=anchor('admin/order/reply/'.$value['id'],'ดู',array('class'=>'label label-info'));?>
              <?=anchor('admin/order/delete/'.$value['id'],'ลบ',array('class'=>'label label-warning','onclick'=>"return confirm('ยืนยันการลบข้อมูล');"));?>
            <?php elseif ($this->ion_auth->in_group('technician')) : ?>
              <?=anchor('technician/order/approve/'.$value['id'],'ดู',array('class'=>'label label-info'));?>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="panel-footer"> </div>
</div>
