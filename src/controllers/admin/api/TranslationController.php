<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use Illuminate\Support\Facades\Storage;
use itLogiko\Laravel\Models\TranslationModel;
use itLogiko\Laravel\Requests\Admin\TranslationStoreRequest;
use itLogiko\Laravel\Requests\Admin\TranslationUpdateRequest;

class TranslationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return $this->json('Fetch successful.', 0, [
      'translations' => TranslationModel::paginate(10),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param TranslationStoreRequest $request
   * @return \Illuminate\Http\Response
   */
  public function store(TranslationStoreRequest $request)
  {
    return $this->json('Store successful.', 0, [
      'translation' => TranslationModel::create($request->validated()),
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param TranslationModel $translation
   * @return \Illuminate\Http\Response
   */
  public function show(TranslationModel $translation)
  {
    return $this->json('Fetch successful.', 0, [
      'translation' => $translation,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param TranslationUpdateRequest $request
   * @param TranslationModel $translation
   * @return \Illuminate\Http\Response
   */
  public function update(TranslationUpdateRequest $request, TranslationModel $translation)
  {
    $translation->update($request->validated());
    return $this->json('Update successful.', 0, [
      'translation' => $translation,
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param TranslationModel $translation
   * @return \Illuminate\Http\Response
   */
  public function destroy(TranslationModel $translation)
  {
    $translation->delete();
    return $this->json('Destroy successful.', 0, [
      'translation' => $translation,
    ]);
  }

  /**
   * Export the resources from storage.
   *
   * @return \Illuminate\Http\Response
   */
  public function export()
  {
    $storage = Storage::createLocalDriver(['root' => resource_path('lang')]);
    TranslationModel::all()->groupBy('locale')->each(function($l, $locale) use ($storage) {
      $d = [];
      $l->each(function($t) use (&$d) {
        $d[$t->key] = $t->value;
      });
      $storage->put("{$locale}.json", json_encode($d));
    });
    return $this->json('Export successful.', 0, []);
  }
}
