@if(session()->has('success'))
  <div class="row">
    <div class="col">
      <x-itlogiko-alert type="success">
        {{ session()->get('success') }}
      </x-itlogiko-alert>
    </div>
  </div>
@endif
