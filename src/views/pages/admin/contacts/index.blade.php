@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-table
  :headers="[
    'Name',
    'Email',
    'Message',
    'Action',
  ]"
  :model="$contacts"
  title="Contacts"
>
  @foreach($contacts as $d)    
    <tr>
      <th scope="row">
        {{ $d->name }}
      </th>
      <td>
        {{ $d->email }}
      </td>
      <td>
        {{ $d->message }}
      </td>
      <td>
        <a class="btn btn-default btn-sm" href="{{ route($adminRouteName . 'contacts.show', $d) }}">
          Show
        </a>
      </td>
    </tr>
  @endforeach
</x-itlogiko-table>
@endsection
