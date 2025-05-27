<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles.css' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis', '_controller' => 'App\\Controller\\AvisController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['POST' => 0], null, false, false, null]],
        '/commandes' => [[['_route' => 'app_commandes_index', '_controller' => 'App\\Controller\\CommandesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commandes/new' => [[['_route' => 'app_commandes_new', '_controller' => 'App\\Controller\\CommandesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commandes/store' => [[['_route' => 'app_commande_store', '_controller' => 'App\\Controller\\CommandesController::storeCommande'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\IndexController::contact'], null, null, null, false, false, null]],
        '/politique-de-confidentialite' => [[['_route' => 'privacy_policy', '_controller' => 'App\\Controller\\IndexController::privacyPolicy'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'cgv', '_controller' => 'App\\Controller\\IndexController::termsAndConditions'], null, null, null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'app_create_checkout_session', '_controller' => 'App\\Controller\\PaiementController::createCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
        '/success' => [[['_route' => 'app_success', '_controller' => 'App\\Controller\\PaiementController::success'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/produits' => [[['_route' => 'app_produits', '_controller' => 'App\\Controller\\ProduitController::produts'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recherche' => [[['_route' => 'app_recherche', '_controller' => 'App\\Controller\\RechercheController::searchFormController'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:227)'
                        .'|/edit(*:240)'
                        .'|(*:248)'
                    .')'
                    .'|ommandes/(?'
                        .'|([^/]++)(*:277)'
                        .'|suivi/([^/]++)(*:299)'
                        .'|([^/]++)(?'
                            .'|/edit(*:323)'
                            .'|(*:331)'
                        .')'
                        .'|update\\-quantite/([^/]++)(*:365)'
                        .'|commande_(?'
                            .'|recupere/([^/]++)(*:402)'
                            .'|annule/([^/]++)(*:425)'
                        .')'
                    .')'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:462)'
                        .'|delete/([^/]++)(*:485)'
                    .')'
                    .'|roduit/([^/]++)(?'
                        .'|/edit(*:517)'
                        .'|(*:525)'
                    .')'
                .')'
                .'|/remove/([^/]++)(*:551)'
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
        227 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        248 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        277 => [[['_route' => 'app_commandes_show', '_controller' => 'App\\Controller\\CommandesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'app_commandes_suivi', '_controller' => 'App\\Controller\\CommandesController::suivi'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_commandes_edit', '_controller' => 'App\\Controller\\CommandesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'app_commandes_delete', '_controller' => 'App\\Controller\\CommandesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        365 => [[['_route' => 'update_quantite', '_controller' => 'App\\Controller\\CommandesController::updateQuantite'], ['id'], ['POST' => 0], null, false, true, null]],
        402 => [[['_route' => 'commande_recupere', '_controller' => 'App\\Controller\\CommandesController::recupereCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        425 => [[['_route' => 'commande_annule', '_controller' => 'App\\Controller\\CommandesController::annuleCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        462 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        485 => [[['_route' => 'panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['id'], null, null, false, true, null]],
        517 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        525 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        551 => [
            [['_route' => 'panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
