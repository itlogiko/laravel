@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $routeName . 'reset-password' }}"
  :actions="[
    'Login now!' => $routeName . 'login',
    'Register now!' => $routeName . 'register',
  ]"
  title="Reset Password"
>
  @include('itlogiko::forms.reset-password')
</x-itlogiko-form>
@endsection
