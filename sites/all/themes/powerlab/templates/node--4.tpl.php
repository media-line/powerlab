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
                        <li><a href="#">Статьи</a></li>
                        <li><span>14 ноября 2016</span></li>
                    </ul>
                </div>
                <div class="uk-page-title uk-text-extrabold uk-text-uppercase uk-text-contrast">
                    <span>Услуги</span>
                    <hr>
                </div>
                <div class="uk-sidebar-menu">
                    <ul class="uk-list">
                        <li class="uk-active"><a href="#">Чип тюнинг</a></li>
                        <li><a href="#">Удаление сажевых фильтров, ЕГР, заслонок</a></li>
                        <li><a href="#">Удаление систем ADBlue</a></li>
                    </ul>
                </div>

            </aside>

            <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-4-5 uk-width-large-4-5 uk-width-xlarge-4-5">
                <div class="uk-content">
                    <div class="uk-services">
                        <div class="uk-position-relative">
                            <div class="uk-article-full-image uk-position-relative uk-width-1-1 uk-height-1-1 uk-display-inline-block" style="background-image: url('/sites/default/files/article001.jpg');">
                            </div>
                            <div class="uk-article-full-header uk-article-full-header-left uk-position-bottom-left uk-position-top-left uk-position-bottom-right uk-flex uk-flex-middle">
                                <div>
                                    <div class="uk-article-full-title uk-margin-medium-bottom uk-text-bold uk-text-contrast">
                                        Чип-тюнинг
                                    </div>
                                    <div class="uk-article-full-short_desc uk-text-small-caps uk-text-translucent">
                                        Как уже упоминалось выше, наиболее часто преследуемая цель — повышение мощности двигателей автомобилей. Сейчас в связи с подорожанием топлива к чип-тюнингу все чаще обращаются для снижения расхода топлива.
                                    </div>

                                    <div class="uk-grid uk-text-middle uk-text-uppercase uk-text-bold uk-margin-medium-top uk-margin-bottom uk-text-contrast">

                                        <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-1-3">
                                            <div class="uk-white-icon-text uk-flex uk-flex-middle" style="background-image: url('/sites/default/files/white-icon1.png');">Широкий спектр услуг</div>
                                        </div>

                                        <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-1-3">
                                            <div class="uk-white-icon-text uk-flex uk-flex-middle" style="background-image: url('/sites/default/files/white-icon2.png');">100% гарантия безопасности наших прошивок</div>
                                        </div>

                                        <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-width-xlarge-1-3">
                                            <div class="uk-white-icon-text uk-flex uk-flex-middle" style="background-image: url('/sites/default/files/white-icon3.png');">Оплата только за благодарных клиентов</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="uk-subcategories-list">
                            <div class="uk-h2 uk-text-extrabold">Чип-Тюнинг для:</div>
                            <div class="uk-grid uk-margin-medium-top">
                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Acura <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Audi <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">BMW <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Chery <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Daewoo <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Dodge <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Fiat <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Ford <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Jaguar <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Jeep <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">KIA  <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Land Rover <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Mitsubishi  <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Nissan <span class="uk-text-muted">(15)</span></a></div>

                                <div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 uk-width-xlarge-1-4"><a class="uk-subcategory-link uk-display-inline-block uk-margin-top" href="#">Opel  <span class="uk-text-muted">(15)</span></a></div>

                            </div>
                        </div>
                        <div class="uk-services-list uk-cover">

                            <div class="uk-service-teaser uk-position-relative">
                                <div class="uk-grid">
                                    <div class="uk-service-teaser-image uk-width-1-3 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5 uk-width-xlarge-1-5">
                                        <a class="uk-image" style="background-image: url('/sites/default/files/service001.jpg');"></a>
                                    </div>
                                    <div class="uk-service-teaser-content uk-flex uk-flex-middle uk-width-2-3 uk-width-small-2-3 uk-width-medium-3-4 uk-width-large-4-5 uk-width-xlarge-4-5">
                                        <div class="uk-width-1-1">
                                            <a class="uk-service-teaser-title uk-h2 uk-text-extrabold">
                                                BMW X6 3.0 D X-drive 2008 г.
                                            </a>

                                            <div class="uk-service-teaser-subtitle uk-text-small uk-text-italic">
                                                Автомат, дизельный, 3000 см.куб.,
                                            </div>

                                            <div class="uk-service-teaser-params uk-margin-small-top uk-grid uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 uk-width-xlarge-4-5">
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        До:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        200 л.с.
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        После:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        400 л.с.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-service-teaser uk-position-relative">
                                <div class="uk-grid">
                                    <div class="uk-service-teaser-image uk-width-1-3 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5 uk-width-xlarge-1-5">
                                        <a class="uk-image" style="background-image: url('/sites/default/files/service001.jpg');"></a>
                                    </div>
                                    <div class="uk-service-teaser-content uk-flex uk-flex-middle uk-width-2-3 uk-width-small-2-3 uk-width-medium-3-4 uk-width-large-4-5 uk-width-xlarge-4-5">
                                        <div class="uk-width-1-1">
                                            <a class="uk-service-teaser-title uk-h2 uk-text-extrabold">
                                                BMW X6 3.0 D X-drive 2008 г.
                                            </a>

                                            <div class="uk-service-teaser-subtitle uk-text-small uk-text-italic">
                                                Автомат, дизельный, 3000 см.куб.,
                                            </div>

                                            <div class="uk-service-teaser-params uk-margin-small-top uk-grid uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 uk-width-xlarge-4-5">
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        До:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        200 л.с.
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        После:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        400 л.с.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-service-teaser uk-position-relative">
                                <div class="uk-grid">
                                    <div class="uk-service-teaser-image uk-width-1-3 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5 uk-width-xlarge-1-5">
                                        <a class="uk-image" style="background-image: url('/sites/default/files/service001.jpg');"></a>
                                    </div>
                                    <div class="uk-service-teaser-content uk-flex uk-flex-middle uk-width-2-3 uk-width-small-2-3 uk-width-medium-3-4 uk-width-large-4-5 uk-width-xlarge-4-5">
                                        <div class="uk-width-1-1">
                                            <a class="uk-service-teaser-title uk-h2 uk-text-extrabold">
                                                BMW X6 3.0 D X-drive 2008 г.
                                            </a>

                                            <div class="uk-service-teaser-subtitle uk-text-small uk-text-italic">
                                                Автомат, дизельный, 3000 см.куб.,
                                            </div>

                                            <div class="uk-service-teaser-params uk-margin-small-top uk-grid uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 uk-width-xlarge-4-5">
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        До:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        200 л.с.
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        После:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        400 л.с.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-service-teaser uk-position-relative">
                                <div class="uk-grid">
                                    <div class="uk-service-teaser-image uk-width-1-3 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5 uk-width-xlarge-1-5">
                                        <a class="uk-image" style="background-image: url('/sites/default/files/service001.jpg');"></a>
                                    </div>
                                    <div class="uk-service-teaser-content uk-flex uk-flex-middle uk-width-2-3 uk-width-small-2-3 uk-width-medium-3-4 uk-width-large-4-5 uk-width-xlarge-4-5">
                                        <div class="uk-width-1-1">
                                            <a class="uk-service-teaser-title uk-h2 uk-text-extrabold">
                                                BMW X6 3.0 D X-drive 2008 г.
                                            </a>

                                            <div class="uk-service-teaser-subtitle uk-text-small uk-text-italic">
                                                Автомат, дизельный, 3000 см.куб.,
                                            </div>

                                            <div class="uk-service-teaser-params uk-margin-small-top uk-grid uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 uk-width-xlarge-4-5">
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        До:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        200 л.с.
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        После:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        400 л.с.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-service-teaser uk-position-relative">
                                <div class="uk-grid">
                                    <div class="uk-service-teaser-image uk-width-1-3 uk-width-small-1-3 uk-width-medium-1-4 uk-width-large-1-5 uk-width-xlarge-1-5">
                                        <a class="uk-image" style="background-image: url('/sites/default/files/service001.jpg');"></a>
                                    </div>
                                    <div class="uk-service-teaser-content uk-flex uk-flex-middle uk-width-2-3 uk-width-small-2-3 uk-width-medium-3-4 uk-width-large-4-5 uk-width-xlarge-4-5">
                                        <div class="uk-width-1-1">
                                            <a class="uk-service-teaser-title uk-h2 uk-text-extrabold">
                                                BMW X6 3.0 D X-drive 2008 г.
                                            </a>

                                            <div class="uk-service-teaser-subtitle uk-text-small uk-text-italic">
                                                Автомат, дизельный, 3000 см.куб.,
                                            </div>

                                            <div class="uk-service-teaser-params uk-margin-small-top uk-grid uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 uk-width-xlarge-4-5">
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        До:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        200 л.с.
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-width-xlarge-1-2 uk-clearfix">
                                                    <div class="uk-service-teaser-params-label uk-float-left">
                                                        После:
                                                    </div>

                                                    <div class="uk-service-teaser-params-value">
                                                        400 л.с.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div>
                    <ul class="uk-pagination">
                        <li class="uk-first"><a href="#"><<</a></li>
                        <li class="uk-active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">23</a></li>
                        <li><a href="#">24</a></li>
                        <li class="uk-last"><a href="#">>></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</main>
