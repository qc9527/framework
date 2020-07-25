<?php

namespace think\wendasns;

use think\Route;
use think\Service;
use think\Validate;

class WendaService extends Service
{
    public function boot(Route $route)
    {
        $route->rule('ccc/[:name]/[:page]', '\\plugin\\demo\\controller\\Index@run')->append(['action'=>'run']);

    }
}
