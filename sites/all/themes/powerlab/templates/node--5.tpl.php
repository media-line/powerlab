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
        <div class="uk-grid uk-grid-collapse">
            <aside class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-5 uk-width-large-1-5
            uk-width-xlarge-1-5">
                <div class="uk-margin-top">
                    <ul class="uk-breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><span>Чип-тюнинг</span></li>
                    </ul>
                </div>
                <div class="uk-page-title uk-text-extrabold uk-text-uppercase uk-text-contrast">
                    <span>Чип-тюнинг</span>
                    <hr>
                </div>

                <div class="uk-sidebar-menu">
                    <ul class="uk-list">
                        <li><a href="#">Audi <span class="uk-text-muted">(6084)</span></a></li>
                        <li class="uk-active"><a href="#">BMW <span class="uk-text-muted">(6084)</span></a></li>
                        <li><a href="#">Cadillac <span class="uk-text-muted">(6084)</span></a></li>
                        <li><a href="#">Chery <span class="uk-text-muted">(6084)</span></a></li>
                        <li><a href="#"> Chevrolet <span class="uk-text-muted">(6084)</span></a></li>
                        <li><a href="#">Chrysler <span class="uk-text-muted">(6084)</span></a></li>
                        <li><a href="#">Citroen <span class="uk-text-muted">(6084)</span></a></li>
                        <li><a class="uk-view-all" href="#">Смотреть все машины</a></li>
                    </ul>
                </div>

            </aside>

            <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-4-5 uk-width-large-4-5 uk-width-xlarge-4-5">
                <div class="uk-content">
                    <div class="uk-service-full">
                        <div class="uk-position-relative">
                            <div class="uk-article-full-image uk-service-full-image" style="background-image: url('/sites/default/files/article001.jpg');">
                                <div class="uk-image" style="background-image: url('/sites/default/files/service001.jpg');">
                                </div>
                            </div>
                            <div class="uk-article-full-header uk-service-full-header uk-position-bottom-left uk-position-top-left uk-position-bottom-right uk-flex uk-flex-middle">
                                <div class="uk-width-1-1 uk-text-center">
                                    
                                    <div class="uk-article-full-title uk-margin-bottom uk-text-uppercase uk-text-bold uk-text-contrast">
                                        BMW X6 3.0 D X-drive 2008 г.
                                    </div>
                                    <div class="uk-service-full-subtitle uk-text-small uk-text-italic uk-text-translucent">
                                        Автомат, дизельный, 3000 см.куб.,
                                    </div>
                                    <div class="uk-service-full-params uk-text-translucent uk-margin-top">

                                        <div class="uk-service-full-param uk-display-inline-block uk-position-relative">
                                            Мощность л.с., до: 200
                                        </div>

                                        <div class="uk-service-full-param uk-display-inline-block uk-position-relative">
                                            Мощность л.с., после: 270
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="uk-article-full-content">
                            
                            <p class="uk-text-bold">Список работ:</p>

                            <ul>
                                <li>техника прохождения поворотов и вид автоспорта, характеризующиеся использованием управляемого заноса на максимально</li>
                                <li>возможных для удержания на трассе скорости и угла к траектории. Соревнования проводятся на асфальте, льду, трассах с</li>
                                <li>большим количеством поворотов. Также вид автоспорта базирующегося на зрелищности прохождения поворотов в заносе. В</li>
                                <li>основном используются автомобили с задним приводом.</li>
                            </ul>

                            <p class="uk-bg-blue">
                                <img width="100%" src="/sites/default/files/img001.jpg" alt="" />
                            </p>
                            Существует два типа заездов: одиночные и парные. Победитель обычно определяется в нескольких заездах. В одиночных заездах судьи начисляют гонщику определённое количество очков в зависимости от скорости, траектории, угла заноса и зрелищности заезда в целом. В парных заездах первый участник должен проехать оцениваемый участок в соответствии с заданием (чаще всего по максимально правильной траектории), задачей второго участника является как можно сильнее приблизиться к своему сопернику во время движения в заносе, делать синхронные перекладки. Для определения победителя совершается два заезда, во втором заезде правила те же, но противники меняются местами. Победителем является тот пилот, который проехал ближе и лучше, будучи «догоняющим». Также, если оба заезда были безупречными или количество ошибок обоих пилотов суммарно одинаковое, судьи могут назначить повторный заезд.

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
