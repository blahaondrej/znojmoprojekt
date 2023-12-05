<!-- ==================== Start Navbar ==================== -->

<nav class="navbar change navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="<?php echo $url ?>">
            <img src="<?php echo $url ?>/src/assets/img/logo-light.svg" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url ?>">Domů</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url ?>/o-nas.php">O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url ?>/projekty.php">Projekty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url ?>/kontakt.php">Kontakt</a>
                </li>
            </ul>
            <div class="social-icon">
                <a href="<?php echo $url ?>/kontakt.php"><img src="<?php echo $url ?>/src/assets/img/icons/email-white.svg" alt=""></a>
            </div>
        </div>
    </div>
</nav>

<!-- ==================== End Navbar ==================== -->