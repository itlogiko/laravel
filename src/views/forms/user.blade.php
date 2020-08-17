<div class="form-group">
  <label for="name">
    Name
  </label>
  <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name ?? '') }}" />
</div>
<div class="form-group">
  <label for="email">
    Email
  </label>
  <input
    class="form-control"
    id="email"
    @isset($user)
      readonly
    @else
      name="email"
      type="email"
    @endisset
    value="{{ old('email', $user->email ?? '') }}"
  />
</div>
<div class="form-group">
  <label for="password">
    Password
  </label>
  <input class="form-control" id="password" name="password" type="password" value="{{ old('password', $user->password ?? '') }}" />
</div>
