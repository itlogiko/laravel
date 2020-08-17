@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $adminRouteName . 'reset-password' }}"
  :actions="[
    'Login now!' => $adminRouteName . 'login',
    'Register now!' => $adminRouteName . 'register',
  ]"
  title="Reset Password"
>
  @include('itlogiko::forms.reset-password')
</x-itlogiko-form>
@endsection
