<?php
//1. เชื่อมต่อ database:
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$member_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('h.php');?>
<form  name="member" action="edit_from_member_db.php" method="POST" class="form-horizontal">
   <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
       <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_user" type="text" required class="form-control" id="member_user" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" value="<?php echo $member_id; ?>" />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_pass" type="password" required class="form-control" id="member_pass" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" value="<?php echo $member_id; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_name" type="text" required class="form-control" id="member_name" placeholder="ชื่อ-สกุล "value="<?php echo $member_name; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_email" type="email" class="form-control" id="member_email"   placeholder=" อีเมล์ name@hotmail.com"value="<?php echo $member_email; ?>"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_tel" type="text" class="form-control" id="member_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น"value="<?php echo $member_tel; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
           <textarea input name="member_address" class="form-control" id="member_address"value="<?php echo $member_address; ?>" required> <?php echo $member_address; ?></textarea>
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข  </button>
          </div>     
      </div>
      </form>