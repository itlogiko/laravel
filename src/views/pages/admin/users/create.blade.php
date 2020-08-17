@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $adminRouteName . 'users.store' }}"
  :actions="['Back' => $adminRouteName . 'users.index']"
  title="User"
>
  @include('itlogiko::forms.user')
</x-itlogiko-form>
@endsection
