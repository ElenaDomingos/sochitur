<?php

get_header();

?>

  <section class="newsMainImg">
        <div class="fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">новости</a></span>

            <h1 class="buyMainImg__heading">наши новости</h1>
        </div>
    </section>

    <section class="actually">
        <div class="fixed-container">
            <h2 class="actually__heading">актуальные видео</h2>
                
            <div class="actually__videos flex-start-between">
                <video class="actually__video" controls="controls" poster="img/amnons1_preview.jpg">
                    <source src="img/anons1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
            </div>
            
            <div class="actually__contain flex-end-between">
                <div class="actually__left">
                    <h2 class="actually__subHeading">Подписывайтесь на наш инстаграм</h2>
                </div>

                <div class="actually__right">
                    <a href="https://instagram.com/zemlya.novaya?utm_medium=copy_link" target="_blank" class="actually__inst">zemlya.novaya</a>
                </div>
            </div>
        </div>
    </section>

    <main class="pageNews">
        <div class="fixed-container">
            <p class="news__text">
                Вашему вниманию самые свежие новости земельного рынка в Сочи, 
                чтобы вы всегда оставались в курсе самых последних событий текущего времени.
                Не забудьте подписать на на наш инстраграм! Там много важных и полезных новостей!
            </p>
            
        <?php
           $news = $query = new WP_Query( array(
			         'post_type' => 'post',
			         'posts_per_page' => -1,
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
           
           
            
            <article class="newsOne flex-start-between">
                <figure class="newsOne__image">
                    <img src="<?php echo get_the_post_thumbnail('offers-thumbnail'); ?>" class="news__img" alt="Картинка участка">                        
                </figure>

                <div class="newsOne__contain">
                    <div class="newsOne__subHeadContain flex-start-between">
                        <h4 class="newsOne__heding"><?php echo get_the_title(); ?></h4>

                        <p class="buyOne__date newsOne__date"><?php echo get_the_date(); ?></p>
                    </div>                    

                    <p class="newsOne__text"><?php echo get_the_excerpt(); ?>   
                    </p>         

                    <a href="<?php echo get_the_permalink(); ?>" class="buyOne__link newsOne__link">читать далее</a>                        
                </div>
            </article>
  <?php }
                wp_reset_postdata();
                ?>

        </div>
    </main>



<?php
get_footer();