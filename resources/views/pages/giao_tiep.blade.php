@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/chuyen_nganh.css')}}">
<div id="content">
	<div class="row">
		<div class="col-md-12">
			<h2>{{$giao_tiep[0]}}</h2>
			<p>{{$giao_tiep[1]}}</p>
			<img src="{{Asset('public/images/chuyen_nganh.jpg')}}" class="img_chuyennganh">
			<p> - {{$giao_tiep[2]}}</p>
			<p> - {{$giao_tiep[3]}}</p>
			<p> - {{$giao_tiep[4]}}</p>
			<img src="{{Asset('public/images/bottom.jpg')}}">
		</div>
	</div>
	<div class="row" align="center">
		<div class="col-md-6" id="register">
			
		</div>
	</div>
</div>

@stop
