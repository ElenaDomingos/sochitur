<?php
/*
* Template Name: Participation
*/

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
  <section class="getMainImg">
        <div class="fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">строительно-долевое участие</a></span>

            <h1 class="buyMainImg__heading">строительно-долевое участие</h1>
        </div>

        <div class="logoSign"></div>
    </section>

    <section class="participation__texts">
        <div class="fixed-container">
            <div class="participation__contain">
                <p class="invest__text">
                    Долевое участие - это вложение денег на разных этапах строительства, 
                    соответственно первые этапы после проектирования дают наибольшую прибыль, 
                    которая измеряется либо в деньгах, либо м2 в строящихся домах и коттеджах.
                </p>

                <p class="invest__text">
                    Все объекты для долевого участия и соответствующая документация находятся у нас 
                    на сайте <a class="part__link" href="page-offers-today.html">в разделе «предложение сегодня».</a> 
                    На этой странице вы сможете конкретно изучить каждый объект, задать вопрос, получить ответы, и уточнить наличие мест 
                    для долевого участия на данном объекте.
                </p>

                <p class="invest__text">
                    Привлекательность долевого участия заключается в том, что можно приобрести свой красивый 
                    современный дом с землёй по самым низким ценам за квадратный метр в городе Сочи, при 
                    этом не испытывая рисков вложения денег в многоэтажные дома и чужую землю.
                </p>

                <p class="invest__text">
                    Приобрети дом своей мечты в Сочи на лучших условиях!
                </p>
            </div>

            <address class="participation__address flex-start-between">        
                <span class="callWrite__left">
                    <p class="callWrite__text">Звоните:</p>
    
                    <a class="callWrite__phones" href="tel:tel:<?php echo $newland_options['investiments']; ?>"><?php echo $newland_options['investiments']; ?></a>
                </span>
    
                <span class="callWrite__right">
                    <p class="callWrite__text">Пишите:</p>                   
    
                    <a class="callWrite__phones" href="mailto:<?php echo $newland_options['footer-email']; ?> "><?php echo $newland_options['footer-email']; ?></a>
                </span>           
            </address>
        </div>
    </section>   

    <section class="participation">
        <div class="fixed-container">
            <h2 class="participation__heading">наши предложения</h2>
            <?php
            
              
                  $query = new WP_Query( array(
			         'post_type' => 'offers',
			         'posts_per_page' => -1,
			         'cat' => '[7,8]',
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
             
            
            ?>
            <article class="participation__object">
                <div class="getObjects__main flex-end-between">
                    <div class="getObjects__leftMain">
                        <h4 class="getObjects__heading"><?php echo get_the_title(); ?></h4>

                        <p class="buyOne__desc"><?php the_content(); ?></p>                        
                    </div>

                    <p class="buyOne__price getObjects__rightMain"><b><?php echo get_field('itogovaya_stoimost'); ?></b> p</p>
                </div>

                <div class="getObjects__sliderContain flex-start-between">
                    <div class="getObjects__slider">
                        <div>
                            <figure class="buyOne__image">
                                <img src="<?php echo  the_post_thumbnail_url('offers-thumb'); ?>" class="news__img" alt="Картинка участка">                        
                            </figure>
                        </div>
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
                    </div>
                    <?php endif; ?>
                    
                    
                    <figure class="getObjects__map">
                         <?php if(get_field('karta')):?>
               
                    <?php echo get_field('karta'); ?>                       
                
                <? endif; ?>                      
                    </figure>                    
                </div>

                <div class="participation__details flex-start-between">
                    <div class="participation__detail"> 
                        <p class="buyOne__text"><?php the_content(); ?>
                        </p>

                        <div class="getObjects__place flex-end-start">
                            <p class="buyOne__address"><?php echo get_field('location'); ?></p>                            

                            <p class="buyOne__date"><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                    
                    <?php  add_shortcode('CF7_MY_POST_ID', 'my_post_id'); ?>

                    <div class="part__formCont" style="position:relative" >
                        <? echo do_shortcode('[contact-form-7 id="236" title="contact object" html_class="part__form"]'); 
                    
                       //  get_template_part('successmessage');
                    
                    ?>

                        <div class="note1"></div>
                    </div>
                </div>
            </article>
<?php }
                wp_reset_postdata();
                ?>
          
        </div>
    </section>    

    <section class="othersGrey">
        <div class="fixed-container">
            <h2 class="others__heading">вас также может заинтересовать</h2>

            <ul class="others__list list-reset flex-start-between">
                <li class="firstscreen__item itemBlack js-item1"><a href="<?php echo get_home_url(); ?>/kupit-prodat-zemlju/" class="firstscreen__link linkBlack">купить/продать землю</a>
                    <div class="firstscreen__curtain js-curtain1"></div>                    
                </li>
                    
                <li class="firstscreen__item itemBlack js-item2"><a href="<?php echo get_home_url(); ?>/vasha-zemlya-pod-stroitelstvo/" class="firstscreen__link linkBlack">предзаказ на землю</a>
                    <div class="firstscreen__curtain js-curtain2"></div>
                </li>               
    
                <li class="firstscreen__item itemBlack js-item3"><a href="<?php echo get_home_url(); ?>/vasha-zemlya-pod-stroitelstvo/" class="firstscreen__link linkBlack">ваша земля под строительство</a>
                    <div class="firstscreen__curtain js-curtain3"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item4"><a href="<?php echo get_home_url(); ?>/stroitelno-dolevoe-uchastie/" class="firstscreen__link linkBlack">купить / продать землю</a>
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
