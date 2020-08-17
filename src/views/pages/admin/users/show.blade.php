@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-card
  :actions="[
    'Back' => $adminRouteName . 'users.index',
    'Edit' => [$adminRouteName . 'users.edit', $user],
    'Destroy' => [$adminRouteName . 'users.destroy', $user, 'DELETE'],
  ]"
  title="User"
>
  <dl class="row">
    <dt class="col-3">
      Name
    </dt>
    <dd class="col-9">
      {{ $user->name }}
    </dd>
    <dt class="col-3">
      Email
    </dt>
    <dd class="col-9">
      {{ $user->email }}
    </dd>
  </dl>
</x-itlogiko-card>
@endsection
