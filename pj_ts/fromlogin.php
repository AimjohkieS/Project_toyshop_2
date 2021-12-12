<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<div class="container" >
  <head><nav class="navbar"style="color: white;">
          <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      Login </h3>
  </nav></head>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" style="background-color:#ffff">
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Email" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" style="color: white; background-color: rgb(56, 216, 165); margin-left:200px; width: 10rem;"class="btn btn" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
             <br>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>