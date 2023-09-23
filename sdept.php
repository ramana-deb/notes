<?php
include('include.php');
include('staffloginback.php');
include('linkstaff.php');

?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>select</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <style>
    .modal {
      width: 35%;
      height: auto;
    }

    .plus {
      margin-left: 40%;
      margin-top: 5%;
    }

    button {
      height: 100px;
      width: 200px;
      border-radius: 20px;
      border: none !important;
      /* background-color: #03a9f4; */
      background-image: linear-gradient(to right, lightblue, darkblue);
    }

    .new {
      padding: 50px !important;
    }

    i {
      padding-right: 30px !important;
    } 
     a {
        color: black !important;
      }
      nav{
         background-image: linear-gradient(to right, lightblue, darkblue);
      }
      
  </style>
 
 
</head>

<body>
  <div class="row">
    <div class="col s12 m3 l3">
      <div class="navbar-fixed">
        <nav style=" background-image: linear-gradient(to right, lightblue, darkblue)">
          <div class="nav-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
      </div>
      <ul id="slide-out" class="sidenav sidenav-fixed collapsible">
        <li>
          <div class="user-view">
            <div class="background"><img src="bg.jfif" /></div>
            <div class="circle">
              <a href="#user"><img class="circle" src="ava.jpg" style="margin-left: 80px" /></a>
            </div>
            <a href="#name"><span class="black-text name" style="text-align: center">user</span></a>
            <a href="#email"><span class="black-text email" style="text-align: center">email@gmail.com</span></a>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <a href="#!"><i class="material-icons"></i>
              <h5 style="margin-left: 40px">DEPARTMENT</h5>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col s6 l9 offset-l3">
      <div class="row">
        <form action="sdept.php" method='post'>
          <div class="col s1 l4 new " style="margin-left: 55px">
            <button class="waves-effect waves-light" type="submit" name="CSE">CSE
              <i class="material-icons right">send</i>
            </button>
          </div>
          <div class="col s1 l4 new " style="margin-left: 55px">

            <button class=" waves-effect waves-light z-depth-0" type="submit" name="MECH">MECH
              <i class="material-icons right">send</i>
            </button>

          </div>
          <div class="col s1 l4 new " style="margin-left: 55px">

            <button class=" waves-effect waves-light" type="submit" name="BME">BME
              <i class="material-icons right">send</i>
            </button>

          </div>
          <div class="col s1 l4 new " style="margin-left: 55px">

            <button class=" waves-effect waves-light" type="submit" name="ECE">ECE
              <i class="material-icons right">send</i>
            </button>

          </div>
          <div class="col s1 l4 new " style="margin-left: 55px">

            <button class=" waves-effect waves-light" type="submit" name="EEE">EEE
              <i class="material-icons right">send</i>
            </button>

          </div>
          <div class="col s1 l4 new " style="margin-left: 55px">

            <button class=" waves-effect waves-light" type="submit" name="MBA">MBA
              <i class="material-icons right">send</i>
            </button>

          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".modal").modal();
      $(".sidenav").sidenav();
    });
  </script>
</body>

</html>