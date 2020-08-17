<?php

namespace itLogiko\Laravel\Providers;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->app->register(BladeServiceProvider::class);
    $this->app->register(ConfigServiceProvider::class);
    $this->app->register(MiddlewareServiceProvider::class);
    $this->app->register(MigrationServiceProvider::class);
    $this->app->register(RouteServiceProvider::class);
    $this->app->register(ViewServiceProvider::class);

    // $this->loadFactoriesFrom(__DIR__.'/path/to/factories');
    // $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'courier');
    // $this->publishes([
    //   __DIR__.'/path/to/translations' => resource_path('lang/vendor/courier'),
    // ]);
    // $this->publishes([
    //   __DIR__.'/path/to/assets' => public_path('vendor/courier'),
    // ], 'public');
  }
}
