<nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm" style="height: 70px;background-color: white;">
  <a class="navbar-brand" href="#">DEMOLOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-lg-2 search" type="search" placeholder="Search" aria-label="Search" style="
    width: 406px;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" id="home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <?php if ($this->session->login==TRUE): ?>
        <li class="nav-item">
          <a class="nav-link" href="#" id="profile">Profile</a>
        </li>
      <?php endif ?>
      <?php if ($this->session->login!=TRUE): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('repository/daftar') ?>">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('repository/login') ?>">Login</a>
        </li>
      <?php endif ?>
    </ul>
  </div>
</nav>