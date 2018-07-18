<?php

namespace Hezehua\Testkz;

use Illuminate\Support\ServiceProvider;

class TestkzServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true; // 延迟加载服务
   
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__ . '/views', 'Testkz'); // 视图目录指定     
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/testkz'),  // 发布视图目录到resources 下
            __DIR__.'/config/testkz.php' => config_path('testkz.php'), // 发布配置文件到 laravel 的config 下
        ]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
	$this->app->singleton('testkz',function($app){
		return new Testkz($app['session'],$app['config']);
	});
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['testkz'];
    }
}
