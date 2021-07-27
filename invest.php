<?php
/*
* Template Name: Инвестировать
*/

get_header();

global $newland_options;
?>

  <section class="investMainImg">
        <div class="fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">инвестировать</a></span>

            <h1 class="buyMainImg__heading">инвестировать</h1>
        </div>

        <div class="logoSign"></div>
    </section>

    <section class="invest">
        <div class="fixed-container">
            <div class="invest__contain">
                <p class="invest__text">
                    Инвестиции-самое популярное слово, возможность вложения заработанных денег 
                    под максимально высокий процент с наименьшими рисками.
                </p>

                <p class="invest__text">
                    Наши инвестиционные предложения закрепляются землёй в городе Сочи, которая 
                    дорожает всегда, плюс к этому проектное пошаговое строительство, инвестиции 
                    на короткие сроки, от четырёх до шести месяцев. Это время строительства 
                    частных домов и коттеджей. 
                </p>

                <p class="invest__text">
                    Прописывание этапов строительства и установка веб камер на каждый 
                    инвестированный объект, для вашего спокойствия и уверенности продвижение 
                    этапов строительства.
                </p>
                <?php if($newland_options['investiments']): ?>
                <p class="invest__text">
                    Более точную информацию об объектах на сегодняшний день можно получить 
                    заказов обратный звонок или по телефону <a class="invest__phone" href="tel:<?php echo $newland_options['investiments']; ?>"><?php echo $newland_options['investiments']; ?></a>
                </p>
                <?php endif; ?>
            </div>

            <article class="weWork__address flex-stretch-between">
                <div class="weWork__headers">
                    <h5 class="weWork__heading5">свяжитесь</h5>
                    <h4 class="weWork__heading4">с нами</h4>
                    <h3 class="weWork__heading3">как вам</h3>
                    <h2 class="weWork__heading2">удобно</h2> 
                </div>

                <div class="weWork__social">
                    <address class="callWrite callInvest flex-start-between">
                        <span class="callWrite__left">
                            <p class="callWrite__text">Звоните:</p>
                         
                            <a class="callWrite__phones" href="tel:<?php echo $newland_options['investiments']; ?>"><?php echo $newland_options['investiments']; ?></a>
                        </span>
        
                        <span class="callWrite__right">
                            <p class="callWrite__text">Пишите:</p>                   
        
                            <a class="callWrite__phones" href="mailto:info@zemlyavsochi.ru"><?php echo $newland_options['footer-email']; ?></a>
                        </span>
                    </address>

                    <div class="weWork__socialIcons flex-center-between">
                        <a class="weWork__contact weWork__instagram" target="blank" href="https://www.instagram.com/"></a> 
                    
                        <a class="weWork__contact weWork__telegram" target="blank" href="https://t.me/"></a>
    
                        <a class="weWork__contact weWork__whatsapp" target="blank" href="https://api.whatsapp.com/send?phone=7"></a>
    
                        <a class="weWork__contact weWork__viber" target="blank" href="#"></a>
    
                        <a class="weWork__contact weWork__phone" href="tel:+7"></a>                   
    
                        <a class="weWork__contact weWork__mail" href="mailto:info@zemlyavsochi.ru"></a>
                    </div>                    
                </div>                               
            </article>
        </div>
    </section>

    <section class="sailLand">
        <div class="fixed-container">
            <div class="sailLand__action flex-start-between">
                <div class="sailLand__formContain" style="position:relative">
                    <h3 class="sailLand__heading">Отправить заявку на продажу земельного участка</h3>
                    
                    <?php
                    echo do_shortcode('[contact-form-7 id="113" title="Sell land" html_class="sailLand__form"]');
                   require_once get_template_directory() .'/successmessage.php';
                    ?>

                  
                   <div class="note1"></div>
                </div>

                
                 <button class="sailLand__submit" id="callback">заказать обратный звонок
                </button>
                 <div class="popup_callMeplease">
                      <?php echo do_shortcode('[contact-form-7 id="349" title="contact popup"]'); ?>  
                 </div>
                 <div class="popup_message">
                     <div id="close-popup"><i class="fas fa-times"></i></div>
                     <p>Ваша заявка получена!</p>
                     <p>Ждите нашего звонка</p>
                 </div>   
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
                    
                <li class="firstscreen__item itemBlack js-item2"><a href="<?php echo get_home_url(); ?>/predzakaz-na-zemlju/" class="firstscreen__link linkBlack">предзаказ на землю</a>
                    <div class="firstscreen__curtain js-curtain2"></div>
                </li>               
   
                <li class="firstscreen__item itemBlack js-item3"><a href="<?php echo get_home_url(); ?>/vasha-zemlya-pod-stroitelstvo/" class="firstscreen__link linkBlack">ваша земля под строительство</a>
                    <div class="firstscreen__curtain js-curtain3"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item4"><a href="<?php echo get_home_url(); ?>/stroitelno-dolevoe-uchastie/" class="firstscreen__link linkBlack">строительно-долевое участие</a>
                    <div class="firstscreen__curtain js-curtain4"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item5"><a href="<?php echo get_home_url(); ?>/kupit-prodat-zemlju/" class="firstscreen__link linkBlack">купить / продать землю</a>
                    <div class="firstscreen__curtain js-curtain5"></div>
                </li>
            </ul>
        </div>
    </section>

<?php

 
get_footer();