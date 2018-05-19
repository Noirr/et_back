  
	
	
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Opis strony.">
    
    <title>Panel klienta - Ekstraklasa Trolls</title> 
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,800&amp;subset=latin-ext" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
</head>
<body>

	<?php wp_head(); ?>

    <!-- ####### Header ####### -->
    <header class="et-header">
        <div class="container px-xl-0">
            <nav class="navbar navbar-expand-lg navbar-dark et-header">
                
                <!-- Logo -->
                <a class="navbar-brand" href="#"><img src="<?php echo BACK_URL; ?>/wp-content/uploads/2018/05/et_logo.png" alt="Logo"></a>

                <!-- Hamburger -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main menu -->
                <div class="collapse navbar-collapse" id="mainMenu">
                
                <?php 
                if( current_user_can('editor'))
                { 
                    ?>

                    <ul class="navbar-nav mr-auto text-uppercase et-menu">
                       
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="<?php echo BACK_PAGE_PANEL."&type=news"; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newsy</a>                 
                           <div class="dropdown-menu et-menu-dropdown" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_PANEL."&type=news&cat=news"; ?>">Newsy</a>
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_PANEL."&type=news&cat=artykuly"; ?>">Artykuły</a>
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_PANEL."&type=news&cat=wywiady"; ?>">Wywiady</a>
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_PANEL."&type=news&cat=felietony"; ?>">Felietony</a>
                           </div>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="<?php echo BACK_PAGE_PANEL."&type=mem"; ?>">Memy</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="<?php echo BACK_PAGE_PANEL."&type=video"; ?>">Video</a>
                       </li>
                       
                   </ul>

                    <?php
                } 
                if( current_user_can('administrator'))
                {
                    ?>
                    <ul class="navbar-nav mr-auto text-uppercase et-menu">
                       
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="<?php echo BACK_PAGE_ALL."&type=news"; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newsy</a>                 
                           <div class="dropdown-menu et-menu-dropdown" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_ALL."&type=news&cat=news"; ?>">Newsy</a>
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_ALL."&type=news&cat=artykuly"; ?>">Artykuły</a>
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_ALL."&type=news&cat=wywiady"; ?>">Wywiady</a>
                               <a class="dropdown-item" href="<?php echo BACK_PAGE_ALL."&type=news&cat=felietony"; ?>">Felietony</a>
                           </div>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="<?php echo BACK_PAGE_ALL."&type=mem"; ?>">Memy</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="<?php echo BACK_PAGE_ALL."&type=video"; ?>">Video</a>
                       </li>
                       
                   </ul>                
                   <?php } ?>
                    
                </div>
                 
                <!-- Logged in -->  
                <a class="text-uppercase et-login" href="#"><i class="far fa-user mr-3 et-login-icon"></i>Thuram98</a>
                   
                <!-- Social -->
                <div class="et-social">
				    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="far fa-envelope"></i></a>
                </div>
                    
            </nav>
        </div>
    </header>
    <!-- ####### End of Header ####### -->
                