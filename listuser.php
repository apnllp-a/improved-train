<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listuser.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap");
    </style>
    <title>รายชื่อพนักงาน</title>
</head>

<body>
    
       <div class="staff"> <?php include("nav_it.html"); ?></div>
    

  <center>
  <h4>รายชื่อพนักงาน</h4>
   <div class="table"> 
   <table>  
  <thead>
    <tr>
      <th scope="col">No .</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">Username</th>
      <th scope="col">E-mail</th>
      <th scope="col">แผนก</th>
      <th scope="col">สิทธิ์ </th>
      <th scope="col">Web</th>
      <th scope="col">App</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td scope="row">วิกรานต์</td>
      <td scope="row">แสงจันทร์</td>
      <td scope="row">Wikran</td>
      <td scope="row">wikran@gg.com</td>
      <td scope="row">คอมพิวเตอร์</td>
      <td scope="row">IT</td>
      <td scope="row"><ion-icon name="checkmark" class="ic1"></ion-icon></td>
      <td scope="row"><ion-icon name="close" class="ic2"></ion-icon> </td>
    </tr>
    <tr>
      <td scope="row">1</td>
      <td scope="row">วิกรานต์</td>
      <td scope="row">แสงจันทร์</td>
      <td scope="row">Wikran</td>
      <td scope="row">wikran@gg.com</td>
      <td scope="row">คอมพิวเตอร์</td>
      <td scope="row">IT</td>
      <td scope="row"><ion-icon name="checkmark" class="ic1"></ion-icon></td>
      <td scope="row"><ion-icon name="close" class="ic2"></ion-icon> </td>
    </tr>
    <tr>
      <td scope="row">1</td>
      <td scope="row">วิกรานต์</td>
      <td scope="row">แสงจันทร์</td>
      <td scope="row">Wikran</td>
      <td scope="row">wikran@gg.com</td>
      <td scope="row">คอมพิวเตอร์</td>
      <td scope="row">IT</td>
      <td scope="row"><ion-icon name="checkmark" class="ic1"></ion-icon></td>
      <td scope="row"><ion-icon name="close" class="ic2"></ion-icon> </td>
    </tr>
  </tbody>
</table>
   </div>
  </center>


  <form class=posref >
<input type=button value="Refresh" onClick="javascript:location.reload();" class="refresh">
</form>

<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#" class="active">1</a>
  <a href="#" >2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>