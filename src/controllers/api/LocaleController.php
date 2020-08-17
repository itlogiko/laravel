<?php

namespace itLogiko\Laravel\Controllers\Api;

use Illuminate\Support\Facades\Cache;
use itLogiko\Laravel\Models\TranslationModel;
use itLogiko\Laravel\Requests\LocaleRequest;
use function session;

class LocaleController extends Controller
{
  public function list()
  {
    return $this->json('Fetch successful.', 0, [
      'locales' => Cache::remember('locales', 3600, function() {
        return TranslationModel::select('locale')->distinct()->pluck('locale', 'locale');
      }),
    ]);
  }

  public function switch(LocaleRequest $request)
  {
    session()->put('locale', $request->input('locale'));
    return $this->json('Switch successful.', 0, []);
  }
}
