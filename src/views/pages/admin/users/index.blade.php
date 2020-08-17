@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-table
  :actions="['Add' => $adminRouteName . 'users.create']"
  :headers="[
    'Name',
    'Email',
    'Action',
  ]"
  :model="$users"
  title="Users"
>
  @foreach($users as $d)    
    <tr>
      <th scope="row">
        {{ $d->name }}
      </th>
      <td>
        {{ $d->email }}
      </td>
      <td>
        <a class="btn btn-default btn-sm" href="{{ route($adminRouteName . 'users.show', $d) }}">
          Show
        </a>
        <a class="btn btn-default btn-sm" href="{{ route($adminRouteName . 'users.edit', $d) }}">
          Edit
        </a>
        <x-itlogiko-submit-button :action="[$adminRouteName . 'users.destroy', $d]">
          Destroy
        </x-itlogiko-submit-button>
      </td>
    </tr>
  @endforeach
</x-itlogiko-table>
@endsection
