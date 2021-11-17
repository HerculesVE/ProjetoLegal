@extends('site.master.layout')

@section('content')
<style>
    body {
  	font-family: 'Lato', sans-serif;
  	font-weight: 400;
  	font-size: 16px;
  	line-height: 1.7;
  	color: #eee;
}

.header {
  	height: 100vh;
  	background-image: linear-gradient(162deg, rgba(35,39,42,0.7903536414565826) 0%, rgba(35,39,42,1) 100%),
     url('https://discord.mx/a8p5l.jpg');
  	
	background-size: cover;
  	background-position: top;
  	position: relative;

  	clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);
	background-color: #1d1e22;
}

.brand-box {
  	position: absolute;
  	top: 40px;
  	left: 40px;
}

.brand { font-size: 20px; }

.text-box {
  	position: absolute;
  	top: 50%;
  	left: 50%;
  	transform: translate(-50%, -50%);
  	text-align: center;
}

.heading-primary {
  	color: #fff;
  	text-transform: uppercase;

  	backface-visibility: hidden;
  	margin-bottom: 30px;
}

.heading-primary-main {
  	display: block;
  	font-size: 40px;
  	font-weight: 400;
  	letter-spacing: 5px;
}

.heading-primary-sub {
  	display: block;
  	font-size: 14px;
  	font-weight: 700;
  	letter-spacing: 3px;
}

.btn:link,
.btn:visited {
  	text-transform: uppercase;
  	text-decoration: none;
  	padding: 10px 20px;
  	display: inline-block;
  	border-radius: 100px;
  	transition: all .2s;
  	position: relative;
}

.btn:hover {
  	transform: translateY(-3px);
  	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
  	transform: translateY(-1px);
  	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
  	background-color: #fff;
  	color: #777;
	font-size: 14px;
}
</style>
<header class="header">
	<div class="brand-box">
		<span class="brand"><a href="https://ashmw.com" style="color: #fff; text-decoration: none;">AshMW.com</a></span>
	</div>
	
	<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main"><strong>Error 404</strong></span>
			<span class="heading-primary-sub">may not be . . . products for own now<br />or a good developer!</span>
		</h1>
	</div>
</header>
@endsection