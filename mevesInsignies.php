<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./CSS/estils-perfil-notificacions.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>MirMeet</title>
</head>

<body>
    <?php
    //your PHP code goes here
    $insignia= new_Insignia();
    $insignia -> consultaInsigniesUsuari('1')
    ?>
     <?php
     //more PHP code
     ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MirMeet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion"
                aria-controls="menuNavegacion" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuNavegacion">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fa-solid fa-compass" aria-current="page" href="#"><span> Buscar</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fa-solid fa-bell" href="#"> Notificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fa-solid fa-user" href="#"> Cuenta</a>
                    </li>
                    <a class="nav-link fa-solid fa-icons" href="meves_insignies.html"> Insignies</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 5%;">
        <div class="row row-cols-1">
            <div class="col">
                <h1 style="margin-left:  50%;">Les Meves Insignies</h1>
            </div>
        </div>

    </div>

    <div class="row" style="margin-top: 50px;">

    </div>
    

</body>

</html>