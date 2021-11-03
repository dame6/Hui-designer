<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/tl_logotype.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
  <title>connexion</title>
</head>

<body class="body1">
  <header class="header">
    <div class="container">
    <nav class="navbar navbar-expand-md  ">

    <a href="{{ url('/') }}" class="logo"><img src="img/logo-HD.svg" alt="#Logo">
      </a>

     

    </nav>
  </div>
  </header>
  <main>
  <div class="container">

   <div class="login">

                  <form class="loginform" action="{{ url('/connexion') }}" method="POST">
                     @csrf
                    <div class="adm">Bienvenue, Admin</div>
                    
                    <div class="login_title">
                      Connexion
                    </div>



                    <div class="form-group">

                      <input name="email" type="text" class="form-control mt-3" placeholder="Email" autocomplete="ON"
                        required>
                    </div>
                    <div class="form-group">

                      <input name="motpasse" type="Password" class="form-control mt-3" placeholder="mot de passe"
                        autocomplete="OFF" required>
                    </div>



                    <button class="mt-5 valider" type="submit" style="color: white;">
                      Veillez accéder à l’application
                    </button>
                  </form>
                  <div class="loginimg"
                    style="background-image: url('img/group.png');">
                  </div>

                </div>

  </div>
  </main>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>