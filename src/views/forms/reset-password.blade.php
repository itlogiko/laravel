<input name="token" type="hidden" value="{{ request()->get('token') }}" />
<div class="form-group">
  <label for="email">
    Email
  </label>
  <input class="form-control" id="email" name="email" type="email" value="{{ old('email', request()->get('email')) }}" />
</div>
<div class="form-group">
  <label for="password">
    Password
  </label>
  <input class="form-control" id="password" name="password" type="password" />
</div>
