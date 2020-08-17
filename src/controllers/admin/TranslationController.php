<?php

namespace itLogiko\Laravel\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use itLogiko\Laravel\Models\TranslationModel;
use itLogiko\Laravel\Requests\Admin\TranslationStoreRequest;
use itLogiko\Laravel\Requests\Admin\TranslationUpdateRequest;
use function redirect;
use function view;

class TranslationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $translations = TranslationModel::paginate(10);
    return view('itlogiko::pages.admin.translations.index')
      ->with('translations', $translations);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('itlogiko::pages.admin.translations.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param TranslationStoreRequest $request
   * @return \Illuminate\Http\Response
   */
  public function store(TranslationStoreRequest $request)
  {
    $translation = TranslationModel::create($request->validated());
    return redirect()
      ->route($this->adminRouteName . 'translations.show', $translation)
      ->with('success', 'Store successful.');
  }

  /**
   * Display the specified resource.
   *
   * @param TranslationModel $translation
   * @return \Illuminate\Http\Response
   */
  public function show(TranslationModel $translation)
  {
    return view('itlogiko::pages.admin.translations.show')
      ->with('translation', $translation);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param TranslationModel $translation
   * @return \Illuminate\Http\Response
   */
  public function edit(TranslationModel $translation)
  {
    return view('itlogiko::pages.admin.translations.edit')
      ->with('translation', $translation);
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
    return redirect()
      ->route($this->adminRouteName . 'translations.show', $translation)
      ->with('success', 'Update successful.');
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
    return redirect()
      ->route($this->adminRouteName . 'translations.index')
      ->with('success', 'Destroy successful.');
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
    return redirect()
      ->route($this->adminRouteName . 'translations.index')
      ->with('success', 'Export successful.');
  }
}
