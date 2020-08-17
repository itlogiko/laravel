<form
  @if(is_array($action))
    action="{{ route($action[0], $action[1]) }}"
  @else
    action="{{ route($action) }}"
  @endif
  class="d-inline"
  method="POST"
  onsubmit="confirm('Are you sure?')"
>
  @csrf
  @method($method)
  <button class="btn btn-default btn-sm" href="javascript:void(0)" type="submit">
    {{ $slot }}
  </button>
</form>
