@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-card
  :actions="[
    'Back' => $adminRouteName . 'translations.index',
    'Edit' => [$adminRouteName . 'translations.edit', $translation],
    'Destroy' => [$adminRouteName . 'translations.destroy', $translation, 'DELETE'],
  ]"
  title="Translation"
>
  <dl class="row">
    <dt class="col-3">
      Locale
    </dt>
    <dd class="col-9">
      {{ $translation->locale }}
    </dd>
    <dt class="col-3">
      Key
    </dt>
    <dd class="col-9">
      {{ $translation->key }}
    </dd>
    <dt class="col-3">
      Value
    </dt>
    <dd class="col-9">
      {{ $translation->value }}
    </dd>
  </dl>
</x-itlogiko-card>
@endsection
