@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  :action="[$adminRouteName . 'users.update', $user]"
  :actions="['Back' => $adminRouteName . 'users.index']"
  method="PATCH"
  title="User"
>
  @include('itlogiko::forms.user')
</x-itlogiko-form>
@endsection
