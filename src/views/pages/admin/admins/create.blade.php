@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $adminRouteName . 'admins.store' }}"
  :actions="['Back' => $adminRouteName . 'admins.index']"
  title="Admin"
>
  @include('itlogiko::forms.admin')
</x-itlogiko-form>
@endsection
