 @extends('layouts.padrao')


@section('content')


<h1>Usuarios</h1>
<h1>@{{title}} </h1>
<vc-users users="{{$users}}"></vc-users>




@stop