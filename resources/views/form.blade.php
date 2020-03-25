<form method="{{ $specialMethod ? 'post' : $method }}">
    @if ($method == 'post')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @endif
    @if ($specialMethod)
        <input type="hidden" name="_method" value="{{ $method }}">
    @endif
</form>
