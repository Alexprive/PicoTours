@extends ('layouts.app')

<style>
	dl,
dd,
dt
	{width:100%;display:block;position:relative}

.title{
	width:30%;
	padding:0 32px;
	top:50%;
	left:0;
	display:block;
	position:absolute;
	transform:translate(0,-50%)
	}

.title dl
	{margin:0;padding:16px 0}

.title dd
	{background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAkFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADDIYgjAAAAL3RSTlMA4GCAcNCwMBD7zHgL9eYf/dnBE1Q7JAXz7pZjRhm3qY9ALBbUrZ2KbFpNMwm+o0/nJUoAAAEnSURBVDjLrZPZcoIwFIYPKGpC2EGQRVnctf3f/+0q6WQk7YQrv5vMJN8kORsJ14IOr3Ka4MKzpvgATlPD8hKaEuAYYf98b8CiP0I8OIjFnEAJx7cm1LaifwmRbV8L1kyELaDwaQghsac3VAtFTZSOa6wL/1l8WMjLlcbh8SsM7fkuhYBBx5VC5wG4ySeatUYvn9ju4GYsMv5hGYHdAhYbhQIOg4+lFPKNhhgFOKIO8ZWPQrODRnilEn5AF0QbGYXYOxq8vofegyrstoZErYswpY6xzpDJxoJLrygrQ6qfHHtKIlzetUiXioyISiB0Y6wMDUMJ8+0C4IIMN6QoqcVMuVucHMwJHABfzQnskM12lEhUR+mjp3NAZhpeiY8jKdT4a3jnXp3/AD9VMDFSOzKdAAAAAElFTkSuQmCC')no-repeat left center;}

.stairs{
	width:70%;
	margin:0 0 0 30%;
	display:flex;
	position:relative;
	flex-flow:column wrap
	}


.row_1
	{margin:62px 0 0 0;order:1}

.row_2
	{margin:40px 0;order:2}

.row_3
	{order:3}

.row_4
	{margin:40px 0;order:4}

.row_5
	{order:5}

[class*="number"]{
	width:180px;
	height:80px;
	display:block;
	float:left;
	position:relative;
	box-shadow:1px 0 1px -1px #595959
	}

[class*="number"]:before{
	background:inherit;
	content:"";
	width:100%;
	height:40px;
	top:-40px;
	left:29px;
	display:block;
	position:absolute;
	transform:skewX(-55deg);
	transform-origin:100%;
	box-shadow:1px 0 1px -1px #595959,0 -1px 1px -1px #fff,0 1px 1px -1px #fff
	}

.number_1
	{background:#008080;margin:0 0 0 229px}

.number_2
	{background:#bc003b;margin:0 0 0 172px}

.number_3
	{background:#ff9900;margin:0 0 0 115px}

.number_4
	{background:#5969a6;margin:0 0 0 58px}

.number_5
	{background:#fc490b}

[class*="desc"]{
	width:400px;
	height:80px;
	margin:0 0 0 20px;
	display:block;
	position:relative;
	float:left
	}

[class*="desc"] dl
	{margin:0;padding:0}


@media (max-width:400px){
	.title{
		width:100%;
		top:0;
		position:relative;
		transform:translate(0,0)
		}
	}

@media screen and (min-width:401px) and (max-width:1199px){
	.title{
		width:400px;
		top:0;
		position:relative;
		transform:translate(0,0)
		}
	}

@media (max-width:849px){
	.row_1
		{margin:0;order:5}

	.row_2
		{margin:62px 0;order:4}

	.row_4
		{margin:62px 0;order:2}

	.row_5
		{margin:62px 0 0 0;order:1}
	
	[class*="number"]
		{margin:0}
	
	[class*="desc"]
		{width:100%;margin:0;padding:0 16px}
	}

@media (max-width:1199px){
	.stairs
		{width:100%;margin:0}
	}
/*                                       ! Responsive Stairs Diagram Ended Here ...
=======================================================================================================================*/
</style>

<div class="stairs">
	<div class="row_1">
		<div class="number_1"><h2>05</h2></div>
		<div class="desc_winning">
			<dl>
				<dt>Enjoy your stay</dt>
				<dd>To make sure you enjoy the full duration of the tour, please arrive at the start location 5 minutes before starting time. </dd>
			</dl>
		</div>
	</div>
	<div class="row_2">
		<div class="number_2"><h2>04</h2></div>
		<div class="desc_working">
			<dl>
				<dt>Wait for confirmation</dt>
				<dd>The tour guide will contact you as soon as possible to confirm your booking or suggest an alternative date. </dd>
			</dl>
		</div>
	</div>
	<div class="row_3">
		<div class="number_3"><h2>03</h2></div>
		<div class="desc_searching">
			<dl>
				<dt>Book a tour</dt>
				<dd>Contact the tour guide of your choice directly through our website and suggest a date and time for your tour.</dd>
			</dl>
		</div>
	</div>
	<div class="row_4">
		<div class="number_4"><h2>02</h2></div>
		<div class="desc_planning">
			<dl>
				<dt>Pick a tour</dt>
				<dd>Make use of our categories to quickly filter which tour suits you best. Please pay special attention to what's included. </dd>
			</dl>
		</div>
	</div>
	<div class="row_5">
		<div class="number_5"><h2>01</h2></div>
		<div class="desc_timing">
			<dl>
				<dt>Pick a city</dt>
				<dd>Browse our website for your favorite holiday destination or search for a city near you.</dd>
			</dl>
		</div>
	</div>
</div>
<br>
