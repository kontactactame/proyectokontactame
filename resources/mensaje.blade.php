@extends('index')
@section('contenido')
<center>
<H1>{{$proceso}}</h1>
<br>

<b>{{$mensaje}}</b>
</center>
<br>
<CENTER> <span><img src="{{asset('assets/img/1.jpg')}}"  style="max-width: 300px; max-height: 300px"  /></span><CENTER>

<a href="{!!URL::to('index')!!}" class="btn btn-default">Regresar111111 </a> 
@stop