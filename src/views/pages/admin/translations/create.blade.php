@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $adminRouteName . 'translations.store' }}"
  :actions="['Back' => $adminRouteName . 'translations.index']"
  title="Translation"
>
  @include('itlogiko::forms.translation')
</x-itlogiko-form>
@endsection
