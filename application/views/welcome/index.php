<?php $tab = $this->input->get('tab'); ?>
<div class="row">
  <div class="col-lg-4">
    <div class="list-group">
      <a href="<?=base_url('welcome');?>" class="list-group-item <?=(! $tab)?'active':''?>">ข้อมูลทั่วไป</a>
      <a href="<?=base_url('welcome?tab=rule');?>" class="list-group-item <?=($tab=='rule')?'active':''?>">รายละเอียดการทำงาน</a>
      <a href="<?=base_url('welcome?tab=order');?>" class="list-group-item <?=($tab=='order')?'active':''?>">อธิบายรายการแจ้งซ่อม</a>
      <a href="<?=base_url('welcome?tab=device');?>" class="list-group-item <?=($tab=='device')?'active':''?>">อธิบายรายการอุปกรณ์</a>
      <a href="<?=base_url('welcome?tab=reply');?>" class="list-group-item <?=($tab=='reply')?'active':''?>">อธิบายสถานะการตอบรับ</a>
    </div>
  </div>
  <div class="col-lg-8">
    <?php switch ($tab) :
      case '': ?>
        <h4>ข้อมูลทั่วไป</h4>
        <p>OMMS : Order Maintainance Management System หรือระบบแจ้งซ่อมออนไลน์ที่สามารถให้ช่างเทคนิคซ่อมบำรุงและแอดมินผู้รับเรื่องตรวจสอบรายการซ่อมได้สามารถใช้ข้อมูลร่วมกันได้อย่างดี</p>
      <?php break;
      case 'rule': ?>
        <h4>รายละเอียดการทำงาน</h4>
        <p>ระบบสามารถอำนวยความสะดวกตามขั้นตอนต่อไปนี้</p>
        <ul>
          <li>อำนวยความสะดวกให้ผู้แจ้งเรื่องสามารถส่งข้อมูลเข้ามาที่แอดมินผู้รับเรื่องได้ทันที</li>
          <li>อำนวยความสะดวกให้แอดมินผู้รับเรื่องสามารถวิเคราะห์และประเมินอาการจากข้อมูลของช่างเทคนิคได้ทันที</li>
          <li>อำนวยความสะดวกให้ช่างเทคนิคซ่อมบำรุงสามารถประเมินสถานะอาการให้แก่แอดมินผู้รับเรื่องได้ทันที</li>
          <li>อำนวยความสะดวกในการเก็บบันทึกข้อมูลการแจ้งซ่อมต่างๆ ได้</li>
        </ul>
      <?php break;
      case 'order': ?>
        <h4>อธิบายรายการแจ้งซ่อม</h4>
        <p>ระบบสามารถรับรายการแจ้งซ่อมจากบุคคลทั่วไป พร้อมระบุสถานะการซ่อมให้ทราบ โดยมีรายละเอียดดังนี้</p>
        <ul>
          <li>ไปที่เมนู รายการแจ้งซ่อม</li>
          <li>ไปที่ลิงก์ แจ้งรายการใหม่</li>
          <li>ระบุ หัวข้อเรื่องให้กระชับและได้ใจความมากที่สุด</li>
          <li>ระบุ ชื่อผู้แจ้งเพื่อให้แอดมินรับทราบ</li>
          <li>ระบุ รายละเอียดและข้อมูลประกอบการแจ้งซ่อมให้ครบถ้วนเพื่อความรวดเร็วในการตรวจสอบและประเมินการซ่อมนั้นๆ</li>
        </ul>
      <?php break;
      case 'device': ?>
        <h4>อธิบายรายการอุปกรณ์</h4>
        <p>ระบบเปิดให้ดูข้อมูลรายละอียดของอุปกรณ์ เพื่อประกอบการระบุอาการเสียที่ถูกต้อง โดยมีรายละเอียดดังนี้</p>
        <ul>
          <li>ไปที่เมนู รายการอุปกรณ์</li>
          <li>พบหน้าตารางแสดงข้อมูลรายการอุปกรณ์ทั้งหมด</li>
          <li>ไปที่ลิงก์ ดู เพื่อเข้าดูข้อมูลรายการอุปกรณ์</li>
          <li>พบหน้าแสดงข้อมูลทั้งหมด อาทิ ชื่ออุปกรณ์ วันที่บันทึก วันที่อัพเดท รายละเอียดข้อมูลและรูปภาพประกอบ</li>
        </ul>
      <?php break;
      case 'reply': ?>
        <h4>อธิบายสถานะการตอบรับ</h4>
        <p>ระบบสามารถตอบกลับผลการประเมินจากช่างเทคนิคซ่อมบำรุงและจากแอดมินผู้รับเรื่องได้โดยการแสดงผลออกมาเป็นสถานะต่างๆ ดังนี้</p>
        <ul>
          <li>สถานะ ง่ายมาก หมายถึงไม่มีปัญหาในการทำงานและใช้เวลาเพียงไม่นาน</li>
          <li>สถานะ ปานกลาง หมายถึงจำเป็นต้องใช้เวลาในการทำงานพอสมควร</li>
          <li>สถานะ ยากมาก หมายถึงต้องใช้เวลาในการทำงานค่อนข้างนาน</li>
          <li>สถานะ ไม่สามารถซ่อมได้</li>
        </ul>
      <?php break;
    endswitch; ?>
  </div>
</div>
