<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/personalInfor.css" /> 
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap");
    </style>
    <title>ข้อมูลส่วนตัว</title>
  </head>
  <body>
  <?php include("nav_it.html"); ?>
    <h1><strong>ข้อมูลส่วนตัว</strong></h1>
      <div class="center">
      
      <form>
        <label for="fname">ชื่อ</label><br>
        <input type="text" id="fname" name="fname" />
        <label for="fname"><br> นามสกุล</label><br>
        <input type="text" id="lname" name="lname" />
        <label for="fname"><br>วันเดือนปีเกิด</label><br>
        <input type="date" id="date" name="date" />
        <label for="fname"><br>
            วุฒิการศึกษา</label><br>
        <input type="text" id="qf" name="Qualification" /><br>
        <label for="fname">ที่อยู่</label><br>
        <input type="textarea" id="address" name="address" />
        <div class="sec2"> 
            <label for="fname"> เบอร์ติดต่อ<br></label>
        <input type="text" id="phone" name="phone" />
        <label for="fname"><br> E-mail</label><br>
        <input type="text" id="mail" name="mail" /><br>
        <label for="fname">วันที่เข้าทำงาน</label><br>
        <input type="date" id="datework" name="datework" /><br>
        <label for="fname">ประวัติการทำงาน</label><br>
        <input type="text" id="้history" name="history" /><br>
        <div class="btnsubmit">
        <input type="submit" value="บันทึก" />
        <input class="re" type="submit" value="กลับสู่หน้าหลัก"  />
    </div>
        </div>
      </div>
      </form>
  </body>
</html>
