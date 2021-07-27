<?php
/*
* Template Name: Offers
*/

get_header();


?>

  <main class="ourOffers flex-start-between">        
        <div class="ourOffers__contain fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">наши предложения сегодня</a></span>

            <div class="ourOffers__block flex-start-start">
                <div class="ourOffers__leftBlock">
                    <h1 class="ourOffers__heading">наши предложения сегодня</h1>

                    <a href="<?php echo get_home_url(); ?>/offers/" class="transpButton ourOffers__button">смотреть</a>
                </div>

                <div class="ourOffers__rightBlock">
                    <h2 class="ourOffers__heading">завершённые объекты</h2>

                    <a href="<?php echo get_home_url(); ?>/zavershennye-proekty/" class="transpButton ourOffers__button">смотреть</a>
                </div>               
            </div>
        </div>

        <div class="ourOffers__left"></div>
        <div class="ourOffers__right"></div>
    </main>

<?php

get_footer();