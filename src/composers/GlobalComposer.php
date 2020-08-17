<?php

namespace itLogiko\Laravel\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use itLogiko\Laravel\Models\TranslationModel;

use function config;

class GlobalComposer
{
  /**
   * Create a new route prefix composer.
   *
   * @return void
   */
  public function __construct()
  {
    // 
  }

  /**
   * Bind data to the view.
   *
   * @param View $view
   * @return void
   */
  public function compose(View $view)
  {
    $locales = Cache::remember('locales', 3600, function() {
      return TranslationModel::select('locale')->distinct()->pluck('locale', 'locale');
    });
    $routeName = config('itlogiko.route.name');
    $adminRouteName = $routeName . 'admin.';
    $isAdminRoute = Str::contains(Route::currentRouteName(), 'admin.');
    $view->with('routeName', $routeName);
    $view->with('adminRouteName', $adminRouteName);
    $view->with('isAdminRoute', $isAdminRoute);
    $view->with('locales', $locales);
  }
}
