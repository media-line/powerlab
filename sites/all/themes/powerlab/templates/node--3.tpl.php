<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<main class="uk-main">
    <div class="uk-container uk-container-center">
         <div class="uk-content">
                    <div class="uk-article-full uk-article-full-small_img">
                        <div class="uk-position-relative">
                            <div class="uk-article-full-image uk-position-relative uk-width-1-1 uk-height-1-1 uk-display-inline-block" style="background-image: url('/sites/default/files/article001.jpg');">
                            </div>
                            <div class="uk-article-full-header uk-position-bottom-left uk-position-top-left uk-position-bottom-right uk-flex uk-flex-middle uk-text-center">
                                <div class="uk-width-1-1">
                                    <ul class="uk-breadcrumb">
                                        <li><a href="/">Главная</a></li>
                                        <li><span>О компании</span></li>
                                    </ul>

                                    <div class="uk-article-full-title uk-margin-top uk-margin-bottom uk-text-uppercase uk-text-bold uk-text-contrast">
                                        О компании
                                    </div>

                                    <div class="uk-article-full-subtitle uk-h4 uk-text-light uk-text-contrast">
                                        PowerLab - это эффективные и безопасные программные решения для вашего авто
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="uk-article-full-content uk-cover">
                            <div class="uk-text-center uk-text-bold uk-h4">Почему тысячи автовладельцев по всему миру выбирают PowerLab?</div>
                            <p class="uk-text-center">Мы – лаборатория профессионального чип-тюнинга "PowerLab" – специализируемся на удаленном изменении и модернизации программного обеспечения электронных блоков управления (ECU) дизельных европейских автомобилей: чип-тюнинг, удаление сажевых фильтров, отключение клапанов EGR, отключение DPF/FAP фильтров, вихревых заслонок, отключение AdBlue, перевод в Euro2, удаление ошибок с блоков, удаление вторых лямбда-зондов на бензиновых машинах.</p>
                            <p class="uk-text-center">Наше кредо: создание "прошивок", не отличимых от заводских по качеству и безопасности, но превосходящим их по выдаваемой мощности и динамике. Благодаря экспертности наших инженеров и многолетнему опыту работы, PowerLab завоевал уважение тюнинг-мастерских и автосервисов России, Беларуси, Украины, Польши, Испании, Словении, Болгарии, США, Кореи, но главное – любовь наших довольных и благодарных клиентов.</p>

                            <div class="uk-bg-blue">
                                <div class="uk-grid">
                                    <ul class="uk-width-1-3">
                                        <li>Не пользуемся "готовыми" прошивками под чип</li>
                                        <li>Каждая прошивка создается индивидуально под конкретный автомобиль</li>
                                        <li>Учитываем индивидуальные пожелания клиента</li>
                                    </ul>
                                    <ul class="uk-width-1-3">
                                        <li>Учитываем характеристики турбины</li>
                                        <li>Учитываем производительность форсунок</li>
                                        <li>Учитываем производительность трансмиссии</li>
                                    </ul>
                                    <ul class="uk-width-1-3">
                                        <li>Пересчитываем топливоподачу с точки зрения углов опережения впрыска</li>
                                        <li>Пересчитываем топливоподачу с точки зрения состава смеси</li>
                                        <li>Полностью пересчитываем все корректирующие карты</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="uk-text-center uk-text-bold uk-h4 uk-margin-medium-top">В результате мы получаем прошивки неотличимые по качеству от заводских!</div>
                            <div class="uk-grid uk-text-middle uk-text-uppercase uk-text-bold uk-margin-medium-top uk-margin-bottom">

                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-1-3">
                                    <div class="uk-red-icon-text uk-flex uk-flex-middle" style="background-image: url('/sites/default/files/red-icon1.png');">Широкий спектр услуг</div>
                                </div>

                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-1-3">
                                    <div class="uk-red-icon-text uk-flex uk-flex-middle" style="background-image: url('/sites/default/files/red-icon2.png');">100% гарантия безопасности наших прошивок</div>
                                </div>

                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-1-3">
                                    <div class="uk-red-icon-text uk-flex uk-flex-middle" style="background-image: url('/sites/default/files/red-icon3.png');">Оплата только за благодарных клиентов</div>
                                </div>

                            </div>
                        </div>
                    </div>

         </div>
    </div>
</main>
