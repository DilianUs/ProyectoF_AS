@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
@csrf

@include('empleado.form',['modo'=>'crear'])

</form>
</div>
@endsection
