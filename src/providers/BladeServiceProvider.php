<?php

namespace itLogiko\Laravel\Providers;

use Illuminate\Support\Facades\Blade;
use itLogiko\Laravel\Components\AlertComponent;
use itLogiko\Laravel\Components\CardComponent;
use itLogiko\Laravel\Components\FormComponent;
use itLogiko\Laravel\Components\SubmitButtonComponent;
use itLogiko\Laravel\Components\TableComponent;

class BladeServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Blade::component('itlogiko-alert', AlertComponent::class);
    Blade::component('itlogiko-card', CardComponent::class);
    Blade::component('itlogiko-form', FormComponent::class);
    Blade::component('itlogiko-submit-button', SubmitButtonComponent::class);
    Blade::component('itlogiko-table', TableComponent::class);
  }
}
