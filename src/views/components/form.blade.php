<x-itlogiko-card
  :actions="$actions"
  :title="$title"
>
  <form
    @if(is_array($action))
      action="{{ route($action[0], $action[1]) }}"
    @else
      action="{{ route($action) }}"
    @endif
    method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
  >
    @csrf
    @method($method)
    {{ $slot }}
    <button class="btn btn-block btn-primary" type="submit">
      Submit
    </button>
  </form>
</x-itlogiko-card>
</div>
