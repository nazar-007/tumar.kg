<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'category' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category']], [], []],
    'app_category_add' => [[], ['_controller' => 'App\\Controller\\CategoryController::addCategory'], [], [['text', '/category/add']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/category']], [], []],
    'category_list' => [[], ['_controller' => 'App\\Controller\\CategoryController::list'], [], [['text', '/category_list']], [], []],
    'category_update' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/category/update']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/category/delete']], [], []],
    'category_add_form' => [[], ['_controller' => 'App\\Controller\\CategoryController::addForm'], [], [['text', '/category_add_form']], [], []],
    'app_product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], []],
    'app_product_add' => [[], ['_controller' => 'App\\Controller\\ProductController::addProduct'], [], [['text', '/product/add']], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/product']], [], []],
    'product_list' => [[], ['_controller' => 'App\\Controller\\ProductController::list'], [], [['text', '/product_list']], [], []],
    'product_update' => [['id'], ['_controller' => 'App\\Controller\\ProductController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/product/update']], [], []],
    'product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/product/delete']], [], []],
    'product_other_list' => [[], ['_controller' => 'App\\Controller\\ProductController::otherList'], [], [['text', '/product_other_list']], [], []],
    'product_add_form' => [[], ['_controller' => 'App\\Controller\\ProductController::addForm'], [], [['text', '/product_add_form']], [], []],
    'app_lucky_number' => [[], ['_controller' => 'App\\Controller\\LuckyController::number'], [], [['text', '/lucky/number']], [], []],
];
