<form action="{{ route('postform') }}" method="post">
	<input type="text" name="name">
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>