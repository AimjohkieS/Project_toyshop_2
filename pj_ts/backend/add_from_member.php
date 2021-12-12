<?php include('h.php');?>
<form  name="member" action="add_from_member_db.php" method="POST" class="form-horizontal">
       <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_user" type="text" required class="form-control" id="member_user" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_pass" type="password" required class="form-control" id="member_pass" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_name" type="text" required class="form-control" id="member_name" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_email" type="email" class="form-control" id="member_email"   placeholder=" อีเมล์ name@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="member_tel" type="text" class="form-control" id="member_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <textarea name="member_address" class="form-control" id="member_address" required></textarea> 
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>     
      </div>
      </form>