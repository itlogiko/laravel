@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $adminRouteName . 'login' }}"
  :actions="[
    'Forgot Password?' => $adminRouteName . 'forgot-password',
    'Register now!' => $adminRouteName . 'register',
  ]"
  title="Login"
>
  @include('itlogiko::forms.login')
</x-itlogiko-form>
@endsection
