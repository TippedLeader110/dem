<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-primary bg-custom">
          <i class="fas fa-bars"></i>
          <!-- <span>Toggle Sidebar</span> -->
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <i class="fas fa-user"></i>
                Welcome Admin <?php echo $var = $this->session->userdata('username'); ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a id="editAdmin" class="dropdown-item" href="#"><i class="fas fa-user-edit"></i></i>Ganti Password</a>
                <a  class="dropdown-item" href="<?php echo base_url('admin/logout') ?>" ><i class="fas fa-sign-out-alt"></i>Log-out</a>
              </div>
              
            </li>
        </ul>
        </div>
    </div>
</nav>
