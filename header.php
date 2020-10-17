<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;500;700&display=swap" rel="stylesheet">
     <title>CRM</title>
     <?php wp_head(); ?>
</head>

<body>

     <header class="header" id="header">
          <div class="header__check">
               <input type="checkbox" class="checkbox" id="checkbox" name="check-toggle">
               <label for="checkbox" class="checkbox__toggle flex"></label>
          </div>
          <h1 class="heading-primary">EZ Tracking</h1>

          <nav class="nav u-margin-bottom-big container" id="nav-menu">
               <?php wp_nav_menu(
                    array(
                         'theme_location' => 'main_nav',
                         'container' => 'ul',
                         'menu_class' => 'nav__menu container-big flex'
                    )
               ); ?>
          </nav>
          <div class="header__box">
               <h2 class="heading-secondary">L'expérience client améliorée!</h2>
               <div class="header__button"><a href="<?php the_permalink(19); ?>">Essayez notre démo</a></div>
          </div>
     </header>