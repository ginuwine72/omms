<div class="col-md-12">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>ชื่ออุปกรณ์</th>
        <th>ชนิดอุปกรณ์</th>
        <th>ประเภทอุปกรณ์</th>
        <th>วันที่บันทึก</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($devices as $value) : ?>
        <tr>
          <td><?=anchor('device/view/'.$value['id'],'ดู',array('class'=>'label label-primary'));?></td>
          <td><?=$value['name'];?></td>
          <td><?=$value['type'];?></td>
          <td><?=$value['category'];?></td>
          <td><?=($value['date_create']) ? date('d-m-Y H:i',$value['date_create']) : 'N/A';?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
