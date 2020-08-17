<?php

namespace itLogiko\Laravel\Providers;

use function database_path;

class MigrationServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $path = __DIR__ . '/../migrations';
    $this->loadMigrationsFrom($path);
    $this->publishes([$path => database_path('migrations')], 'migration');
  }
}
