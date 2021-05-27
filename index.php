<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link rel="stylesheet" href="../newt/Css/Styleindex.css">
  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/63d83764ab.js" crossorigin="anonymous"></script>


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
  <title>TEEN</title>
</head>



<body> 
<!-- Barra de navegacion -->
<div class="container-fluid" >
<nav class="navbar navbar-expand-md  navbar-light bg-light" id="navbarNav">
  <a href="" class="navbar-brand" id="teenlogonavbar">TEEN</a>
    <div class="collapse navbar-collapse ">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item" >
        
          <a class="nav-link " id="navitem" name="accion" id="accion" value="insertar" href="/newt/Controllers/UsuariosController.php?accion=login">Log in</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navitem" href="/newt/Controllers/UsuariosController.php?accion=register">Sign in</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navitem" href="#"> Contact Us</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" id="navitem" href="#"> About Us</a>
        </li>
      </ul>
    </div>
</nav>
<!-- Banner -->
<section class="banner" id="banner">
		<div class="banner-content" id="banner-content">
			<h1 id="titleteen">TEEN TECHNICAL ENGLISH</h1>
      <p id="bennertext">If you are a sena apprentice (CBA) and you feel that your technical English is not the best, register and have fun with us now, learn didactically and at your own pace.
           </p>
           <br>
           <h4>IT HAS NEVER BEEN EASIER!</h4>
           <br>
			<a href="/newt/Controllers/UsuariosController.php?accion=register" >START NOW</a>	
		</div>
	</section>
	
<!-- iconos de informacion -->
    <section id="mid">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4" id="backgroundmidcolor">
          <a class="fas fa-puzzle-piece fa-5x" id="iconsmid" href="#"></a>
          <h3>Play and Learn</h3>
          <p id="midiconspage">In our practice section you will find different activities to practice technical vocabulary 
            and the different ways to use it.</p>
            <b><a id="button-column" class="fa fa-arrow-right fa-2x" href="#"></a></b>	
        </div>

        <div class="col-lg-4" id="backgroundmidcolor">
          <a class="fas fa-search fa-5x" id="iconsmid" href="#"></a>
          <h3>In search of the unknown</h3>
          <p id="midiconspage">Use the glossary section to find all those words you don't know in English,
             their meanings and how to pronounce them.</p>
            <a id="button-column" class="fa fa-arrow-right fa-2x" href="#"><b></b></a>	
        </div>

        <div class="col-lg-4" id="backgroundmidcolor">
          <a class="far fa-check-circle fa-5x" id="iconsmid" href="#"></a>
          <h3>Test your knowledge</h3>
          <p id="midiconspage">Test your knowledge by taking one of the exams that we have available for you</p><br>
            <b><a id="button-column" class="fa fa-arrow-right fa-2x" href="#"></a></b>	
        </div>
      </div>
    </div>

    <!-- Footer -->
   <footer class="text-center" id="footer">
  <div class="container p-4">
    <section class="">
      <form action="">
        <div class="row d-flex justify-content-center">
        <div class="col-auto">
            <p class="pt-2">
              <strong>Contact us for more information</strong>
            </p>
          </div>
          <div class="col-md-5 col-12">
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn mb-4" id="buttonfo">Sent</button>
          </div>
          <div class="col-auto">
        </div>
      </form>
    </section>
    <section class="mb-4" id="info">
      <p>
      This page was created for educational, non-profit purposes, focused only for the SENA apprentice from Mosquera, 
      it cannot be distributed without prior authorization, consult the system distributors.
      </p>
    </section>
    <section class="">
      <div class="row">
        <div class="col-lg-4">
          <h5 class="text-uppercase">Practices</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="" id="link-footer">Listening</a>
            </li>
            <li>
              <a href="#!" class="" id="link-footer">Complete</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h5 class="text-uppercase">Programs</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="" id="link-footer">ADSI</a>
            </li>
            <li>
              <a href="#!" class="" id="link-footer">Agricultural production</a>
            </li>
            <li>
              <a href="#!" class="" id="link-footer">Digital animation</a>
            </li>
            <li>
              <a href="#!" class="" id="link-footer">International Trade</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h5 class="text-uppercase">SERVICES</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" id="link-footer" >Contact us</a>
            </li>
            <li>
              <a href="#!" id="link-footer">Log in</a>
            </li>
            <li>
              <a href="#!" id="link-footer" >sign in</a>
            </li>
            <li>
              <a href="#!" id="link-footer">About us</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <div class="text-center p-3" style="background-color: rgba(175, 174, 174, 0.253);">
    © 2021 TEEN: Final Project
  </div>
</footer>
</body>
</html>