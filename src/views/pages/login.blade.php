@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $routeName . 'login' }}"
  :actions="[
    'Forgot Password?' => $routeName . 'forgot-password',
    'Register now!' => $routeName . 'register',
  ]"
  title="Login"
>
  @include('itlogiko::forms.login')
</x-itlogiko-form>
@endsection
