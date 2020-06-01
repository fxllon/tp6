<?php


namespace app\util;


use think\facade\Log;

class TestBoot
{
    public function doBoot()
    {
        Log::alert('doBoot');
    }
}