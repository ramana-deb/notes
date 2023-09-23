<?php
include('include.php');
include('loginback.php');

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <title>Document</title>
  
  <style>
    .card {
      border-radius: 20px;
    }
a {
        color: black !important;
      }
    .box {
      margin-top: 10%;
    }

    .btn {
      border-radius: 5px;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="container box">
    <div class="row">
      <div class="col s9 m7 l6 offset-l3 push-s1 push-m2">
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <form class="col s12" action="login.php" method="post">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email" name="emails" class="validate" />
                  <label for="email">email</label>
                  <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">keys</i>
                  <input id="password" type="password" name="pass" class="validate" />
                  <label for="password">Password</label>
                </div>
                <div class="center-align">
                  <button class="btn waves-effect waves-light" type="submit" name="login">login
                  </button>
                </div>
                <p class="flow-text center-align">or</p>
                <a href="stprofile.php">
                  <p class="flow-text center-align">Register</p>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>