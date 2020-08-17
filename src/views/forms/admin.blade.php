<div class="form-group">
  <label for="name">
    Name
  </label>
  <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $admin->name ?? '') }}" />
</div>
<div class="form-group">
  <label for="email">
    Email
  </label>
  <input
    class="form-control"
    id="email"
    @isset($admin)
      readonly
    @else
      name="email"
      type="email"
    @endisset
    value="{{ old('email', $admin->email ?? '') }}"
  />
</div>
<div class="form-group">
  <label for="password">
    Password
  </label>
  <input class="form-control" id="password" name="password" type="password" value="{{ old('password', $admin->password ?? '') }}" />
</div>
