<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 
 
 
 <header class="mainHeader">
        <div class="mainHeader__contain wide-container flex-start-between">
            <a href="<?php echo get_home_url(); ?>" class="mainHeader__logo">
                <img class="logoImage" src="<?php global $newland_options; 
                if(is_front_page()){
                    echo $newland_options['home-header-logo']['url'];
                }else {
                    echo $newland_options['header-logo']['url'];
                }
                 ?>" alt="логотип компании Новая земля">
            </a>
             
            <a class="button__open js-buttonOpen">
                <span class="button__item js-buttonItem"></span>
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
            
 

            <nav class="menu">
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
 
            <address class="mainHeader__address  mainHeader__desctop">
                 <?php 
                    if($newland_options['buy-and-sell']): ?>
                <div class="mainHeader__phones">
                   
                    <p class="mainHeader__text">Купля-продажа земли</p>

                    <a class="mainHeader__phone" href="tel:<?php echo $newland_options['buy-and-sell']; ?>"><?php echo $newland_options['buy-and-sell']; ?></a>
                    
                </div>
                <?php
                    endif;
                    ?>
                <?php
                 if($newland_options['investiments']): ?>
                <div class="mainHeader__phones">
                    <p class="mainHeader__text">Инвестиции в землю</p>

                    <a class="mainHeader__phone" href="tel:<?php echo $newland_options['investiments']; ?>"><?php echo $newland_options['investiments']; ?></a>
                </div> 
                <?php endif;
                ?>
                <?php
                 if($newland_options['kottedg-building']): ?>
                <div class="mainHeader__phones">
                    <p class="mainHeader__text">Коттеджное строительство</p>

                    <a class="mainHeader__phone" href="tel:<?php echo $newland_options['kottedg-building']; ?>"><?php echo $newland_options['kottedg-building']; ?></a>
                </div> 
                 <?php endif;
                ?>
            </address>
        </div>
    </header>