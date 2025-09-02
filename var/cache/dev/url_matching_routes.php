<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/books' => [
            [['_route' => 'app_api_books_index', '_controller' => 'App\\Controller\\API\\BooksController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_books_create', '_controller' => 'App\\Controller\\API\\BooksController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/me' => [[['_route' => 'app_api_user_me', '_controller' => 'App\\Controller\\API\\UserController::me'], null, null, null, false, false, null]],
        '/livres/index' => [[['_route' => 'book.index', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/livres/ajouter' => [[['_route' => 'book.create', '_controller' => 'App\\Controller\\BookController::create'], null, null, null, false, false, null]],
        '/comment' => [[['_route' => 'comment.index', '_controller' => 'App\\Controller\\CommentController::driverProfile'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/creer-un-compte' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/api/books/([0-9]+)(*:221)'
                .'|/livres/(?'
                    .'|([a-z0-9-]+)\\-(\\d+)(*:259)'
                    .'|([a-z0-9-]+)\\-(\\d+)/editer(*:293)'
                    .'|([0-9]+)/delete(*:316)'
                .')'
                .'|/comment/([0-9]+)(*:342)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'app_api_books_show', '_controller' => 'App\\Controller\\API\\BooksController::show'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'book.details', '_controller' => 'App\\Controller\\BookController::bookDetails'], ['slug', 'id'], null, null, false, true, null]],
        293 => [[['_route' => 'book.edit', '_controller' => 'App\\Controller\\BookController::editBook'], ['slug', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        316 => [[['_route' => 'book.delete', '_controller' => 'App\\Controller\\BookController::removeBook'], ['id'], ['DELETE' => 0], null, false, false, null]],
        342 => [
            [['_route' => 'comment.edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
