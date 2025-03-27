<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:81)'
                        .'|errors/(\\d+)(*:100)'
                        .'|validation_errors/([^/]++)(*:134)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:171)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:202)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:241)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:278)'
                        .')'
                        .'|t(?'
                            .'|asks(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:324)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:350)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:388)'
                                .')'
                            .')'
                            .'|itles(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:432)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:458)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:496)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        81 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        100 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        134 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        171 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        202 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        241 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        278 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        324 => [[['_route' => '_api_/tasks/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        350 => [
            [['_route' => '_api_/tasks{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/tasks{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        388 => [
            [['_route' => '_api_/tasks/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/tasks/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        432 => [[['_route' => '_api_/titles/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Title', '_api_operation_name' => '_api_/titles/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        458 => [
            [['_route' => '_api_/titles{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Title', '_api_operation_name' => '_api_/titles{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/titles{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Title', '_api_operation_name' => '_api_/titles{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        496 => [
            [['_route' => '_api_/titles/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Title', '_api_operation_name' => '_api_/titles/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/titles/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Title', '_api_operation_name' => '_api_/titles/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/titles/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Title', '_api_operation_name' => '_api_/titles/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
