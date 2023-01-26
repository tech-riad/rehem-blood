<?php

use Illuminate\Support\Facades\Route;

function getAllRouteNameAsArray()
{
 
    $routes = Route::getRoutes();

    foreach ($routes as $key => $route) {

        if(isset($route->action))
        {
            $action = $route->action;
            if(isset($action['as']) && !empty($action['prefix'] && Str::startsWith($action['as'], 'app')))
            {
                $permission = explode('.', substr($action['as'], 4));

                if (array_key_exists(1, $permission)){
                    $data[ucfirst($permission[0])." Management"][] = $permission[1];
                }
            }
        }
    }

    if (!empty($data)) {
        return $data;
    }
}

function getAllRouteNames()
{
    $app = app();

    $routes = Route::getRoutes();

    foreach ($routes as $key => $route) {

        if(isset($route->action))
        {
            $action = $route->action;
            if(isset($action['as']) && !empty($action['prefix'] && Str::startsWith($action['as'], 'app')))
            {
                $permission = explode('.', substr($action['as'], 4));

                if (array_key_exists(1, $permission)){
                    $data[] = substr($action['as'], 4);
                }
            }
        }
    }

    if (!empty($data)) {
        return $data;
    }
}

function colors()
{
    return [
        'red', 'blue', 'green', 'white', 'maroon', 'purple', 'black', 'fuchsia', 'lime', 'olive'
    ];
}
