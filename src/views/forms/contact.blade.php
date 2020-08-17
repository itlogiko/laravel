<div class="form-group">
  <label for="name">
    Name
  </label>
  <input class="form-control" id="name" name="name" type="text" value="{{ old('name', Auth::user()->name ?? '') }}" />
</div>
<div class="form-group">
  <label for="email">
    Email
  </label>
  <input class="form-control" id="email" name="email" type="email" value="{{ old('email', Auth::user()->email ?? '') }}" />
</div>
<div class="form-group">
  <label for="message">
    Message
  </label>
  <textarea class="form-control" id="message" name="message" rows="3"></textarea>
</div>
