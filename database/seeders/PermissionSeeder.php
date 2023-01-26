<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
                        $data[$permission[0]][] = $permission[1];
                    }
                }
            }
        }


        foreach($data as $key => $value){
            $module = Module::updateOrCreate(['name'=>ucfirst($key).' Management']);
            foreach($value as $permission){
                Permission::updateOrCreate([
                    'module_id' =>  $module->id,
                    'name'      => ucfirst($key).' '.ucfirst($permission),
                    'slug'      => 'app.'.$key.'.'.$permission
                ]);
            }
        }

    }


    
}
