<div class="form-group">
  <label for="locale">
    Locale
  </label>
  <input class="form-control" id="locale" name="locale" type="text" value="{{ old('locale', $translation->locale ?? '') }}" />
</div>
<div class="form-group">
  <label for="key">
    Key
  </label>
  <input class="form-control" id="key" name="key" type="text" value="{{ old('key', $translation->key ?? '') }}" />
</div>
<div class="form-group">
  <label for="value">
    Value
  </label>
  <input class="form-control" id="value" name="value" type="text" value="{{ old('value', $translation->value ?? '') }}" />
</div>
