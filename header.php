<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?> >
    
<header>
    <div class="wrapper">
        
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main_menu',
                    'container' => false,
                )
            );
            ?>
        </nav>
    </div>
</header>
