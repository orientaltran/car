<form action="{{route('postfile')}}" method="post" enctype="multipart/form-data">
	<input type="file" name="myfile">
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">﻿
</form>