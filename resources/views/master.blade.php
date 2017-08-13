<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        @section('content')
        	<p>Dòng này là của master.blade.php</p>
        @show
    </div>
</body>
</html>

<!---Như ở trên mình có sử dụng các từ khóa lạ như yield(),section(),extends().
yield(),section-@show: có tác dụng như một biến nó được tạo ra nhằm báo cho blade template  biết vị trí ý sẽ dùng để chèn nội dung cho biến đó.

extends(): Có tác dụng khai báo cho blade template biết là file hiện tại đang kế thừa từ file nào
section('tenbien','noidungngan'),section('tenbien') noidungdai endsection
-->
