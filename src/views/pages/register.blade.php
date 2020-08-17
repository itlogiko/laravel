@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $routeName . 'register' }}"
  :actions="[
    'Forgot Password?' => $routeName . 'forgot-password',
    'Login now!' => $routeName . 'login',
  ]"
  title="Register"
>
  @include('itlogiko::forms.register')
</x-itlogiko-form>
@endsection
