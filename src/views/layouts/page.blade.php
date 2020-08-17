@extends('itlogiko::layouts.master')

@section('bodyClass', 'mt-5 pt-5')

@section('masterContent')
@if($isAdminRoute)
  @include('itlogiko::includes.admin.navbar')
@else
  @include('itlogiko::includes.navbar')
@endif
<div class="container">
  @include('itlogiko::includes.success')
  @include('itlogiko::includes.errors')
  @yield('pageContent')
</div>
@endsection
