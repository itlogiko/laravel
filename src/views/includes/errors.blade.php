@if($errors->any())
  <div class="row">
    <div class="col">
      <x-itlogiko-alert type="danger">
        <ul class="list-unstyled mb-0">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </x-itlogiko-alert>
    </div>
  </div>
@endif
