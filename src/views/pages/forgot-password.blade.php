@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $routeName . 'forgot-password' }}"
  :actions="[
    'Login now!' => $routeName . 'login',
    'Register now!' => $routeName . 'register',
  ]"
  title="Forgot Password?"
>
  @include('itlogiko::forms.forgot-password')
</x-itlogiko-form>
@endsection
