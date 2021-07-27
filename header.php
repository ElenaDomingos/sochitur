<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 
 
 
  <header class="headerPages">
        <div class="headerPages__contain wide-container flex-start-between">
            <a href="<?php echo get_home_url(); ?>" class="headerPages__logo">
                <img class="logoHeaderImage" src="<?php global $newland_options; 
                if(is_front_page()){
                    echo $newland_options['home-header-logo']['url'];
                }else {
                    echo $newland_options['header-logo']['url'];
                }
                 ?>" alt="логотип компании Новая земля">
            </a>
             
            <a class="button__open openPages js-buttonOpen">
                <span class="button__item itemPages js-buttonItem"></span>
            </a>

            <nav class="menuMobile">
                <ul class="menuMobile__list list-reset js-menumobileList">
                                                                   <?php 
            $locations = get_nav_menu_locations();
            $menu_id = $locations['header-menu'];
            $menu_items = wp_get_nav_menu_items($menu_id, [
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ]);
        $http_s = 'http' . ( (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] != "off") ? 's' : '' ) . '://' ;
        $url = $http_s . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $n = 1;
       foreach ($menu_items as $item): 
         ?>
         
         <li class="menuMobile__item">
             <a class="menuMobile__link js-mobileLink" href='<?php echo $item->url; ?>' ><?php echo $item->title; ?></a>
            
         </li>
     
        <?php endforeach; ?>
                </ul>
            </nav>
            
 

           <nav class="menuPages">
                <ul class="menu__list list-reset">
                                                                                               <?php 
            $locations = get_nav_menu_locations();
            $menu_id = $locations['header-menu'];
            $menu_items = wp_get_nav_menu_items($menu_id, [
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ]);
        $http_s = 'http' . ( (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] != "off") ? 's' : '' ) . '://' ;
        $url = $http_s . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $n = 1;
       foreach ($menu_items as $item): 
         ?>
         
         <li class="menu__item">
             <a class="menu__link" href='<?php echo $item->url; ?>' ><?php echo $item->title; ?></a>
            
         </li>
     
        <?php endforeach; ?>  
                </ul>
            </nav>
 
            <address class="mainHeader__address phoneForHeader">
                 <?php 
                    if($newland_options['buy-and-sell']): ?>
                <div class="mainHeader__phones">                  
                    

                    <a class="menuPages__phone" href="tel:<?php echo $newland_options['buy-and-sell']; ?>"><?php echo $newland_options['buy-and-sell']; ?></a>
                    
                </div>
                <?php
                    endif;
                    ?>
                
            </address>
        </div>
    </header>