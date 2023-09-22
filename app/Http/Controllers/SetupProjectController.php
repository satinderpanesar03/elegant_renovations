<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SetupProjectController extends Controller
{
    public function startSetup(Request $request)
    {
        // Run the migrate command
        Artisan::call('migrate');

        // Run the db:seed command
        Artisan::call('db:seed');


        return 'Database migration and seeding completed successfully.';
    }

    public function startSetupGet(Request $request)
    {
        if($request->commandString){
             Artisan::call($request->commandString);
        }
        return $request->commandString.' : completed successfully.';
    }


}
