<div {{ $attributes->merge(['class' => "alert alert-dismissible alert-{$type} fade show"]) }}>
  {{ $slot }}
  <button class="close" data-dismiss="alert" type="button">
    <span>
      &times;
    </span>
  </button>
</div>
