<?php
/*
* Template Name: Contact Page
*/

get_header();
?>

 <section class="contactsMainImg">
        <div class="fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">контакты</a></span>

            <h1 class="buyMainImg__heading">контакты</h1>
        </div>

        <div class="logoSign"></div>
    </section>

    <main class="contacts">
        <div class="fixed-container">
            <div class="contacts__headings flex-start-between">
                <h2 class="weWork__heading5 contactsHeading">вы можете связаться</h2>
                <h2 class="weWork__heading4 contactsHeading">с нами</h2>
                <h2 class="weWork__heading3 contactsHeading">любым</h2>
                <h2 class="weWork__heading2 contactsHeading">удобным способом</h2> 
            </div>
            
            <div class="contacts__contain flex-start-between">
                <div class="contacts__left">
                    <p class="callWrite__text callContacts">Звоните:</p>

                    <div class="contacts__phones">
                        <p class="contacts__text">Купля-продажа земли</p>
    
                        <a class="contacts__phone" href="tel:<?php echo $newland_options['buy-and-sell']; ?>"><?php echo $newland_options['buy-and-sell']; ?></a>
                    </div>
                    
                    <div class="contacts__phones">
                        <p class="contacts__text">Инвестиции в землю</p>
    
                        <a class="contacts__phone" href="tel:<?php echo $newland_options['investiments']; ?>"><?php echo $newland_options['investiments']; ?></a>
                    </div> 
    
                    <div class="contacts__phones">
                        <p class="contacts__text">Коттеджное строительство</p>
    
                        <a class="contacts__phone" href="tel:<?php echo $newland_options['kottedg-building']; ?>"><?php echo $newland_options['kottedg-building']; ?></a>
                    </div> 
                </div>

                <div class="contacts__right">
                    <p class="callWrite__text callContacts">Пишите:</p>

                    <a class="contacts__mail" href="mailto<?php echo $newland_options['footer-email']; ?> "><?php echo $newland_options['footer-email']; ?></a>
                </div>
            </div>

            <article class="weWork__address flex-end-between">
                <div class="contacts__leftBlock">                   
                    <h2 class="contacts__subheading">наши профили</h2> 
                </div>                                

                <div class="contacts__socialIcons flex-center-between">
                    <a class="weWork__contact weWork__instagram" target="blank" href="https://www.instagram.com/"></a> 
                
                    <a class="weWork__contact weWork__telegram" target="blank" href="https://t.me/"></a>

                    <a class="weWork__contact weWork__whatsapp" target="blank" href="https://api.whatsapp.com/send?phone=7"></a>

                    <a class="weWork__contact weWork__viber" target="blank" href="#"></a>

                    <a class="weWork__contact weWork__phone" href="tel:+7"></a>                   

                    <a class="weWork__contact weWork__mail" href="mailto:info@zemlyavsochi.ru"></a>
                </div>                  
            </article>
        </div>
    </main>


<?php
get_footer();
