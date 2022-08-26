<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
require_once("includes/conn.php");

?>
    <!-- navbar -->
    <nav class="navbar bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="Asstes/Mytm logo.png" alt="" width="60" height="40">
          </a>
          <a class="navbar-brand" href="#">
            <img src="Asstes/Khiladee logo.png" alt="" width="60" height="40">
          </a>
        </div>
      </nav>
      <!-- banner -->
      <div class="banner">
        <img src="Asstes/banner.png" alt="...">
          </div>
<!-- .....  -->
<div class="container-fluid textb">
  <div class="row">
    <div class="col-md-8 mt-4 offset-md-1 text">
      <h1 class="heading">First Come First Serve</h1>
      <div class="top-par">
      <h5 class="perag" >Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptatibus <br> possimus temporibus exercitationem, ullam repudiandae facilis, eum cumque <br> quia culpa distinctio quos neque iusto fugit unde facere.</h5>
      <button type="button" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#exampleModal" >Grab Your Ticket</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="forms/form.php" >
          <div class="mb-3">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control"
              pattern="[a-zA-Z'-'\s]*"  required >
          </div>
          <div class="mb-3">
            <label class="col-form-label">Phone</label>
            <input type="text" name="phone" class="form-control"pattern="03[0-9]{2}[0-9]{7}" required >
          </div>
          <div class="mb-3">
            <label class="col-form-label">Email</label>
            <input type="email" name="email" class="form-control" data-rule="email"
           data-msg="Please enter a valid email"required >
          </div>
          <div class="mb-3">
            <label  class="col-form-label">Address</label>
            <textarea class="form-control" name="address"  
             required ></textarea>
          </div>
          <img src="Asstes/1500rs.jpeg" id="pic1500"  style="width: 100%">
          <img src="Asstes/1000rs.jpeg" id="pic1000"  style="width: 100%; display:none;">
          <div class="form-group">
            <label for="price" class="col-form-label">Price</label> <br> <br>
         
         <div class="text-center">
         <div class="form-check radio-toolbar form-check-inline">
  <input class="form-check-input" type="radio" checked="" name="price" id="inlineRadio2" value="1500Rs">
  <label class="form-check-label" for="inlineRadio2">Rs:1500</label>
</div>
         <div class="form-check radio-toolbar form-check-inline">
  <input class="form-check-input" type="radio"  name="price" id="inlineRadio1" value="1000Rs">
  <label class="form-check-label" for="inlineRadio1">Rs:1000</label>
</div>
</div>
</div>

     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="add" class="btn btn-primary">Purchase</button>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>

            <!-- banner -->
      <div class="banner container mt-3">
        <img src="Asstes/banner 2.png ">
          </div>
          <!-- event  -->
         
            <div class="container-fluid my-3" id="event">
              <div class="evheading  text-center">
                <h2 >EVENT FEATURES</h2>
              </div>
              <div id="logos">
              <div> 
                  <a href=""> <img class="logo" src="icons/1.png" alt="Logo Van de Bovenste Plank"></a>
              <p class="epera">Enormous <br> Screens</p>
            </div>
              <div> 
                    <a href="">   <img class="logo" src="icons/2.png" alt="Logo NRC"></a>
                <p class="epera">Experience <br>Zones/Lounges</p>
              </div>
                <div> 
                      <a href="">  <img class="logo" src="icons/3.png" alt="Logo Keeperstalent"></a>
                  <p class="epera">Extensively <br> Branded Arenas</p>
                </div>
                  <div>
                         <a href="">    <img class="logo" src="icons/4.png" alt="Key2Finance"></a>
                    <p class="epera">SMD Screens <br> For Sponsor</p>
                  </div>
                    <div>  
                          <a href=""> <img class="logo" src="icons/5.png" alt="Logo Van de Bovenste Plank"></a>
                      <p class="epera">Security <br> Arrangements</p>
                    </div>
                      <div>  
                           <a href="">   <img class="logo" src="icons/6.png" alt="Logo NRC"></a>
                        <p class="epera">Food Facility</p>
                      </div>
                        <div>  
                           <a href="">  <img class="logo" src="icons/7.png" alt="Logo Keeperstalent"></a>
                          <p class="epera">Winning <br> Celebrations</p>
                        </div>
                          <div>
                             <a href="">    <img class="logo" src="icons/8.png" alt="Key2Finance"></a>
                            <p class="epera">Fireworks</p>
                          </div>
                  </div>
          </div>


<!-- clients  -->
<div class="container my-5">
    <div id="client-logos">
       <a href=""> <img class="logo" src="Asstes/pepsi logo.png" alt="Logo Van de Bovenste Plank"></a>
       <a href="">   <img class="logo" src="Asstes/kfc logo.png" alt="Logo NRC"></a>
        <a href="">  <img class="logo" src="Asstes/Mc logo.png" alt="Logo Keeperstalent"></a>
          <a href="">    <img class="logo" src="Asstes/cocacola logo.png" alt="Key2Finance"></a>
    </div>
</div>

<!-- video  -->
<!-- <div class="video">
    <iframe class="col-lg-10 col-md-12 col-sm-12  "
    src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
</div> -->
<!-- .....  -->
<div class="container">
<div class="row text-center mt-5 mb-5">
    <div class="col-lg-6 col-md-12">
        <img src="Asstes/company image.png" alt="" class="img-responsive" />
    </div>
    <div class="col-lg-6 col-md-12 mt-5">
        <h1>MYTM Pakistan</h1>
        <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, mollitia?<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, quae?<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, quibusdam.</p>
    </div>
</div>

<div class="row text-center mt-5 mb-5">
    <div class="col-lg-6 col-md-12 mt-5">
        <h1>MYTM Pakistan</h1>
        <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, mollitia?<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, quae?<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, quibusdam.</p>
    </div>
    <div class="col-lg-6 col-md-12">
        <img src="Asstes/company image.png" alt="" class="img-responsive" />
    </div>
</div>
</div>
<!-- ......  -->
<div class="container-fluid textb">
    <div class="row">
      <div class="col-md-8 mt-4 offset-md-1 text">
        <h1 class="heading">Get Asia Cup Tickets</h1>
        <div class="top-par">
        <h5 class="perag" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus  repellendus <br> possimus temporibus beatae exercitationem, ullam repudiandae facilis, eum cumque <br> quia culpa distinctio accusantium quos neque iusto fugit unde facere.</h5>
      <!-- </div> -->
      <!-- <div class="col-md-4 mt-5 p-5 button"> -->
        <button type="button" class="btn btn-danger">Grab Your Ticket</button>
        </div>
      </div>
    </div>
  </div>
<!-- footer  -->
<footer>
    <div class="container-fluid footer ">
        <div class="row px-5">
            <div class="col-lg-3 col-md-5 " style="margin-top:50px ;" >
           <h5>info@mytm.pk<br>123456 <br>www.mytm.pk</h5>
        </div>
            <div class="col-lg-3 col-md-3" style="margin-top:70px ;margin-left:auto;"  >
            <a class="navbar-brand mx-3" href="#">
                <img src="Asstes/Mytm logo.png" alt="" width="70" height="40">
              </a>
              <a class="navbar-brand" href="#">
                <img src="Asstes/Khiladee logo.png" alt="" width="70" height="40">
              </a>
            </div>
        </div>
    </div>
</footer>


<!-- JavaScript Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
      $("#inlineRadio2").click(function(){
        $("#pic1500").show();
      $("#pic1000").hide();
      });
      $("#inlineRadio1").click(function(){
      $("#pic1000").show();
      $("#pic1500").hide();
      })
    })
  </script> 

        </body>
        </html> 
       