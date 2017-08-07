<html>
	<head></head>
	<body>
		<form action="{{ route('uploadfile') }}" method="POST"  enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{!! csrf_token() !!}}">		
			<label for="">Enter file</label>
			<input type="file" name="uploadfile">
			<button type="submit">add</button>
		</form>
	</body>
</html>