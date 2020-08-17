@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-card
  :actions="['Back' => $adminRouteName . 'contacts.index']"
  title="Contact"
>
  <dl class="row">
    <dt class="col-3">
      Name
    </dt>
    <dd class="col-9">
      {{ $contact->name }}
    </dd>
    <dt class="col-3">
      Email
    </dt>
    <dd class="col-9">
      {{ $contact->email }}
    </dd>
    <dt class="col-3">
      Message
    </dt>
    <dd class="col-9">
      {{ $contact->message }}
    </dd>
  </dl>
</x-itlogiko-card>
@endsection
