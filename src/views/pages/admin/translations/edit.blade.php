@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  :action="[$adminRouteName . 'translations.update', $translation]"
  :actions="['Back' => $adminRouteName . 'translations.index']"
  method="PATCH"
  title="Translation"
>
  @include('itlogiko::forms.translation')
</x-itlogiko-form>
@endsection
