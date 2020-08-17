<x-itlogiko-card
  :actions="$actions"
  :title="$title"
>
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
      @if(!empty($headers))
        <thead>
          <tr>
            @foreach($headers as $header)
              <th scope="col">
                {{ $header }}
              </th>
            @endforeach
          </tr>
        </thead>
      @endif
      <tbody>
        {{ $slot }}
      </tbody>
    </table>
  </div>
  {{ $model->links() }}
</x-itlogiko-card>
