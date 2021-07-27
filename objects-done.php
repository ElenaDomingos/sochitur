<?php
/*
* Template Name: Object Done
*/

get_header();
$upload_dir = wp_upload_dir('2021/06');
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
  <section class="getMainImg">
        <div class="fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">завершенные объекты</a></span>

            <h1 class="todayMainImg__heading">завершенные объекты</h1>
        </div>

        <div class="logoSign"></div>
    </section>

    <section class="getObjects">
        <div class="fixed-container">
            
                    
               <?php
            
            
                  $query = new WP_Query( array(
			         'post_type' => 'offers',
			         'posts_per_page' => -1,
			         'cat' => '6',
                    
 
) );    while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
            <article class="getObjects__object">
                <div class="getObjects__main flex-end-between">
                    <div class="getObjects__leftMain">
                        <h4 class="getObjects__heading"><?php echo get_the_title(); ?></h4>

                        <p class="buyOne__desc"><?php echo get_field('kolichestvo_sotok'); ?> сот.</p>
                        <?php if(get_field('drugie_parametry_obekta')): 
                            
                            $details = explode("\n", get_field('drugie_parametry_obekta') );
                            foreach($details as $detail){
                                
                            $detaildivided = explode(":", $detail);
                            ?>
                     
                        <p class="buyOne__desc"><?php echo $detaildivided[0].$detaildivided[1] ;?></p>
                    
                   <?php 
                         } endif; ?>
                    </div>

                    <p class="buyOne__price getObjects__rightMain"><b><?php echo get_field('itogovaya_stoimost'); ?></b> p</p>
                </div>

                <div class="getObjects__sliderContain flex-start-between">
                    <div class="getObjects__slider">
                        <?php if(get_field('additional_photo_1')): ?>
                        <div>
                            <figure class="buyOne__image">
                                <img src="<?php echo get_field('additional_photo_1'); ?>" class="news__img" alt="Картинка участка">                        
                            </figure>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('additional_photo_2')): ?>
                        <div>
                            <figure class="buyOne__image">
                                <img src="<?php echo get_field('additional_photo_2'); ?>" class="news__img" alt="Картинка участка">                        
                            </figure>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('additional_photo_3')): ?>
                        <div>
                            <figure class="buyOne__image">
                                <img src="<?php echo get_field('additional_photo_3'); ?>" class="news__img" alt="Картинка участка">                        
                            </figure>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('additional_photo_4')): ?>
                        <div>
                            <figure class="buyOne__image">
                                <img src="<?php echo get_field('additional_photo_4'); ?>" class="news__img" alt="Картинка участка">                        
                            </figure>
                        </div>
                        <?php endif; ?>
                      
               
                    <figure class="getObjects__map">
                         <?php if(get_field('karta')):?>
               
                    <?php echo get_field('karta'); ?>                       
                
                <? endif; ?>                      
                    </figure>                       
                </div>

                <div class="getObjects__details flex-start-between">
                    <div class="getObject__detail">
                        <h5 class="buyOne__subheading">Кадастровый номер <?php echo get_field('kadastrovyj_nomer'); ?></h5>

                        <p class="buyOne__text">Описание объекта где находится, сколько площадь, 
                            инфраструктура, степень завершенности строительства и пр.
                        </p>

                        <div class="getObjects__place flex-end-start">
                            <p class="buyOne__address"><?php echo get_field('location'); ?></p>                            

                            <p class="buyOne__date"><?php echo get_the_date(); ?></p>
                        </div>
                        <div>
                        <button class="transpBlackButton getObjects__button openPopup">хочу приобрести</button>
                          <div class="popuppriobresti"> 
                             <div id="close-popup"><i class="fas fa-times" style="color:#73b1c4"></i></div>
                           <?php  add_shortcode('CF7_MY_POST_ID', 'my_post_id');
                           echo do_shortcode('[contact-form-7 id="375" title="contact priobresti"]'); ?></div>
                          </div></div>
                    
                  
               <?php
            
            
                  $query1 = get_posts(array('post_type' => 'reviews', 'numberposts' => 1, 'meta_key' => 'offer','meta_value' => get_the_ID()));
 
if($query1):
foreach($query1 as $review) {
      
           ?>
                    <div class="getObjects__reviews">
                        <img src="<?php echo $upload_dir['url']; ?>/marks1.svg" alt="левые кавычки" class="getObjects__marks1">
                        <img src="<?php echo $upload_dir['url']; ?>/marks2.svg" alt="правые кавычки" class="getObjects__marks2">
<?php echo $review->ID; echo get_post_meta($review->ID, '_wp_attached_file', true); ?>
                        <div class="getObjects__contain flex-start-between">
                            
                            <figure class="getObjects__image">
                                
                                <img src="<?php echo get_the_post_thumbnail_url($review->ID); ?>" class="news__img" alt="отзыв1">                        
                            </figure>
                                              

                            <div class="getObjects__desc">
                                <h5 class="reviews__subheading"><?php echo $review->post_title; ?></h5>

                                <h5 class="reviews__subheading2"><?php echo $review->post_excerpt; ?></h5>

                                <p class="getObjects__text">
                                    <?php echo $review->post_content; ?>
                                </p>
                            </div>
                        </div>                          
                    </div>
                </div>
                 <?php }
                 
                 endif;
      ?>
            </article>
            
            <?php }
                wp_reset_postdata();
                ?>
           

            <a href="<?php echo get_home_url(); ?>/offers/" class="blueButton lookButton">смотреть наши строящиеся объекты</a>
        </div>
    </section>

    <section class="othersGrey">
        <div class="fixed-container">
            <h2 class="others__heading">вас также может заинтересовать</h2>

            <ul class="others__list list-reset flex-start-between">
                <li class="firstscreen__item itemBlack js-item1"><a href="<?php echo get_home_url(); ?>/kupit-prodat-zemlju/" class="firstscreen__link linkBlack">купить/продать землю</a>
                    <div class="firstscreen__curtain js-curtain1"></div>                    
                </li>
                    
                <li class="firstscreen__item itemBlack js-item2"><a href="<?php echo get_home_url(); ?>/predzakaz-na-zemlju/" class="firstscreen__link linkBlack">предзаказ на землю</a>
                    <div class="firstscreen__curtain js-curtain2"></div>
                </li>               
   
                <li class="firstscreen__item itemBlack js-item3"><a href="<?php echo get_home_url(); ?>/vasha-zemlya-pod-stroitelstvo/" class="firstscreen__link linkBlack">ваша земля под строительство</a>
                    <div class="firstscreen__curtain js-curtain3"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item4"><a href="<?php echo get_home_url(); ?>/stroitelno-dolevoe-uchastie/" class="firstscreen__link linkBlack">строительно-долевое участие</a>
                    <div class="firstscreen__curtain js-curtain4"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item5"><a href="<?php echo get_home_url(); ?>/invest" class="firstscreen__link linkBlack">инвестировать</a>
                    <div class="firstscreen__curtain js-curtain5"></div>
                </li>
            </ul>
        </div>
    </section>

<?php

get_footer();