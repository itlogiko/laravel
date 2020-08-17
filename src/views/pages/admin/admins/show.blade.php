@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-card
  :actions="[
    'Back' => $adminRouteName . 'admins.index',
    'Edit' => [$adminRouteName . 'admins.edit', $admin],
    'Destroy' => [$adminRouteName . 'admins.destroy', $admin, 'DELETE'],
  ]"
  title="Admin"
>
  <dl class="row">
    <dt class="col-3">
      Name
    </dt>
    <dd class="col-9">
      {{ $admin->name }}
    </dd>
    <dt class="col-3">
      Email
    </dt>
    <dd class="col-9">
      {{ $admin->email }}
    </dd>
  </dl>
</x-itlogiko-card>
@endsection
