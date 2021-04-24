<body>



    <nav>
        <div id="marker"></div>
        <?php if ($_GET['page'] == 'home') { ?>
            <li class="nav-item active"><?php } else { ?>

            <li class="nav-item ">
            <?php } ?>

            <a href="index.php?page=home">
                <div class="icon">
                    <i class="fa fa-home active" aria-hidden="true"></i>
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="name"><span data-text="Accueil">Accueil</span></div>
            </a>
            </li>

            <?php if ($_GET['page'] == 'produits') { ?>
                <li class="nav-item active"><?php } else { ?>

                <li class="nav-item ">
                <?php } ?>

                <a href="index.php?page=produits" class="">
                    <div class="icon">
                        <i class="fa fa-seedling" aria-hidden="true"></i>
                        <i class="fa fa-seedling" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="Produits">Produits</span></div>
                </a>
                </li>

                <?php if ($_GET['page'] == 'societe') { ?>
                    <li class="nav-item active"><?php } else { ?>

                    <li class="nav-item ">
                    <?php } ?>

                    <a href="index.php?page=societe">
                        <div class="icon">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                        <div class="name"><span data-text="Société">Société</span></div>
                    </a>
                    </li>

                    <?php if ($_GET['page'] == 'contact') { ?>
                        <li class="nav-item active"><?php } else { ?>

                        <li class="nav-item ">
                        <?php } ?>

                        <a href="index.php?page=contact">
                            <div class="icon">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                            </div>
                            <div class="name"><span data-text="Contact">Contact</span></div>
                        </a>
                        </li>

                        <?php if ($_GET['page'] == 'gestion') { ?>
                            <li class="nav-item active">
                            <?php } else { ?>

                            <li class="nav-item ">
                            <?php } ?>

                            <a href="index.php?page=gestion">
                                <div class="icon">
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                </div>
                                <div class="name"><span data-text="Gestion">Gestion</span></div>
                            </a>
                            </li>


    </nav>