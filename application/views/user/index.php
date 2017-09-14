<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">รายการสมาชิกทั้งหมด <?=count($users);?> รายการ</h3>
  </div>
  <div class="panel-body"> </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>ชื่อผู้ใช้</th>
          <th>วันที่สมัคร</th>
          <th>เข้าใช้งานล่าสุด</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $key => $value) : ?>
          <tr>
            <td><?=++$key;?></td>
            <td><?=$value['username'];?></td>
            <td><?=($value['created_on']) ? date('d-m-Y H:i',$value['created_on']) : 'N/A';?></td>
            <td><?=($value['last_login']) ? date('d-m-Y H:i',$value['last_login']) : 'N/A';?></td>
            <td>
              <?=anchor('admin/user/#','แก้ไข',array('class'=>'label label-info'));?>
              <?=anchor('admin/user/#','ลบ',array('class'=>'label label-warning'));?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <div class="panel-footer"> </div>
</div>
