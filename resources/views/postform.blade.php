<form action="{{ route('postform') }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="name">
	<input type="submit">
	<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
</form>

{{  $a='<b>toidicode.com</b>'   }} <br> 

{!!  $a='<b>toidicode.com</b>'  !!}  <br>

<!--print data default use OR-->
{{  $b or 5 }} <br>

<!-- for-->
@for($i = 0; $i < 10; $i++)
	print data {{ $i }}
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@forelse($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse


@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
