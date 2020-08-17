<?php

namespace itLogiko\Laravel\Controllers\Api;

use itLogiko\Laravel\Controllers\Controller as BaseController;
use function response;

class Controller extends BaseController
{
  protected function json($message, $code, $data)
  {
    return response()->json([
      'code' => $code,
      'data' => $data,
      'message' => $message,
    ]);
  }
}
