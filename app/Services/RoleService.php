<?php

namespace app\Services;

class RoleService
{

    public function getAllRouteNameAsArray()
    {
        $app = app();

        $routes = $app->routes->getRoutes();

        foreach ($routes as $key => $route) {

            if (isset($route->action)) {
                $action = $route->action;
                if (isset($action['as']) && !empty($action['prefix'] && Str::startsWith($action['as'], 'app'))) {
                    $permission = explode('.', substr($action['as'], 4));

                    if (array_key_exists(1, $permission)) {
                        $data[$permission[0]][] = $permission[1];
                    }
                }
            }
        }

        if (!empty($data)) {
            return $data;
        }
    }
}
