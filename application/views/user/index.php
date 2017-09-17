<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการสมาชิกทั้งหมด <?=count($users);?> รายการ</h3> </div>
  <div class="panel-body"><?=anchor('admin/user/create_user','เพิ่มผู้ใช้',array('class'=>'btn btn-primary'));?></div>
  <table class="table table-striped table-hover">
    <thead> <tr> <th>#</th> <th>ชื่อผู้ใช้</th> <th>วันที่สมัคร</th> <th>เข้าใช้งานล่าสุด</th> <th>กลุ่มผู้ใช้</th> <th></th> </tr> </thead>
    <tbody>
      <?php foreach ($users as $key => $value) : ?>
        <tr>
          <td><?=++$key;?></td>
          <td><?=$value['username'];?></td>
          <td><?=($value['created_on']) ? date('d-m-Y H:i',$value['created_on']) : 'N/A';?></td>
          <td><?=($value['last_login']) ? date('d-m-Y H:i',$value['last_login']) : 'N/A';?></td>
          <td> <?php foreach ($value['groups'] as $groups) echo $groups['name'].'|'; ?> </td>
          <td>
            <?=anchor('admin/user/edit_user/'.$value['id'],'แก้ไข',array('class'=>'label label-info'));?>
            <?php if ($value['active'] === '1') : ?>
              <?=anchor('admin/user/deactivate/'.$value['id'],'ปิดใช้งาน',array('class'=>'label label-warning'));?>
            <?php else: ?>
              <?=anchor('admin/user/activate/'.$value['id'],'เปิดใช้งาน',array('class'=>'label label-default'));?>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="panel-footer"> </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"> <h3 class="panel-title">รายการกลุ่มทั้งหมด <?=count($group);?> รายการ</h3> </div>
  <div class="panel-body"> <?=anchor('admin/user/create_group','เพิ่มกลุ่ม',array('class'=>'btn btn-primary'));?></div>
  <table class="table table-striped table-hover">
    <thead> <tr> <th>#</th> <th>ชื่อกลุ่ม</th> <th>คำอธิบาย</th> <th></th> </tr> </thead>
    <tbody>
      <?php foreach ($group as $key => $value) : ?>
        <tr>
          <td><?=++$key;?></td>
          <td><?=$value['name'];?></td>
          <td><?=$value['description'];?></td>
          <td><?=anchor('admin/user/edit_group/'.$value['id'],'แก้ไข',array('class'=>'label label-info'));?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="panel-footer"> </div>
</div>
