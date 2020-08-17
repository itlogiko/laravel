@extends('itlogiko::layouts.page')

@section('pageContent')
<x-itlogiko-table
  :actions="[
    'Add' => $adminRouteName . 'translations.create',
    'Export' => [$adminRouteName . 'translations.export', null, 'POST'],
  ]"
  :headers="[
    'Locale',
    'Key',
    'Value',
    'Action',
  ]"
  :model="$translations"
  title="Translations"
>
  @foreach($translations as $d)    
    <tr>
      <th scope="row">
        {{ $d->locale }}
      </th>
      <td>
        {{ $d->key }}
      </td>
      <td>
        {{ $d->value }}
      </td>
      <td>
        <a class="btn btn-default btn-sm" href="{{ route($adminRouteName . 'translations.show', $d) }}">
          Show
        </a>
        <a class="btn btn-default btn-sm" href="{{ route($adminRouteName . 'translations.edit', $d) }}">
          Edit
        </a>
        <x-itlogiko-submit-button :action="[$adminRouteName . 'translations.destroy', $d]">
          Destroy
        </x-itlogiko-submit-button>
      </td>
    </tr>
  @endforeach
</x-itlogiko-table>
@endsection
