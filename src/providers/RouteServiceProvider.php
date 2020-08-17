<?php

namespace itLogiko\Laravel\Providers;

use App\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use function config;

class RouteServiceProvider extends ServiceProvider
{
  /**
   * This name is applied to your controller routes.
   *
   * @var string
   */
  protected $name;

  /**
   * This namespace is applied to your controller routes.
   *
   * In addition, it is set as the URL generator's root namespace.
   *
   * @var string
   */
  protected $namespace = 'itLogiko\Laravel\Controllers';

  /**
   * This prefix is applied to your controller routes.
   *
   * @var string
   */
  protected $prefix;

  /**
   * Define your route model bindings, pattern filters, etc.
   *
   * @return void
   */
  public function boot()
  {
    $this->name = config('itlogiko.route.name');
    $this->prefix = config('itlogiko.route.prefix');
    parent::boot();
  }

  /**
   * Define the routes for the application.
   *
   * @return void
   */
  public function map()
  {
    $this->mapWebRoutes();
    $this->mapAdminRoutes();
    $this->mapApiRoutes();
    $this->mapAdminApiRoutes();
  }

  /**
   * Define the "api" routes for the application.
   *
   * These routes are typically stateless.
   *
   * @return void
   */
  protected function mapAdminApiRoutes()
  {
    Route::middleware(['admin', 'api'])
      ->name($this->name . 'admin.api.')
      ->namespace($this->namespace . '\Admin\Api')
      ->prefix($this->prefix . '/admin/api')
      ->group(__DIR__ . '/../routes/admin-api.php');
  }

  /**
   * Define the "api" routes for the application.
   *
   * These routes are typically stateless.
   *
   * @return void
   */
  protected function mapAdminRoutes()
  {
    Route::middleware(['admin', 'web'])
      ->name($this->name . 'admin.')
      ->namespace($this->namespace . '\Admin')
      ->prefix($this->prefix . '/admin')
      ->group(__DIR__ . '/../routes/admin.php');
  }

  /**
   * Define the "api" routes for the application.
   *
   * These routes are typically stateless.
   *
   * @return void
   */
  protected function mapApiRoutes()
  {
    Route::middleware(['api'])
      ->name($this->name . 'api.')
      ->namespace($this->namespace . '\Api')
      ->prefix($this->prefix . '/api')
      ->group(__DIR__ . '/../routes/api.php');
  }

  /**
   * Define the "web" routes for the application.
   *
   * These routes all receive session state, CSRF protection, etc.
   *
   * @return void
   */
  protected function mapWebRoutes()
  {
    Route::middleware(['web'])
      ->name($this->name)
      ->namespace($this->namespace)
      ->prefix($this->prefix)
      ->group(__DIR__ . '/../routes/web.php');
  }
}
