<?php


namespace app\service;


use app\util\TestBoot;
use think\Service;

class TestBootService extends Service
{
    public function register()
    {
//        parent::register(); // TODO: Change the autogenerated stub
        $this->app->bind('test_boot', TestBoot::class);
    }

    public function boot()
    {
//        parent::boot(); // TODO: Change the autogenerated stub
    }
}