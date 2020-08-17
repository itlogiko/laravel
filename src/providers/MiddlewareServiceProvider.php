<?php

namespace itLogiko\Laravel\Providers;

use itLogiko\Laravel\Middlewares\AdminMiddleware;
use itLogiko\Laravel\Middlewares\LocaleMiddleware;

class MiddlewareServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $router = $this->app['router'];
    $router->pushMiddlewareToGroup('web', LocaleMiddleware::class);
    $router->aliasMiddleware('admin', AdminMiddleware::class);
  }
}
