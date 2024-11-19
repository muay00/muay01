<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>
​
<body>
​<div class="envelope">
​<div class="sender">
<h2></h2>
​
<table style="width:100%">
  <tr >
    <th colspan="2" style="width:50%">ชื่อและที่อยู่ผู้ส่ง</th>
   
  </tr>
  <tr>
    <td >ชื่อ</td>
    <td> <?php echo $_GET["firstname"]; ?> </td>
  
  </tr>
  <tr>
    <td >ชื่อ</td>
    <td> <?php echo $_GET["lastname"]; ?></td>
  
  </tr>
  <tr>
    <td>ที่อยู่/บ้านเลขที่</td>
    <td> <?php echo $_GET["username"]; ?></td>
  </tr>

  <tr>
  <td>แขวง/ตำบล</td>
    <td><?php echo $_GET["district"]; ?></td>
  </tr>

  <tr>
  <td>อำเภอ/เมือง</td>
    <td><?php echo $_GET["city"]; ?></td>
  </tr>

  <tr>
  <td>จังหวัด</td>
    <td><?php echo $_GET["province"]; ?></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์</td>
    <td><?php echo $_GET["number"]; ?></td>
  </tr>

  <tr>
  <td>รหัสไปร์ษณี</td>
  <td><?php echo $_GET["postalcode"]; ?></td>
  </tr>
  <tr>
  <td>วัน</td>
  <td><?php echo $_GET["date"]; ?></td>
  </tr>





  
  <tr >
  <td colspan="2" rowspan="10"> </td>
    <th colspan="2" style="width:50%" >ชื่อและที่อยู่ผู้รับ</th>
  </tr>
  <tr>

    <td >ชื่อ</td>
    <td> <?php echo $_GET["firstname1"]; ?> </td>
  
  </tr>
  <tr>

<td >ชื่อ</td>
<td> <?php echo $_GET["lastname1"]; ?></td>

</tr>
  <tr>

    <td>ที่อยู่/บ้านเลขที่</td>
    <td> <?php echo $_GET["username1"]; ?></td>
  </tr>

  <tr>

  <td>แขวง/ตำบล</td>
    <td><?php echo $_GET["district1"]; ?></td>
  </tr>

  <tr>

  <td>อำเภอ/เมือง</td>
    <td><?php echo $_GET["city1"]; ?></td>
  </tr>

  <tr>

  <td>จังหวัด</td>
    <td><?php echo $_GET["province1"]; ?></td>
  </tr>
  <tr>

    <td>เบอร์โทรศัพท์</td>
    <td><?php echo $_GET["number1"]; ?></td>
  </tr>

  <tr>

  <td>รหัสไปร์ษณี</td>
  <td><?php echo $_GET["postalcode1"]; ?></td>
  </tr>
  <tr>

  <td>วัน</td>
  <td><?php echo $_GET["date1"]; ?></td>
  </tr>
</table>
​</div>
​</div>
</body>
</html>
​
​
