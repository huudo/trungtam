@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/chuyen_nganh.css')}}">
<div id="content">
	<div class="row">
		<div class="col-md-12">
			<h2>{{$chuyen_nganh[0]}}</h2>
			<p>{{$chuyen_nganh[1]}}</p>
			<img src="{{Asset('public/images/chuyen_nganh.jpg')}}" class="img_chuyennganh">
			<p> - {{$chuyen_nganh[2]}}</p>
			<p> - {{$chuyen_nganh[3]}}</p>
			<p> - {{$chuyen_nganh[4]}}</p>
			<img src="{{Asset('public/images/bottom.jpg')}}">
		</div>
	</div>
	<div class="row" align="center">
		<div class="col-md-6" id="register">
			
		</div>
	</div>
	<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
</div>

@stop
