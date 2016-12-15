<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<!-- DELETE THIS! -->
<div style="background-color: green; width:100%; height: 30px;" xmlns="http://www.w3.org/1999/html"></div>

<div id="page-wrapper">

    <header class="uk-headerbar">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="tm-logo uk-width-2-10 uk-width-small-1-5 uk-width-medium-1-5 uk-width-large-1-5
                uk-width-xlarge-1-5">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                </div>
                <div class="uk-width-7-10 uk-hidden-small uk-width-medium-6-10 uk-width-large-7-10
                uk-width-xlarge-7-10 uk-flex uk-flex-middle">
                    <div class="uk-width-1-1">
                        <ul class="uk-headerbar-menu uk-flex uk-flex-space-around uk-list uk-margin-remove uk-text-uppercase uk-text-bold">
                            <li><a href="#">Примеры работ</a></li>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Статьи</a></li>
                            <li><a href="#">Услуги</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-10 uk-width-small-2-10 uk-width-medium-2-10 uk-width-large-1-10
                uk-width-xlarge-1-10 uk-flex uk-flex-middle">
                    <div class="uk-width-1-1">
                        <ul class="uk-headerbar-langs uk-flex uk-flex-right uk-list uk-margin-remove uk-text-uppercase uk-text-bold">
                            <li><a href="#">rus</a></li>
                            <li><a href="#">eng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="uk-slider-position">
        <div class="uk-position-relative" data-uk-slideshow="{autoplay: true, autoplayInterval: 6000, animation: 'random-fx', kenburns: '30s', pauseOnHover: false}">
            <ul class="uk-slideshow">
                <li class="uk-active">
                    <img src="/sites/all/themes/powerlab/images/slide001.jpg" alt=""/>
                    <div class="uk-slide-caption uk-position-absolute">
                        <div class="uk-container uk-container-center uk-text-center">
                            <a class="uk-button" href="#">Узнать подробнее</a>
                        </div>
                    </div>
                </li>
                <li class="uk-active">
                    <img src="/sites/all/themes/powerlab/images/slide002.jpg" alt=""/>
                    <div class="uk-slide-caption uk-position-absolute">
                        <div class="uk-container uk-container-center uk-text-center">
                            <a class="uk-button" href="#">Узнать подробнее</a>
                        </div>
                    </div>
                </li>
                <li class="uk-active">
                    <img src="/sites/all/themes/powerlab/images/slide003.jpg" alt=""/>
                    <div class="uk-slide-caption uk-position-absolute">
                        <div class="uk-container uk-container-center uk-text-center">
                            <a class="uk-button" href="#">Узнать подробнее</a>
                        </div>
                    </div>
                </li>
                <li class="uk-active">
                    <img src="/sites/all/themes/powerlab/images/slide002.jpg" alt=""/>
                    <div class="uk-slide-caption uk-position-absolute">
                        <div class="uk-container uk-container-center uk-text-center">
                            <a class="uk-button" href="#">Узнать подробнее</a>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="uk-dotnav uk-dotnav-contrast uk-position-absolute">
                <li data-uk-slideshow-item="0"><a href="#"></a></li>
                <li data-uk-slideshow-item="1"><a href="#"></a></li>
                <li data-uk-slideshow-item="2"><a href="#"></a></li>
                <li data-uk-slideshow-item="3"><a href="#"></a></li>
            </ul>
        </div>
    </div>

    <div class="uk-exemples_block uk-position-relative">
        <div class="uk-exemples_block-before uk-position-absolute">
            <img src="/sites/all/themes/powerlab/images/clouds-top.png" alt=""/>
        </div>

        <div class="uk-exemples_block-clouds">
            <img src="/sites/all/themes/powerlab/images/clouds-main.png" alt=""/>
        </div>

        <div class="uk-exemples_block-slider uk-cover">

            <div class="uk-exemples_block-slider-tachometer uk-position-absolute">
                <img src="/sites/all/themes/powerlab/images/tachometer.png" alt=""/>
                <div class="uk-exemples_block-slider-tachometer-marker uk-position-absolute">
                    
                </div>
            </div>

            <div class="uk-exemples_block-slider-car uk-position-absolute">
                <img src="/sites/all/themes/powerlab/images/car-exemple001.png" alt=""/>

            </div>

            <div class="uk-position-top-left uk-position-bottom-right">
                <div class="uk-container uk-container-center">
                    <div class="uk-flex uk-flex-right">
                        <div class="uk-exemples_block-slider-content uk-width-1-2">
                            <div class="uk-exemples_block-slider-content-ttl uk-h1 uk-text-contrast uk-text-uppercase uk-text-extrabold">Примеры наших работ</div>
                            <div class="uk-margin-top">
                                <a class="uk-exemples_block-slider-content-subttl uk-h2 uk-text-bold uk-text-uppercase">Чип-тюнинг bmw m5</a>
                            </div>
                            <div class="uk-exemples_block-slider-content-txt uk-margin-top uk-text-translucent">
                                <p>Чип-тюнинг — настройка режимов работы электронных контроллеров путём коррекции внутренних управляющих программ (firmware).</p>
                                <p>В основном понятие применяется для обозначения коррекции программы блока управления двигателем автомобиля с целью увеличения мощности. Кроме указанного к чип-тюнингу иногда относят и применение дополнительных электронных модулей для решения схожих задач.</p>
                            </div>
                            <div class="uk-flex uk-flex-space-between uk-margin-large-top">
                                <a href="#" class="uk-exemples_block-slider-content-prev uk-button uk-button-medium uk-button-contrast uk-position-z-index">Чип-тюнинг</a>
                                <a href="#" class="uk-exemples_block-slider-content-next uk-button uk-button-medium uk-button-contrast uk-position-z-index">ADBlue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-exemples_block-after uk-position-absolute">
            <img src="/sites/all/themes/powerlab/images/blue-big-triangle.png" alt=""/>
        </div>
    </div>
    <div class="uk-about_block uk-text-contrast uk-position-relative">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-collapse">
                <div class="uk-width-1-3">
                    <div class="uk-about_block-one">

                        <div class="uk-about_block-title uk-h1 uk-text-extrabold uk-text-uppercase uk-text-contrast uk-margin-bottom">
                            О компании
                        </div>

                        <div class="uk-h2 uk-about_block-desc uk-text-translucent uk-text-light">
                            Мы – лаборатория профессионального чип-тюнинга "PowerLab" – специализируемся на удаленном изменении.
                        </div>

                    </div>
                </div>

                <div class="uk-width-1-3">

                    <div class="uk-about_block-two">
                        <div class="uk-about_block-advantage uk-about_block-advantage-a uk-position-relative uk-margin-large-top">
                            <div class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-bottom">
                                ШИРОКИЙ СПЕКТР УСЛУГ
                            </div>
                            <div class="uk-h4 uk-text-translucent">
                                Сотрудничая с нами вы сможете предложить своим клиентам чип-тюнинг дизельных авто, а также решение проблем с FAP, DPF, EGR, Lambda, Flaps. Также мы можем выборочно удалять ошибки практически со всех блоков.
                            </div>
                        </div>

                        <div class="uk-about_block-advantage uk-about_block-advantage-b uk-position-relative uk-margin-large-top">
                            <div class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-bottom">
                                100% ГАРАНТИЯ БЕЗОПАСНОСТИ НАШИХ ПРОШИВОК
                            </div>
                            <div class="uk-h4 uk-text-translucent">
                                Наши специалисты индивидуально разрабатывают каждую прошивку с учетом спецификации узлов и агрегатов конкретного автомобиля. В рассчет берутся характеристики турбины, производительности форсунок, трансмиссии, топливоподача пересчитывается с точки зрения углов опережения впрыска, состава смеси.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="uk-width-1-3 uk-flex uk-flex-bottom">

                    <div class="uk-about_block-three">

                        <div class="uk-about_block-advantage uk-about_block-advantage-c uk-position-relative uk-margin-large-top uk-width-1-1">
                            <div class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-bottom">
                                ОПЛАТА ТОЛЬКО ЗА БЛАГОДАРНЫХ КЛИЕНТОВ
                            </div>
                            <div class="uk-h4 uk-text-translucent">
                                Вы платите нам только после того, как ваш клиент сказал вам "Спасибо" за чип-тюнинг его автомобиля
                            </div>
                        </div>

                        <div class="uk-about_block-advantage uk-about_block-advantage-d uk-position-relative uk-margin-large-top uk-width-1-1">
                            <div class="uk-h3 uk-text-uppercase uk-text-bold uk-margin-bottom">
                                БОЛЕЕ 50 СЕРВИСОВ УЖЕ ВЫБРАЛИ НАС!
                            </div>
                            <div class="uk-h4 uk-text-translucent">
                                Автосервисы в России, странах СНГ и Европе уже успешно ставят наши прошивки и зарабатывают вместе с нами. Кроме того всех клиентов, которые приходят к нам, мы отправляем на автосервисы-партнеры
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="uk-about_block-clouds-bottom uk-position-bottom-left uk-position-z-index">
            <img src="/sites/all/themes/powerlab/images/about-clouds-bottom.png" alt=""/>
        </div>

        <div class="uk-about_block-car-left uk-position-absolute">
            <img src="/sites/all/themes/powerlab/images/about-car-left.png" alt=""/>
        </div>

        <div class="uk-exemples_block-clouds-right uk-position-absolute uk-position-z-index">
            <img src="/sites/all/themes/powerlab/images/about-clouds-right.png" alt=""/>
        </div>

        <div class="uk-about_block-car-right uk-position-absolute">
            <img src="/sites/all/themes/powerlab/images/about-car-right.png" alt=""/>
        </div>

    </div>

    <footer class="uk-footer uk-position-relative">
        
        <div class="uk-footer-bg_top uk-position-absolute uk-position-z-index"><img src="/sites/all/themes/powerlab/images/footer-map-bg-top.png" alt=""/></div>

        <div class="uk-footer-bg uk-position-top-left uk-position-bottom-right"><img src="/sites/all/themes/powerlab/images/footer-map-bg.jpg" alt=""/></div>

        <div class="uk-container uk-container-center uk-position-relative uk-position-z-index">

            <div class="uk-footer-contacts-title uk-h1 uk-text-contrast uk-text-uppercase uk-text-extrabold uk-text-center uk-margin-large-bottom">
                Контакты
            </div>

            <div class="uk-grid uk-grid-collapse">
                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2 uk-width-xlarge-1-2">

                    <div class="uk-yandexmap">
                        <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                        <script type="text/javascript">
                            ymaps.ready(init);

                            function init () {
                                var map = new ymaps.Map('map', {
                                        center: [53.902257, 27.561831],
                                        zoom: 10
                                    }, {
                                        searchControlProvider: 'yandex#search'
                                    }),
                                    counter = 0,

                                // Создание макета содержимого балуна.
                                // Макет создается с помощью фабрики макетов с помощью текстового шаблона.
                                    BalloonContentLayout = ymaps.templateLayoutFactory.createClass(
                                        '<div style="margin: 10px;">' +
                                        '<b>{{properties.name}}</b>' +
                                        '</div>', {

                                        });

                                var placemark = new ymaps.Placemark([53.902257, 27.561831], {
                                    name: 'Считаем'
                                }, {
                                    balloonContentLayout: BalloonContentLayout,
                                    // Запретим замену обычного балуна на балун-панель.
                                    // Если не указывать эту опцию, на картах маленького размера откроется балун-панель.
                                    balloonPanelMaxMapArea: 0,
                                    iconLayout: 'default#image',
                                    iconImageHref: '/sites/all/themes/powerlab/images/map-marker.png',
                                    iconImageSize: [63, 80],
                                    iconImageOffset: [-31.5, -80]
                                });

                                map.geoObjects.add(placemark);
                            }
                        </script>
                        <div id="map" style="width:100%; height:580px"></div>
                    </div>

                </div>
                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2 uk-width-xlarge-1-2">

                    <div class="uk-footer-contacts uk-height-1-1">

                        <div class="uk-grid uk-h3">

                            <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2">
                                <div class="uk-footer-contacts-label uk-text-uppercase uk-text-bold">
                                    Телефон:
                                </div>
                                <div class="uk-footer-contacts-value uk-text-uppercase uk-text-bold uk-margin-small-top">
                                    <a href="tel: +375 (44) 741-24-74" class="uk-text-red">+375 (44) 741-24-74</a>
                                </div>
                            </div>

                            <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2">
                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2">
                                    <div class="uk-footer-contacts-label uk-text-uppercase uk-text-bold">
                                        E-mail:
                                    </div>
                                    <div class="uk-footer-contacts-value uk-text-uppercase uk-text-bold uk-margin-small-top">
                                        <a href="mailto:hello@powerlab.pro" class="uk-text-red">hello@powerlab.pro</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <form class="uk-footer-contacts-form uk-form uk-margin-medium-top">

                            <div class="uk-footer-contacts-form-title uk-h3 uk-text-uppercase uk-text-bold uk-margin-medium-bottom">
                                Или напишите нам
                            </div>

                            <div class="uk-form-controls">
                                <input type="text" name="name" placeholder="Представьтесь" class="uk-form-large uk-width-1-1" />
                            </div>

                            <div class="uk-form-controls uk-margin-top">
                                <input type="text" name="contact" placeholder="Ваш телефон или e-mail" class="uk-form-large uk-width-1-1" />
                            </div>

                            <div class="uk-form-controls uk-margin-top">
                                <textarea name="message" placeholder="Ваше сообщение" class="uk-form-large uk-width-1-1"></textarea>
                            </div>

                            <div class="uk-form-controls uk-margin-medium-top uk-text-center">
                                <button type="submit" class="uk-button uk-button-medium uk-button-black uk-button-long">Отправить</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
        <div class="uk-container uk-container-center uk-position-relative uk-position-z-index uk-margin-large-top">
            <div class="uk-medialine-copyrate uk-text-contrast uk-text-uppercase uk-text-center uk-text-bold">
                Разработка сайта: <a class="uk-text-contrast" href="http://medialine.by/" target="_blank">Медиа Лайн</a>
            </div>
        </div>
    </footer>

</div> <!-- /#page-wrapper -->
