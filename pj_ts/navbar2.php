<?php include('h.php');?>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-success p-4">
      <h4 class="text-white">ร้านค้าออนไลน์</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar">
  <!--<nav class="navbar navbar-dark bg-success">-->
    <div class="col-md-4">
    <form class="d-flex" action="index.php" method="GET">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="col-md-3">
        <table>
        <th><input type="button" name="Submit2" value ="สมัครสมาชิก" style="text-align: center;height:50px;width:85px;margin-right: 50px;" class="btn btn-default" onclick="
                                    window.location='register.html';"></th>                         
        <th><input type="button" name="Submit2" value ="เข้าสู่ระบบ" style="text-align: center;height:50px;width:70px;margin-right: 120px;" class="btn btn-default" onclick="
                                    window.location='fromlogin.php';"></th>
        <th><a href="mycart.php" class="btn btn-outline-alert">My Cart(0)</a></th>
        </table>
      </div>
  </nav>
</div>