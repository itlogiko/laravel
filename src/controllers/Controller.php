<?php

namespace itLogiko\Laravel\Controllers;

use App\Http\Controllers\Controller as BaseController;
use function config;

class Controller extends BaseController
{
  protected $routeName;
  protected $adminRouteName;
  protected $apiRouteName;

  public function __construct()
  {
    $this->routeName = config('itlogiko.route.name');
    $this->adminRouteName = $this->routeName . 'admin.';
    $this->apiRouteName = $this->routeName . 'api.';
  }
}
