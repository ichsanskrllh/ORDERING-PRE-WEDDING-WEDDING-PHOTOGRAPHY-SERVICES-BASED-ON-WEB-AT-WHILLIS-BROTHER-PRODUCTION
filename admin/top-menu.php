<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <!-- User image -->

    <img src="../images/user/ichsan.jpg" class="user-image" alt="User Image"/>

    <span class="hidden-xs"><?php echo $_SESSION['nama_lengkap']; ?> <i style="margin-left:5px" class="fa fa-angle-down"></i></span>
  </a>
  <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">

      <img src="../images/user/ichsan.jpg" class="img-circle" alt="User Image"/>

      <p>
        <?php echo $_SESSION['nama_lengkap']; ?>
      </p>
    </li>
    
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="?module=password" class="btn btn-default btn-flat">Password</a>
      </div>

      <div class="pull-right">
        <a style="width:80px" data-toggle="modal" href="#logout" class="btn btn-default btn-flat">Logout</a>
      </div>
    </li>
  </ul>
</li>