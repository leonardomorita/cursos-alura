<form action="{{ $action }}" method="POST">
    @csrf

    @isset($update)
        @method('PUT')
    @endisset

    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" @isset($name)value="{{ $name }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</form>
