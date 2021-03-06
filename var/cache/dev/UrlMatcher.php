<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/category/add' => [[['_route' => 'app_category_add', '_controller' => 'App\\Controller\\CategoryController::addCategory'], null, null, null, false, false, null]],
        '/category_list' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\CategoryController::list'], null, null, null, false, false, null]],
        '/category_add_form' => [[['_route' => 'category_add_form', '_controller' => 'App\\Controller\\CategoryController::addForm'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/add' => [[['_route' => 'app_product_add', '_controller' => 'App\\Controller\\ProductController::addProduct'], null, null, null, false, false, null]],
        '/product_list' => [[['_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::list'], null, null, null, false, false, null]],
        '/product_other_list' => [[['_route' => 'product_other_list', '_controller' => 'App\\Controller\\ProductController::otherList'], null, null, null, false, false, null]],
        '/product_add_form' => [[['_route' => 'product_add_form', '_controller' => 'App\\Controller\\ProductController::addForm'], null, null, null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/category/(?'
                    .'|([^/]++)(*:190)'
                    .'|update/([^/]++)(*:213)'
                    .'|delete/([^/]++)(*:236)'
                .')'
                .'|/product/(?'
                    .'|([^/]++)(*:265)'
                    .'|update/([^/]++)(*:288)'
                    .'|delete/([^/]++)(*:311)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], null, null, false, true, null]],
        213 => [[['_route' => 'category_update', '_controller' => 'App\\Controller\\CategoryController::update'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::update'], ['id'], null, null, false, true, null]],
        311 => [
            [['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
