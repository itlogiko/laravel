<?php

namespace itLogiko\Laravel\Middlewares;

use Closure;

class AdminMiddleware
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
    return $next($request);
  }
}
