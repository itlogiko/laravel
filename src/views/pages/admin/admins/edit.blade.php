@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  :action="[$adminRouteName . 'admins.update', $admin]"
  :actions="['Back' => $adminRouteName . 'admins.index']"
  method="PATCH"
  title="Admin"
>
  @include('itlogiko::forms.admin')
</x-itlogiko-form>
@endsection
