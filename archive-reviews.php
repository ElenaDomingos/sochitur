<?php

get_header();
$upload_dir = wp_upload_dir('2021/06');
?>

    <main class="reviewsPage">
        <div class="fixed-container">
            <span class="breads"><a href="<?php echo get_home_url(); ?>" class="breadcrumbs" style="display:inline-block"></a>&nbsp;/&nbsp;<a href="#">отзывы</a></span>

            <div class="reviewsPage__contain flex-start-between">
                <div class="contain__left">
                    <h2 class="buyLand__heading">отзывы наших клиентов</h2>
                </div>

                <div class="contain__right">
                    <p class="buyLand__text">
                        Отзывы наших благодарных клиентов гораздо лучше расскажут вам о нашей работе, 
                        отношении к любимому делу и к нашим клиентам. Сегодня вы можете присоединиться 
                        к тем, кто уже по достоинству оценил сотрудничество с нами.
                    </p>
                </div>
            </div>
            <?php
            
            
                   $news = $query = new WP_Query( array(
			         'post_type' => 'reviews',
			         'posts_per_page' => -1,
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
            
              <article class="reviewsPage__reviews">
                <img src="<?php echo $upload_dir['url']; ?>/marks1.svg" alt="левые кавычки" class="reviewsPage__marks1">
                <img src="<?php echo $upload_dir['url']; ?>/marks2.svg" alt="правые кавычки" class="reviewsPage__marks2">

                <div class="getObjects__contain flex-start-between">
                    <figure class="reviewsPage__image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="news__img" alt="отзыв1">                        
                    </figure>

                    <div class="reviewsPage__desc">
                        <h5 class="reviews__subheading"><?php echo get_the_title(); ?></h5>

                        <h5 class="reviews__subheading2"><?php echo get_the_excerpt(); ?></h5>

                        <p class="reviewsPage__text">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>                          
            </article>
 <?php }
                wp_reset_postdata();
                ?>
         
        </div>
    </main>

  <section class="othersSix">
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

                <li class="firstscreen__item itemBlack js-item6"><a href="<?php echo get_home_url(); ?>/nashi-predlogenia" class="firstscreen__link linkBlack">наши предложения сегодня</a>
                    <div class="firstscreen__curtain js-curtain6"></div>
                    <p class="firstscreen__date"><?php echo date('d.m.y'); ?></p>
                </li>
            </ul>
        </div>
    </section>

<?php

get_footer();