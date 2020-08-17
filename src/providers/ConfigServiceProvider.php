<?php

namespace itLogiko\Laravel\Providers;

use function config_path;

class ConfigServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([__DIR__ . '/../configs/itlogiko.php' => config_path('itlogiko.php')], 'config');
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    $this->mergeConfigFrom(__DIR__ . '/../configs/itlogiko.php', 'itlogiko');
  }
}
