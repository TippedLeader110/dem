<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Styles Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis neque, suscipit eget dolor quis, accumsan imperdiet elit. Praesent quis mauris eu quam malesuada auctor. Etiam vitae ante sapien. Sed mauris dui, varius non tempor in, semper fringilla ipsum. Phasellus nec purus enim. Nulla eget fringilla mi, id iaculis ante.">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('/assets/img/fav.png')?>">

    <title>Style | Great Food and Wine</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/custom.css') ?>">

    <!-- Font Awesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


</head>


<body data-spy="scroll" data-target="#navbarsExampleDefault">

<?php
  $this->load->view('layout/navbar.php'); // NGELOAD NAVBAR
  $this->load->view('layout/carousel.php');
  $this->load->view('layout/popbox.php');

 ?>




    <div id="about" class="container">
        <div class="starter-template">
            <h1 class="mb-5">Styles Best Food and Wine Bar</h1>
            <p>Use this document as a way to quickly start any new project.All you get is this text and a mostly barebones HTML document. In et elit felis. Aliquam ac vehicula ligula, a dapibus sem. Curabitur egestas odio sit amet purus sollicitudin facilisis eu vel risus. Morbi id ipsum vitae mi accumsan venenatis. Phasellus fringilla venenatis diam consectetur iaculis. Duis tempor mi lectus, in ultrices risus semper vitae. Maecenas interdum et metus et finibus. Aliquam condimentum sagittis massa, vel rutrum urna posuere et.</p>
        </div>
        <div class="row text-center pb-4">
            <div class="col-md-12 col-lg-4 p-1">
                <img src="<?php echo base_url('assets/img/f2.jpg') ?>" class="rounded-circle p-3" alt="Prime Meat Image" width="250" height="250">
                <h2>Prime Meat</h2>
                <p>Aliquam ac vehicula ligula, a dapibus sem. Curabitur egestas odio sit amet purus sollicitudin facilisis eu vel risus. Morbi id ipsum vitae mi accumsan venenatis.</p>
                <a class="btn btn-info mb-5" href="#" role="button">Selection</a>
            </div>
            <div class="col-md-12 col-lg-4 p-1">
                <img src="<?php echo base_url('assets/img/f3.jpg') ?>" class="rounded-circle p-3" alt="Fish Image" width="250" height="250">
                <h2>Fresh Fish</h2>
                <p>Aliquam ac vehicula ligula, a dapibus sem. Curabitur egestas odio sit amet purus sollicitudin facilisis eu vel risus. Morbi id ipsum vitae mi accumsan venenatis.</p>
                <a class="btn btn-info mb-5" href="#" role="button">Selection</a>
            </div>
            <div class="col-md-12 col-lg-4 p-1">
                <img src="<?php echo base_url('assets/img/f1.jpg') ?>" class="rounded-circle p-3" alt="Vegetables Image" width="250" height="250">
                <h2>Local Vegetables</h2>
                <p>Aliquam ac vehicula ligula, a dapibus sem. Curabitur egestas odio sit amet purus sollicitudin facilisis eu vel risus. Morbi id ipsum vitae mi accumsan venenatis.</p>
                <a class="btn btn-info mb-5" href="#" role="button">Selection</a>
            </div>
        </div>
    </div>

    <section class="specials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 col-xl-6 text-center">
                    <h2>Sign Up For Coupons and Specials</h2>
                </div>
                <div class="d-none d-lg-block col-lg-12 col-xl-6">
                    <form class="form-inline d-flex justify-content-center" action="contact.php" method="POST" enctype="multipart/form-data" role="form">
                        <div class="form-group p-2">
                            <label for="exampleInputName2"></label>
                            <input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="Your Name">
                        </div>
                        <div class="form-group p-2">
                            <label for="exampleInputEmail2"></label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Your Email">
                        </div>
                        <button type="submit" class="btn btn-outline-light">Get Specials</button>
                    </form>
                </div>
                <div class="d-lg-none col-xs-12 col-sm-12 col-md-6">
                    <form class="form" action="contact.php" method="POST" enctype="multipart/form-data" role="form">
                        <div class="form-group">
                            <label for="exampleInputName2"></label>
                            <input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2"></label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Your Email">
                        </div>
                        <button type="submit" class="btn btn-outline-light">Get Specials</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 p-5 text-center">
                    <img src="<?php echo base_url('assets/img/team.jpg') ?>" class="img-fluid" alt="team">
                </div>
                <div class="col-md-12 col-lg-6 p-5 text-light">
                    <h2>Our Team</h2>
                    <p>Aliquam ac vehicula ligula, a dapibus sem. Curabitur egestas odio sit amet purus sollicitudin facilisis eu vel risus. Morbi id ipsum vitae mi accumsan venenatis. Phasellus fringilla venenatis diam consectetur iaculis. Duis tempor mi lectus, in ultrices risus semper vitae. Maecenas interdum et metus et finibus. Aliquam condimentum sagittis massa, vel rutrum urna posuere et. Phasellus fringilla venenatis diam consectetur iaculis. Duis tempor mi lectus, in ultrices risus semper vitae. Maecenas interdum et metus et finibus. Aliquam condimentum sagittis massa, vel rutrum urna posuere et.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="video">
        <div id="block2" style="width: 100%; height: 800px;"
          data-vide-bg="mp4: <?php echo base_url('/assets/vid/Drink-Wine'); ?>, webm: <?php echo base_url('/assets/vid/Drink-Wine.'); ?>, ogv: <?php echo base_url('/assets/vid/Drink-Wine'); ?>, poster: video/ocean"
          data-vide-options="position: 0% 50%">
          <div class="wclb">
              <div class="text-light text-center">
                  <h2 class="display-3">Select Wine Club</h2>
                  <p>Join Our Elite Wine Club - Taste The Best Of The Best!</p>
                  <a class="btn btn-info mb-5" href="#" role="button">Join Today</a>
              </div>
          </div>
        </div>
    </section>

   <section id="menu">
       <div class="container">
           <div class="card-group text-center p-5">
               <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card m-3">
                            <img class="card-img-top mb-3" src="<?php echo base_url('assets/img/m1.jpg') ?>" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Appetizers</h4>
                                <p class="card-text p-2">Try one of our graet selection of tasty appetizers to start your meal.</p>
                                <!-- Large modal -->
                                <button class="btn btn-info mb-3" data-toggle="modal" data-target=".apps">View Items</button>
                                <div class="modal fade bd-example-modal-lg apps" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <h2 class="mn p-3">Appetizers</h2>
                                      <h4 class="mn">GROUPER BITES $10.00</h4>
                                      <p class="mn">Crispy Grouper served with Remoulade Sauce</p>...
                                        <h4 class="mn">SMOKED CHICKEN WINGS $10.00</h4>
                                      <p class="mn">Smoked in-house, Chargrilled, tossed in buffalo sauce, and served with bleu cheese dressing</p>...
                                      <h4 class="mn">CAJUN CRAB DIP $10.50</h4>
                                      <p class="mn">Lump crab meat, spicy pepper jack, Cajun spices, served with homemade chips</p>...
                                      <h4 class="mn">CRISPY MUSHROOMS $8.00</h4>
                                      <p class="mn">LBreaded mushrooms served with creamy horseradish</p>...
                                      <h4 class="mn">CRAB CAKE &amp; FRIED GREEN TOMATOES $11.00</h4>
                                      <p class="mn">Served with our own roasted corn salsa, home made remoulade and lemon.</p>...
                                      <h4 class="mn">AHI TUNA $12.00</h4>
                                      <p class="mn">Sesame seared "rare" tuna served with a wasabi, ginger and asian sauce.</p>...
                                      <h4 class="mn">OYSTERS ON THE HALF SHELL $12.00 - $22.00</h4>
                                      <p class="mn">Lemon, cocktail, horseradish, crackers. 1/2 Dozen - $12.00 Dozen - $22.00</p>...
                                      <h4 class="mn">PEEL &amp; EAT SHRIMP $11.00 - $20.00</h4>
                                      <p class="mn">Served with Cocktail Sauce &amp; Lemon. 1/2 Dozen - $11.00 Dozen - $20.00</p>...
                                    </div>
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card m-3">
                            <img class="card-img-top mb-3" src="<?php echo base_url('assets/img/m2.jpg') ?>" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Entrees</h4>
                                <p class="card-text p-2">If you are hungry try one of our awesome entrees,something for all</p>
                                <!-- Large modal -->
                                <button class="btn btn-info mb-3" data-toggle="modal" data-target=".ent">View Items</button>
                                <div class="modal fade bd-example-modal-lg ent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg2">
                                    <div class="modal-content">
                                      <h2 class="mn p-3">Entrees</h2>
                                      <h4 class="mn">NEW YORK STRIP $28.00</h4>
                                      <p class="mn">14oz Center Cut, mashed potatoes, asparagus</p>...
                                        <h4 class="mn">RIB EYE $29.00</h4>
                                      <p class="mn">14oz, aged chedar mac n cheese, asparagus</p>...
                                      <h4 class="mn">CHOPPED STEAK $15.00</h4>
                                      <p class="mn">Mushroom demi glaze, mashed potatoes, mixed veggies.</p>...
                                      <h4 class="mn">CENTER CUT PORK CHOPS $16.00</h4>
                                      <p class="mn">Korean BBQ sauce, rice, mixed veggies.</p>...
                                      <h4 class="mn">MARYLAND CRAB CAKES $21.00</h4>
                                      <p class="mn">Lump crab meat, rice, mixed veggies, remoulade sauce</p>...
                                      <h4 class="mn">MEDITERRANEAN SALMON $21.00</h4>
                                      <p class="mn">Fresh spinach, Kalamata olives, red onions, tomatoes, feta cheese, rice, mixed veggies.</p>...
                                      <h4 class="mn">AHI TUNA $24.00</h4>
                                      <p class="mn">Seared “RARE” Asian sauce, rice, asparagus.</p>...
                                      <h4 class="mn">CHICKEN VODKA PASTA $16.00</h4>
                                      <p class="mn">Grilled chicken, mushrooms, spinach, peppers, onions, fettuccini pasta, vodka cream sauce</p>...
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card m-3">
                            <img class="card-img-top mb-3" src="<?php echo base_url('assets/img/m3.jpg') ?>" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Desserts</h4>
                                <p class="card-text p-2">For the sweet tooth, finish your meal with someting sweet and delicious</p>
                                <!-- Large modal -->
                                <button class="btn btn-info mb-3" data-toggle="modal" data-target=".des">View Items</button>
                                <div class="modal fade bd-example-modal-lg des" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <h2 class="mn p-3">Desserts</h2>
                                      <h4 class="mn">N.Y Style Cheesecake $6.00</h4>
                                      <p class="mn">Topped with your choice of Chocolate, Raspberry or Caramel &amp; Whipped Cream</p>...
                                        <h4 class="mn">Chocolate Lava Cake $6.00</h4>
                                      <p class="mn">Served with Vanilla Ice Cream &amp; Whipped Cream</p>...
                                      <h4 class="mn">Peanut Butter Pie $6.00</h4>
                                      <p class="mn">Served with Chocolate &amp; Whipped Cream</p>...
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>

   <section id="plx">
        <div class="container">
            <div class="wtitle text-center text-light">
                <h2>We Have One Of the Best Wine Seletions On The Planet <br> Wines Are Selected By Our Experts From All Around The World</h2>
            </div>
        </div>
   </section>

   <section id="wines">
        <div class="container">
            <div class="wlt text-center text-light">
                <h2>Wine Selection</h2>
                <p>Complement your meal with one of our award winning wines</p>
            </div>
            <table class="table table-hover text-light">
                <thead>
                    <tr>
                        <th>Wine</th>
                        <th>Glass</th>
                        <th>Bottle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>KENDALL JACKSON VITNERS RESERVE</td>
                        <td>$9</td>
                        <td>$35</td>
                    </tr>
                    <tr>
                        <td>RED DIAMOND CABERNET</td>
                        <td>$7</td>
                        <td>$32</td>
                    </tr>
                    <tr>
                        <td>CUPCAKE VINEYARDS CHARDONNAY</td>
                        <td>$8</td>
                        <td>$28</td>
                    </tr>
                    <tr>
                        <td>JOEL GOTT 815 CABERNET</td>
                        <td>$9</td>
                        <td>$37</td>
                    </tr>
                    <tr>
                        <td>FRANCIS COPPOLA CHARDONNAY</td>
                        <td>$7</td>
                        <td>$30</td>
                    </tr>
                    <tr>
                        <td>KENDALL JACKSON CABERNET</td>
                        <th>$9</th>
                        <th>$35</th>
                    </tr>
                    <tr>
                        <td>CHATEAU ST.MICHELLE RIESLING</td>
                        <td>$8</td>
                        <td>$28</td>
                    </tr>
                    <tr>
                        <td>RED DIAMOND MERLOT</td>
                        <td>$9</td>
                        <td>$37</td>
                    </tr>
                    <tr>
                        <td>CHATEAU ST. MICHELE RIESLING</td>
                        <td>$7</td>
                        <td>$30</td>
                    <tr>
                        <td>CIGAR BOX MALBEC</td>
                        <th>$9</th>
                        <th>$35</th>
                    </tr>
                </tbody>
            </table>
        </div>
   </section>

    <section id="jumbo">
        <div class="container">
            <div class="jumbotron text-center">
                <h1 class="display-3">Customer Favorites!</h1>
                <p class="lead">Some of our favorite dishes</p>
                <hr class="m-y-2">
                <p>See what our customers like best!</p>
                <p class="lead">
                    <a class="btn btn-info btn-lg" href="#favs" role="button">Favorites</a>
                </p>
            </div>
        </div>
    </section>

    <section id="favs">
        <div class="container">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav1.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Ahi Tuna</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$14.99</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav2.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Sushi Roll</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$10.99</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav3.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Wild Salmon</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$16.99</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav4.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Chcken Poi</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$9.99</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav5.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Hot Wings</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$6.99</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav6.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Chicken Blu</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$9.99</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav6.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Tenderloin</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$24.99</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3">
                        <div class="card text-white">
                           <img class="card-img" src="<?php echo base_url('assets/img/fav8.jpg') ?>" alt="Card image">
                           <div class="card-img-overlay ovl">
                               <h4 class="card-title">Ribeye</h4>
                               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                               <p class="card-text">$19.99</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="locations">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center p-5">
                        <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target="#ny" aria-expanded="false" aria-controls="collapseExample">New York</button>
                       <div class="collapse" id="ny">
                           <div class="card card-body text-left loc">
                               <h2>New York</h2>
                               <p><img src="<?php echo base_url('assets/img/nyk.jpg') ?>" class="rounded float-left" alt="New York" width="150px" height="150px"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12090.5671393662!2d-73.98556257681307!3d40.747907098639416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire+State+Building!5e0!3m2!1sen!2sus!4v1522327240716" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                           </div>
                       </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center p-5">
                         <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target="#ldn" aria-expanded="false" aria-controls="collapseExample">London</button>
                       <div class="collapse" id="ldn">
                           <div class="card card-body text-left loc">
                               <h2>London</h2>
                               <p><img src="<?php echo base_url('assets/img/ldn.jpg') ?>" class="rounded float-left" alt="New York" width="150px" height="150px"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16708.354511571728!2d-0.13422041115033562!3d51.50015677452179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760520cd5b5eb5%3A0xa26abf514d902a7!2sBuckingham+Palace!5e0!3m2!1sen!2sus!4v1522327530167" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                           </div>
                       </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center p-5">
                    <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target="#prs" aria-expanded="false" aria-controls="collapseExample">Paris</button>
                       <div class="collapse" id="prs">
                           <div class="card card-body text-left loc">
                               <h2>Paris</h2>
                               <p><img src="<?php echo base_url('assets/img/prs.jpg') ?>" class="rounded float-left" alt="New York" width="150px" height="150px"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42008.222558979054!2d2.299875659123619!3d48.84840994720415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel+Tower!5e0!3m2!1sen!2sus!4v1522327608634" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                           </div>
                       </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center p-5">
                    <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target="#tko" aria-expanded="false" aria-controls="collapseExample">Tokyo</button>
                   <div class="collapse" id="tko">
                       <div class="card card-body text-left loc">
                           <h2>Tokyo</h2>
                           <p><img src="<?php echo base_url('assets/img/tko.jpg') ?>" class="rounded float-left" alt="New York" width="150px" height="150px"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d146660.67091817962!2d139.7280265060152!3d35.682576459147874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cccfe9d4d0d%3A0xa2b1ac0d60f76359!2zSmFwYW4sIOOAkjE1MS0wMDUzIFTFjWt5xY0tdG8sIFNoaWJ1eWEta3UsIFlveW9naSwgMyBDaG9tZeKIkjM34oiSMSwg5Luj44CF5pyo44Ko44K544OG44O844OI44OT44OrIDFG!5e0!3m2!1sen!2sus!4v1522327779901" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container revs text-center text-light">
            <div class="tests pb-5">
                <h2>What Our Customers Say!</h2>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/img/pp1.jpg') ?>" class="rounded-circle pb-3" alt="First slide">
                        <h3>Jane Smith</h3>
                        <p><em>"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident".</em></p>
                        <p><strong>New York</strong></p>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/pp3.jpg') ?>" class="rounded-circle pb-3" alt="Second slide">
                        <h3>James Jones</h3>
                        <p><em>"Nihil anim keffiyeh helvetica Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident Nihil anim keffiyeh helvetica".</em></p>
                        <p><strong>Tokyo</strong></p>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/pp2.jpg') ?>" class="rounded-circle pb-3" alt="Third slide">
                        <h3>Mary Nimon</h3>
                        <p><em>"Labore wes anderson cred nesciunt sapiente ea proident Nihil anim keffiyeh helvetica".</em></p>
                        <p><strong>Paris</strong></p>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="vid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-light pb-5">
                    <h2 class="mb-3">Taste The Worlds Best!</h2>
                    <p title="Open on July 1st at 11am">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica,  keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>
                    <a class="btn btn-info btn-lg mt-3" href="#contact" role="button">Book Now</a>
                </div>
                <div class="d-none d-md-block col-xs-12 col-sm-12 col-md-12 col-lg-6 text-center">
                    <div id="muteYouTubeVideoPlayer"></div>
                </div>
            </div>
        </div>
    </section>


    <section id="hire">
        <div class="container-fluid">
            <div class="jumbotron jumbotron-fluid">
               <div class="container hir">
                   <marquee direction="left"><h1 class="display-3"><img src="http://gifgifs.com/animations/jobs-people/cooks-and-chefs/Flipping_it.gif" alt="chef">  Now Hiring - Join Our Awesome Team!!! - Call 001 321 456 8541 Today!</h1></marquee>
               </div>
           </div>
        </div>
    </section>




    <section id="numbers">
        <div class="container">
            <div class="text-center text-light pb-5">
                <h2>Delicious Items Served This Week!</h2>
            </div>
            <div class="row text-center text-light">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <h2 class="numc mx-auto"><span class='numscroller' data-min='1' data-max='1542' data-delay='35' data-increment='10'>0</span></h2>
                    <h3 class="numd">Appetizers</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <h2 class="numc mx-auto"><span class='numscroller' data-min='1' data-max='2487' data-delay='35' data-increment='10'>0</span></h2>
                    <h3 class="numd">Entrees</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <h2 class="numc mx-auto"><span class='numscroller' data-min='1' data-max='1347' data-delay='35' data-increment='10'>0</span></h2>
                    <h3 class="numd">Deserts</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <h2 class="numc mx-auto"><span class='numscroller' data-min='1' data-max='854' data-delay='35' data-increment='10'>0</span></h2>
                    <h3 class="numd">Wines</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Contact Us Today</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pb-5">
                    <h2>Book Now!</h2>
                    <p>To avoid dissappointment book well ahead of time. <br>We are booked up for several months. <br> Occasionally a table will become available due to a cancellation. If you would like to be informed of openings please message us.</p>
                    <p>For regular bookings enter your desited date and time and number of people in the form on the right <br> We will do our best to accommodate you. <br> You can also contact us directly by phone on: </p>
                    <h2>001 123 654 4789</h2>
                    <a class="btn btn-info btn-lg cbtn" href="#locations" role="button">Locations</a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <form action="/contact.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                           <label for="exampleFormControlInput1"><h2>Party Name</h2></label>
                           <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
                       </div>
                       <div class="form-group">
                           <label for="exampleInputEmail1"><h2>Return Email Address</h2></label>
                           <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlTextarea1"><h2>Enquiry</h2></label>
                           <textarea name="message" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Date, Time And Number Of People" rows="3"></textarea>
                       </div>
                       <button type="submit" class="btn btn-info btn-lg">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20335.086837426712!2d-73.98078318538124!3d40.743793715337176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire+State+Building!5e0!3m2!1sen!2sus!4v1523722789332" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="blogo col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <a href="#"><img src="<?php echo base_url('assets/img/Logo.png') ?>" alt="Styles logo"></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cpt text-light text-center">
                        <p>© 2018-Present Styles inc.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="ftaw text-light text-center">
                        <a href="https://www.facebook.com/system22.net/" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://twitter.com/22ITSolutions1" target="_blank"><i class="fa fa-twitter-square"></i></a>
                        <a href="https://plus.google.com/+System22Net/posts" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="bttp" class="btt">
        <a href="#"><i class="fa fa-arrow-circle-up"></i></a>
    </div>







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <!-- Scrollspy -->
    <script>$('body').scrollspy({ target: '#navbarsExampleDefault', offset: 108 })</script>
    <!-- Smooth Scroll -->
    <script src="<?php base_url('assets/js/smooth-scroll.js') ?>"></script>
    <!-- Video Full Width -->
    <script src="<?php base_url('assets/js/jquery.vide.js') ?>"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <!-- Number Counter -->
    <script src="<?php base_url('/assets/js/nsc.js') ?>"></script>
    <!-- Video -->
    <script async src="https://www.youtube.com/iframe_api"></script>
    <script>
     function onYouTubeIframeAPIReady() {
      var player;
      player = new YT.Player('muteYouTubeVideoPlayer', {
        videoId: 'iLs5c2Y1BOM', // YouTube Video ID
        width: 560,               // Player width (in px)
        height: 316,              // Player height (in px)
        playerVars: {
          autoplay: 1,        // Auto-play the video on load
          controls: 1,        // Show pause/play buttons in player
          showinfo: 0,        // Hide the video title
          modestbranding: 1,  // Hide the Youtublayoute Logo
          loop: 1,            // Run the video in a loop
          fs: 0,              // Hide the full screen button
          cc_load_policy: 0, // Hide closed captions
          iv_load_policy: 3,  // Hide the Video Annotations
          autohide: 0         // Hide video controls when playing
        },
        events: {
          onReady: function(e) {
            e.target.mute();
          }
        }
      });
     }

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
</body>
</html>
