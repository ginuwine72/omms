<div class="col-md-12"> <?=anchor('order/form','แจ้งรายการใหม่',array('class'=>'btn btn-link'));?> <hr> </div>
<div class="col-md-12">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>รายการที่</th>
        <th>หัวข้อเรื่อง</th>
        <th>วันที่แจ้ง</th>
        <th>วันที่อัพเดท</th>
        <th>การประเมิน</th>
        <th>สถานะ</th>
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
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
