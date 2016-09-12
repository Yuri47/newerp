 @extends('layouts.padrao')


@section('content')

@{{title}}
<script>console.log('@{{nameName}}')</script>

<vc-users></vc-users>
<form action="" method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" id="" placeholder="@{{nameName}}" value="@{{nameName}}">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" id="" placeholder="Input field" value="@{{emailEmail}}">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@stop
