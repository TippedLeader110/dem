<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Styles Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis neque, suscipit eget dolor quis, accumsan imperdiet elit. Praesent quis mauris eu quam malesuada auctor. Etiam vitae ante sapien. Sed mauris dui, varius non tempor in, semper fringilla ipsum. Phasellus nec purus enim. Nulla eget fringilla mi, id iaculis ante.">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('/assets/logo/indonesia.jpg')?>">

    <title>DEM | Dewan Energi Mahasiswa</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/custom.css') ?>">

    <!-- Font Awesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


</head>


<body data-spy="scroll" data-target="#navbarsExampleDefault">

<?php
  $this->load->view('main/layout/navbar'); // NGELOAD NAVBAR
  // 

 ?>




    

     // Written by @labnol
    </script>
    <script>
        myID = document.getElementById("bttp");

        var myScrollFunc = function() {
          var y = window.scrollY;
          if (y >= 1200) {
            myID.className = "btt show"
          } else {
            myID.className = "btt hide"
          }
        };

        window.addEventListener("scroll", myScrollFunc);
    </script>
    <?php $this->load->view($page)?>
</body>
</html>
