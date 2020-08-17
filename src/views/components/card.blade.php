<div class="card">
  <div class="card-header">
    {{ $title }}
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col">
        {{ $slot }}
      </div>
    </div>
  </div>
  @if(!empty($actions))
    <div class="card-footer d-flex justify-content-between">
      @foreach($actions as $actionName => $actionRoute)
        @if(is_array($actionRoute))
          @if($actionRoute[2] ?? false)
            <x-itlogiko-submit-button
              :action="[$actionRoute[0], $actionRoute[1]]"
              :method="$actionRoute[2]"
            >
              {{ $actionName }}
            </x-itlogiko-submit-button>
          @else
            <a
              class="btn btn-default"
              href="{{ route($actionRoute[0], $actionRoute[1]) }}"
            >
              {{ $actionName }}
            </a>
          @endif
        @else
          <a
            class="btn btn-default"
            href="{{ route($actionRoute) }}"
          >
            {{ $actionName }}
          </a>
        @endif
      @endforeach
    </div>
  @endif
</div>
