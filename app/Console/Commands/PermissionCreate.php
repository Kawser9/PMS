<?php

namespace App\Console\Commands;

use App\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class PermissionCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Permission:Create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Created Successfully';

    /**
     * Execute the console command.
     */
    public function handle()
    {
            $routes = Route::getRoutes();
            foreach($routes as $route)
            {
                if($route->getPrefix()=='/admin'){
                   Permission::updateOrCreate([
                    'name'=>str_replace("."," ",$route->getName()),
                    'slug'=>$route->getName(),
                   ]);
                }   
            }
    
            echo "all permission store successfully.";
        
    }
}
