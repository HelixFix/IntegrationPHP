

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">

            <!--Menu hamburger-->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#topmenu" aria-controls="topmenu" aria-extended="false" title="Menu mobile">
                <i class="fas fa-bars"></i>
            </button>

            <!--Logo-->
            <span class="navbar-brand">Ma société</span>

            <!--Navbar-->

            <!--justify-content-center  placement du contenu au centre, justify-content-end placement du contenu à droite -->
            <div class="collapse navbar-collapse justify-content-center" id="topmenu">
                <!--ms-auto placement de l'élément à droite-->
                <ul class="navbar-nav ">

                    <li class="nav-item">
                        <a href="index.php?page=home" class="nav-link">Accueil</a>
                    </li>
                    
                <li class="nav-item dropdown">

                    <a href="#" role="button" class="nav-link dropdown-toggle" data-mdb-toggle="dropdown" id="ssproduits" aria-expanded="true">Mes produits</a>

                    <ul class="dropdown-menu" aria-labelledby="ssproduits">

                        <li class="dropdown-item"><a href="index.php?page=produits&id=A">Paragraphe 1</a></li>
                        <li class="dropdown-item"><a href="index.php?page=produits&id=B">Paragraphe 2</a></li>
                        <li class="dropdown-item"><a href="index.php?page=produits&id=C">Paragraphe 3</a></li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">L'équipe</a>
                </li>

                    <li class="nav-item">
                        <a href="index.php?page=societe" class="nav-link">La société</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php?page=produits" class="nav-link">Nos produits</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php?page=contact" class="nav-link">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

