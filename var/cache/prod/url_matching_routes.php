<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/phones(?:/(\\d+))?(*:29)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [
            [['_route' => 'list_phone', 'p' => '1', '_controller' => 'App\\Controller\\PhoneController::index'], ['p'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
