<?php


get_header();
 
?>

<section class="newsSimpleMainImg">
        <div class="fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" ></a><span class="color-white">&nbsp;/&nbsp;</span><a href="<?php echo get_home_url(); ?>/news/" class="breadnext">новости</a><span class="color-white">&nbsp;/&nbsp;</span><?php echo the_title(); ?></span>
            
                      <h1 class="newsSimpleMainImg__heading"><?php echo the_title(); ?></h1>
        </div>
    </section>
    
    <main class="newsSimple">
        <div class="small-container newsSimple__contain">
            <?php
            
            the_content();
            
            ?>
            
            <div class="newsSimple__icons flex-center-between">
                <div class="newsSimple__social flex-start-between">
                    <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
                </div>

                <p class="buyOne__date newsOne__date"><?php echo get_the_date(); ?></p>
                </div>            
        </div>
    </main>      
     <section class="newsOthers">
        <div class="small-container">
            <h3 class="newsOthers__heading">Читайте также:</h3>
            
              <?php
              global $post;
              $id = $post->ID;
           $news = $query = new WP_Query( array(
			         'post_type' => 'news',
			         'post__not_in' => [$id],
			         'posts_per_page' => 2,
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
            
           ?>
            
            <article class="newsOne newsSimpleBlock flex-start-between">
                <figure class="newsOne__image">
                    <img src="<?php echo the_post_thumbnail_url('offers-thumbnail'); ?>" class="news__img" alt="Картинка участка">                        
                </figure>

                <div class="newsOne__contain">
                    <div class="newsOne__subHeadContain flex-start-between">
                        <h4 class="newsOne__heding"><?php echo the_title(); ?></h4>

                        <p class="buyOne__date newsOne__date"><?php echo get_the_date(); ?></p>
                    </div>                    

                    <p class="newsOne__text"><?php the_content(); ?>   
                    </p>         

                    <a href="<?php echo get_the_permalink(); ?>" class="buyOne__link newsOne__link">читать далее</a>                        
                </div>
            </article>

             <?php
             
               
           }
                wp_reset_postdata();
                ?>

            <a href="<?php echo get_home_url(); ?>" class="newsOthers__link">Вернуться на главную</a>
        </div>
    </section>

<?php
get_footer();
