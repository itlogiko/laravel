@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-form
  action="{{ $routeName . 'contact' }}"
  title="Contact"
>
  @include('itlogiko::forms.contact')
</x-itlogiko-form>
@endsection
