<?php

namespace App\Http\Controllers;

use Gopex\EasySetConfig\facade\ESConfig;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function main(){
        dd(ESConfig::scope("maintenance")->get("enabled2"));
        dd(config("easySetConfig.cache_enabled"));
    }
}
