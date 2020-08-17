@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $adminRouteName . 'forgot-password' }}"
  :actions="[
    'Login now!' => $adminRouteName . 'login',
    'Register now!' => $adminRouteName . 'register',
  ]"
  title="Forgot Password?"
>
  @include('itlogiko::forms.forgot-password')
</x-itlogiko-form>
@endsection
