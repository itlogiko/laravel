@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-table
  :actions="['Add' => $adminRouteName . 'admins.create']"
  :headers="[
    'Name',
    'Email',
    'Action',
  ]"
  :model="$admins"
  title="Admins"
>
  @foreach($admins as $d)    
    <tr>
      <th scope="row">
        {{ $d->name }}
      </th>
      <td>
        {{ $d->email }}
      </td>
      <td>
        <a class="btn btn-default btn-sm" href="{{ route($adminRouteName . 'admins.show', $d) }}">
          Show
        </a>
        <a class="btn btn-default btn-sm" href="{{ route($adminRouteName . 'admins.edit', $d) }}">
          Edit
        </a>
        <x-itlogiko-submit-button :action="[$adminRouteName . 'admins.destroy', $d]">
          Destroy
        </x-itlogiko-submit-button>
      </td>
    </tr>
  @endforeach
</x-itlogiko-table>
@endsection
