@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $adminRouteName . 'register' }}"
  :actions="[
    'Forgot Password?' => $adminRouteName . 'forgot-password',
    'Login now!' => $adminRouteName . 'login',
  ]"
  title="Register"
>
  @include('itlogiko::forms.register')
</x-itlogiko-form>
@endsection
