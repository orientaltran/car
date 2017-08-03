<form action="/public/postfile" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="file" name="myfile">
	<input type="submit">
	<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">﻿ -->
</form>