<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newland
 */
 
 global $newland_options;

?>
 <footer class="footer">
        <div class=" fixed-container">
            <div class="footer__contain flex-start-between">
                <a href="<?php echo get_home_url();?>" class="footer__logo">
                    <img class="logoImage" src="<?php  echo $newland_options['footer-logo']['url']; ?>" alt="логотип компании Новая земля">
                </a>        

                <nav class="footer__menu">
                    <ul class="footer__list list-reset">                        
                                        <?php 
            $locations = get_nav_menu_locations();
            $menu_id = $locations['footer-menu-1'];
            $menu_items = wp_get_nav_menu_items($menu_id, [
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ]);
        $http_s = 'http' . ( (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] != "off") ? 's' : '' ) . '://' ;
        $url = $http_s . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $n = 1;
       foreach ($menu_items as $item): 
         ?>
         
         <li class="footer__item">
             <a class="footerMenu__link" href='<?php echo $item->url; ?>' ><?php echo $item->title; ?></a>
            
         </li>
     
        <?php endforeach; ?>   
                    </ul>
                </nav>
                


                <ul class="footer__list2 list-reset">
                                                     <?php 
            $locations = get_nav_menu_locations();
            $menu_id = $locations['footer-menu-2'];
            $menu_items = wp_get_nav_menu_items($menu_id, [
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ]);
        $http_s = 'http' . ( (isset($_SERVER['HTTPS']) && $_SERVER['HTTP'] != "off") ? 's' : '' ) . '://' ;
        $url = $http_s . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $n = 1;
       foreach ($menu_items as $item): 
         ?>
         
         <li class="footer__item">
             <a class="footerMenu__link" href='<?php echo $item->url; ?>' ><?php echo $item->title; ?></a>
            
         </li>
     
        <?php endforeach; ?>          
                </ul>

                 <address class="mainHeader__address mainFooter">
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

                    <a class="mainHeader__phone" href="tel:<?php echo $newland_options['kottedg-building']; ?>" ><?php echo $newland_options['kottedg-building']; ?></a>
                </div> 
                 <?php endif;
                ?>
                <?php
                if($newland_options['footer-email']): ?>
                <a class="footer__mail" href="mailto:<?php echo $newland_options['footer-email']; ?> "><?php echo $newland_options['footer-email']; ?></a>
                <?php endif; ?>
            </address>
     
            </div>

            <div class="copyright flex-start-start">
                <p class="copyright__allrights">
                    <?php echo $newland_options['copyright-text']; ?>
                </p>

                <a href="<?php echo get_home_url();?>/privacy-policy/" class="copyright__link">Политика конфиденциальности</a>
            </div>
        </div>        
    </footer>
    <a href="#" class="to-top"></a>
    
    <script>
    
document.addEventListener( 'wpcf7mailsent', function( event ) {
    
   if ( '349' == event.detail.contactFormId ) {
       
       $('.popup_message').css('display', 'block');
       
     
  }else {
       $('.ppsc').css('display', 'block');
 $('.sailLand__formContain').addClass('back');
 $('.preOrder__formContain').addClass('back');
  }

// $('.part__formCont').addClass('back');
 
}, false );

jQuery('.popup-close-btn').on('click', function() {
    
  jQuery('.ppsc').css('display', 'none');
  jQuery('.sailLand__formContain').removeClass('back');
  jQuery('.preOrder__formContain').removeClass('back');
  jQuery('.part__formCont').removeClass('back');
});

jQuery('#columns').on('click', function() {
jQuery('.buyOne').addClass('columns');  
jQuery('#list').css('background', '#C1C8CC');
jQuery('#columns').css('background', '#73B1C4');
});

jQuery('#list').on('click', function() {
jQuery('.buyOne').removeClass('columns'); 
jQuery('#list').css('background', '#73B1C4');
jQuery('#columns').css('background', '#C1C8CC');

 
});

jQuery('#callback').on('click', function() {
     jQuery('.popup_callMeplease').css('display', 'block');
     
});

jQuery('.openPopup').on('click', function() {
     $(this).siblings().css('display', 'block');
});
jQuery('#order_show').on('click', function() {
     $(this).siblings().css('display', 'block');
});
jQuery('#consult_online').on('click', function() {
     $(this).siblings().css('display', 'block');
});

 jQuery('.product__image').on('click', function() {
    var $this = $(this),
    i_path = $this.children('img').attr('src');
     
    jQuery('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'" ><div id="close-popup"><i class="fas fa-times"></i></div></div>');
    jQuery('#magnify').css({
	    left: (jQuery(document).width() - jQuery('#magnify').outerWidth())/2,
	    top: (jQuery(window).height() - jQuery('#magnify').outerHeight())/2
	  });
    jQuery('#overlay, #magnify').fadeIn('fast'); 
  });
  
  jQuery('body').on('click', '#close-popup, #magnify', function(event) {
    event.preventDefault();
 
    jQuery('#overlay, #magnify').fadeOut('fast', function() {
      jQuery('#close-popup, #magnify, #overlay').remove();
    });
    jQuery('.popup_message').css('display', 'none');
    jQuery('.popuppriobresti').css('display', 'none');
    jQuery('.popup_callMeplease').fadeOut(600);
    
  });

 jQuery('#share').on('click', function() {
    jQuery('.share-container').slideToggle();
 });


    </script>
</body>
</html>

<?php wp_footer(); ?>

</body>
</html>
