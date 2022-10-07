<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nba</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    
<header>


<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="Home"><b>Nba info</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <h3><a class="nav-link active" aria-current="page" href="Home"><b>Home</b></a></h3>
          </li>
          
          
          <li class="nav-item">
          <a class="nav-link active" href="Players"><b>Jugadores NBA</b></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jugador
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
          {foreach from=$players item=$player }
            
        
            <li><a class="dropdown-item" href="Players/{{$player->Player_id}}">{{$player->Player_Name}}</a></li>

          {/foreach}
          </ul>
        </li>
          
          
        <li class="nav-item">
        <a class="nav-link active" href="Teams"><b>Equipos NBA</b></a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Equipo
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
            {foreach from=$teams item=$team }
              
          
              <li><a class="dropdown-item" href="Teams/{{$team->Team_id_fk}}">{{$team->Team}}</a></li>

            {/foreach}
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="form_admi"><b>Parte Admi</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="register"><b>Regitrarse Admi</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><b>Iniciar Sesion Admi</b></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</header>