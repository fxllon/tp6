<?php
declare (strict_types = 1);

namespace app\facade;

use think\Facade;

class Test extends Facade
{
    protected static function getFacadeClass()
    {
        return 'app\common\Test';
    }
}