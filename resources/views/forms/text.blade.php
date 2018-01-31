<div class="form-group{{ $errors->has($field) ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">{{ $name }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="{{ $field }}" value="{{ old($field) }}" required>

        @if ($errors->has($field))
            <span class="help-block">
            <strong>{{ $errors->first($field) }}</strong>
        </span>
        @endif
    </div>
</div>