<?php

namespace App\Http\Controllers;

use Gopex\EasySetConfig\utils\ESConfig;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function main(){
        return ESConfig::scope("coffeeTrade")->scope("register")->get("");
    }
}
