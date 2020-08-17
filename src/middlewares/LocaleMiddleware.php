<?php

namespace itLogiko\Laravel\Middlewares;

use Closure;
use function app;

class LocaleMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param \Illuminate\Http\Request $request
   * @param \Closure $next
   * @param string|null $guard
   * @return mixed
   */
  public function handle($request, Closure $next, $guard = null)
  {
    $session = $request->session();
    if ($session->has('locale')) {
      app()->setLocale($session->get('locale'));
    }
    return $next($request);
  }
}
