<?php

namespace itLogiko\Laravel\Providers;

use itLogiko\Laravel\Composers\GlobalComposer;
use function resource_path;

class ViewServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $path = __DIR__ . '/../views';
    $this->loadViewsFrom($path, 'itlogiko');
    $this->app['view']->composer('*', GlobalComposer::class);
    $this->publishes([$path => resource_path('views/vendor/itlogiko')], 'view');
  }
}
