<?php
/*
* Template Name: Pre Order
*/

get_header();

?>

  <section class="preMainImg">
        <div class="fixed-container">
            <a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">предзаказ на землю</a>

            <h1 class="buyMainImg__heading">предзаказ на землю</h1>
        </div>

        <div class="logoSign"></div>
    </section>

    <section class="icons">
        <div class="fixed-container">
            <ul class="icons__list flex-start-between">
                <li class="icons__item icon1">
                    <p class="icons__text">Вы заполняете заявку,указав необходимые параметры</p>
                </li>

                <li class="icons__item icon2">
                    <p class="icons__text">Мы составляем подборку лучших вариантов по
                         земельным участкам для вас
                    </p>
                </li>

                <li class="icons__item icon3">
                    <p class="icons__text">Демонстрируем вам самые подходящие варианты</p>
                </li>
            </ul>
        </div>
    </section>
    <? if(get_field('approximate_price')) : 
    
    $includes = explode("\n", get_field( "approximate_price" ));
    
    ?>
    <section class="priceLand">
        <div class="fixed-container">
            <h2 class="priceLand__heading">ПРИМЕРНЫЕ ЦЕНЫ ЗА СОТКУ ЗЕМЛИ В СОЧИ ПО МИКРОРАЙОНАМ</h2>
  
            <table class="priceLand__table">
                <?php foreach($includes as $localandprice) { 
                $arr = explode(":", $localandprice);
                ?>
                <tr class="priceLand__row">
                    <td class="priceLand__coll collLeft"><?php echo $arr[0]; ?>
                        <div class="blueLine"></div>
                    </td>                    
                    <td class="priceLand__coll collRight"><?php echo $arr[1]; ?>
                        <div class="blueLine"></div>
                    </td>
                </tr>
             <?php } ?>
              
            </table>
        </div>
    </section>
    <? endif; ?>
    <section class="sailLand">
        <div class="fixed-container">
            <div class="sailLand__contain flex-start-between">
                <div class="contain__left">
                    <h2 class="buyLand__heading">КАК СДЕЛАТЬ ПРЕДЗАКАЗ</h2>
                </div>

                <div class="contain__right">
                    <p class="about__text">
                        Мы подберем для вас землю в городе Сочи. Совершенно бесплатно!
                    </p>

                    <p class="about__text">
                        Чтобы сделать предзаказ, нужно зайти на карту цен по районам города, решить в каком районе и сколько земли вам нужно. При этом обязательно указать назначение земли.
                        Если делаете предзаказ в письменной форме, обязательно оставить номер телефона WhatsApp Viber Telegram для обратной связи.
                        Позвоните и озвучьте свои пожелания лично руководителю компании.
                    </p>                    
                </div>
            </div>
            
            <div class="preOrder__formContain" style="position:relative">
                <h3 class="sailLand__heading">Отправить заявку на земельный участок</h3>

                 <?php
                    echo do_shortcode('[contact-form-7 contact-form-7 id="220" title="Contact us" html_class="sailLand__form"]');
                    
                    require_once get_template_directory() .'/successmessage.php';
                    ?>
 
                <div class="note2"></div>
            </div>
        </div>
    </section>

    <section class="others">
        <div class="fixed-container">
            <h2 class="others__heading">вас также может заинтересовать</h2>

            <ul class="others__list list-reset flex-start-between">
                <li class="firstscreen__item itemBlack js-item1"><a href="<?php echo get_home_url(); ?>/nashi-predlogenia" class="firstscreen__link linkBlack">наши предложения сегодня</a>
                    <div class="firstscreen__curtain js-curtain1"></div>
                    <p class="firstscreen__date"><?php echo date('d.m.y'); ?></p>
                </li>
                    
                <li class="firstscreen__item itemBlack js-item2"><a href="<?php echo get_home_url(); ?>/kupit-prodat-zemlju/" class="firstscreen__link linkBlack">купить / продать землю</a>
                    <div class="firstscreen__curtain js-curtain2"></div>
                </li>               
   
                <li class="firstscreen__item itemBlack js-item3"><a href="<?php echo get_home_url(); ?>/vasha-zemlya-pod-stroitelstvo" class="firstscreen__link linkBlack">ваша земля под строительство</a>
                    <div class="firstscreen__curtain js-curtain3"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item4"><a href="<?php echo get_home_url(); ?>/stroitelno-dolevoe-uchastie/" class="firstscreen__link linkBlack">строительно-долевое участие</a>
                    <div class="firstscreen__curtain js-curtain4"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item5"><a href="<?php echo get_home_url(); ?>/invest/" class="firstscreen__link linkBlack">инвестировать</a>
                    <div class="firstscreen__curtain js-curtain5"></div>
                </li>
            </ul>
        </div>
    </section>


<?php

get_footer();