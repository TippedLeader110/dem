<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Styles Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis neque, suscipit eget dolor quis, accumsan imperdiet elit. Praesent quis mauris eu quam malesuada auctor. Etiam vitae ante sapien. Sed mauris dui, varius non tempor in, semper fringilla ipsum. Phasellus nec purus enim. Nulla eget fringilla mi, id iaculis ante.">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('/assets/img/fav.png')?>">

    <title>Daftar Kompetisi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/custom.css') ?>">

    <!-- Font Awesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style media="screen" type="text/css">
      body{
        background: #3a3535;
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <?php
    // $this->load->view('/komponen/navbar.php');
     ?>
    <form class="" action="" method="post">
    <div class="container-fluid kompetisi-form " id="#komp">



        <div class="row row-group">
          <div class="col">
            <div class="form-daftar">
              <input type="text" name="nama_tim" value="" autocomplete="off" required/>
              <label for="nama_tim" class="label-name">
                <span class="content-name">Nama Tim</span>
              </label>
            </div>
          </div>
          <!--  -->
          <div class="col">
            <div class="form-daftar">
              <input type="text" name="asal_institusi" value="" autocomplete="off" required/>
              <label for="nama_tim" class="label-name">
                <span class="content-name">Asal Institusi</span>
              </label>
            </div>
          </div>
        </div>

<!-- ------>

        <div class="row row-group">
          <div class="col">
            <div class="form-daftar">
              <input type="text" name="nama_ketua_tim" value="" autocomplete="off" required/>
              <label for="nama_tim" class="label-name">
                <span class="content-name">Nama Ketua Tim</span>
              </label>
            </div>
          </div>
          <!--  -->
          <div class="col">

          </div>
          <div class="w-100"></div>
          <div class="col">
            <div class="form-daftar">
              <input type="text" name="nama_anggota_1" value="" autocomplete="off" required/>
              <label for="nama_tim" class="label-name">
                <span class="content-name">Nama Anggota 1</span>
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-daftar">
              <input type="text" name="nama_anggota_2" value="" autocomplete="off" required/>
              <label for="nama_tim" class="label-name">
                <span class="content-name">Nama Anggota 2</span>
              </label>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col">
            <div class="form-daftar">
              <input type="text" name="nama_anggota_3" value="" autocomplete="off" required/>
              <label for="nama_tim" class="label-name">
                <span class="content-name">Nama Anggota 3</span>
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-daftar">
              <input type="text" name="nama_anggota_4" value="" autocomplete="off" required/>
              <label for="nama_tim" class="label-name">
                <span class="content-name">Nama Anggota 4</span>
              </label>
            </div>
          </div>
        </div>




        <!-- <div class="form-daftar">
          <input type="text" name="nama_tim" value="" autocomplete="off" required/>
          <label for="nama_tim" class="label-name">
            <span class="content-name">Nama Tim</span>
          </label>
        </div>
        <div class="form-daftar">
          <input type="text" name="nama_tim" value="" autocomplete="off" required/>
          <label for="nama_tim" class="label-name">
            <span class="content-name">Nama Tim</span>
          </label>
        </div> -->


      </div>
    </form>
  </body>
</html>
