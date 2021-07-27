<?php

get_header();
function my_post_id(){
global $post;
$my_post_id = $post->post_title;
return $my_post_id;
}
?>
<style>
    .wpcf7 form.sent .wpcf7-response-output {
        display:inline-block !important;
        border:none;
    }
    
</style>
<section class="product" >
        <div class="fixed-container">
            
            <span class="breads"><a href="<?php echo get_home_url(); ?>" class="breadcrumbs" ></a><span>&nbsp;/&nbsp;</span><a href="<?php echo get_home_url(); ?>/nashi-predlogenia/">наши проекты</a><span>&nbsp;/&nbsp;</span><a href="<?php echo get_home_url(); ?>/offers/" >наши проекты сегодня</a><span>&nbsp;/&nbsp;</span><?php echo the_title(); ?></span>
             
<div id="divToPrint">
            <h1 class="product__heading"><?php echo the_title(); ?></h1>
            <?php if(get_field('location')): ?>
            <p class="buyOne__address productAddress"><?php echo get_field('location'); ?></p>
            <?php endif; ?>
            <div class="product__details flex-start-between" >
                <div class="product__left">
                    <figure class="product__mainImage">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="product__img" alt="Главное изображение товара">                        
                    </figure>

                    <div class="flex-start-between product__images" style="justify-content:flex-start">
                        <?php if(get_field('additional_photo_1')): ?>
                        <figure class="product__image slideshow__display">
                            <img src="<?php echo get_field('additional_photo_1'); ?>" class="product__img" alt="Изображение товара">                        
                        </figure>
                        <?php endif; ?>
                       <?php if(get_field('additional_photo_2')): ?>
                        <figure class="product__image">
                            <img src="<?php echo get_field('additional_photo_2'); ?>" class="product__img" alt="Изображение товара">                        
                        </figure>
                        <?php endif; ?>

                        <?php if(get_field('additional_photo_3')): ?>
                        <figure class="product__image">
                            <img src="<?php echo get_field('additional_photo_3'); ?>" class="product__img" alt="Изображение товара">                        
                        </figure>
                        <?php endif; ?>

                        <?php if(get_field('additional_photo_4')): ?>
                        <figure class="product__image">
                            <img src="<?php echo get_field('additional_photo_4'); ?>" class="product__img" alt="Изображение товара">                        
                        </figure>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="product__right">
                    <div class="product__icons flex-center-between">
                        <!--<a href="#" class="product__link prodLink1">    </a>-->
                        <a href="#" class="product__link prodLink2" onclick = "window.print()"> </a>
                       <div style="position:relative"> 
                        <a href="#" id="share" class="product__link prodLink3"></a>
                        <div class="share-container"><?php echo do_shortcode('[Sassy_Social_Share]'); ?></div>
                      </div>
                        
                    </div>
                    
                    <article class="product__prices">
                        <h2 class="product__heading visually-hidden">Цены на объект</h2>

                        <ul class="product__levels list-reset">
                             
                            <?php if(get_field('price')): 
                            
                            $prices = explode("\n", get_field('price') );
                            foreach($prices as $price){
                                
                            $priceadivided = explode(":", $price);
                            ?>
                            <li class="product__level">                               
                                <p class="product__desc"><?php echo $priceadivided[0]; ?></p>                                    
                                
                                <p class="product__price"><b><?php echo $priceadivided[1]; ?></b> р</p>
                            </li>
                            <?php }
                            endif; ?>
                            
                        </ul>
                        <div>
                        <button class="blueButton product__button" id="order_show">заказать показ</button>
                            <div class="popuppriobresti"> 
                                 <div id="close-popup"><i class="fas fa-times" style="color:#73B1C4"></i></div>
                               <?php  add_shortcode('CF7_MY_POST_ID', 'my_post_id');
                               echo do_shortcode('[contact-form-7 id="380" title="contact from offer page"]'); ?></div>
                               
                       </div>
                        <div>
                        <button class="greyButton product__button" id="consult_online">онлайн консультация</button>
                          <div class="popuppriobresti"> 
                                 <div id="close-popup"><i class="fas fa-times" style="color:#73B1C4" ></i></div>
                               <?php  add_shortcode('CF7_MY_POST_ID', 'my_post_id');
                               echo do_shortcode('[contact-form-7 id="381" title="contact from order consultation"]'); ?></div>
                               
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
    <div class="order_show"></div>
    <div class="consult_online"></div>

    <section class="description">
        <div class="fixed-container">
            <article class="details">
                <h2 class="visually-hidden details__heading">Характеристики объекта</h2>

                <ul class="details__list list-reset">
                    <?php if(get_field('kolichestvo_sotok')) : ?>
                            <li class="inputForm details__item flex-center-between">
                        <p class="details__left">Количество соток</p>
                        <p class="details__right"><?php echo get_field('kolichestvo_sotok');?></p>
                    </li>
                    <?php endif; ?>
                            <?php if(get_field('drugie_parametry_obekta')): 
                            
                            $details = explode("\n", get_field('drugie_parametry_obekta') );
                            foreach($details as $detail){
                                
                            $detaildivided = explode(":", $detail);
                            ?>
                    <li class="inputForm details__item flex-center-between">
                        <p class="details__left"><?php echo $detaildivided[0];?></p>
                        <p class="details__right"><?php echo $detaildivided[1];?></p>
                    </li>
                   <?php 
                         } endif; ?>
                   
                </ul>
            </article>

            <div class="description__contain flex-start-between">
                <div class="contain__left">
                    <h2 class="buyLand__heading">описание</h2>
                </div>

                <div class="contain__right">
                    <p class="buyLand__text">
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
            <?php if(get_field('karta')): ?>
            <div class="description__contain flex-start-between">
                <div class="contain__left">
                    <h2 class="buyLand__heading">на карте</h2>
                </div>

                <div class="contain__right">
              
                            <?php echo get_field('karta'); ?>   
                    
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    </div>
    <section class="otherProduct">
        <div class="fixed-container">
            <h2 class="otherProduct__heading">вас также может заинтересовать</h2>

            <ul class="otherProduct__list list-reset flex-start-start">
                      <?php
            
                  global $post;
                  $id = $post->ID;
                  $query = new WP_Query( array(
			         'post_type' => 'offers',
			         'post__not_in' => [$id],
			         'posts_per_page' => 2,
			     
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
                <li class="otherProduct__item">
                    <div class="otherProduct__block flex-center-start">
                        <figure class="otherProduct__image">
                            <img src="<?php echo  the_post_thumbnail_url('offers-thumb'); ?>" class="news__img" alt="Картинка участка">                        
                        </figure>

                        <p class="otherProduct__desc">
                            <?php echo the_title(); ?>
                        </p>
                    </div>

                    <a class="otherProduct__more" href="<?php echo get_the_permalink(); ?>">подробнее</a>
                </li>

                
                            </article>
 <?php }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>

 
<?php

get_footer();