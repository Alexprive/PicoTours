
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title>circleCarousel: Circular Carousel Demo</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/circle.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body { background-color: #fafafa; font-family: 'Open Sans'; }
h1 { margin-top: 150px; text-align: center; }

/*
	create by nasir farhadi
	email : nasirfarhadi92@gmail.com
	Github : nasirfarhadi92
*/

	.holderCircle{
		width:500px;
		height:500px;
		border-radius:100%;
		margin:60px auto;
		position:relative;
	}
	
	/* .holderCircle::after{
		content:'';
		width:500px;
		height:500px;
		border-radius:100%;
		border:1px solid #000;
		position:absolute;
		top:0;
	} */

	.dotCircle{
		width:100%;
		height:100%;
		position:absolute;
		margin:auto;
		top:0;
		left:0;
		right:0;
		bottom:0;
		border-radius:100%;
		z-index:20;
	}

	.dotCircle  .itemDot{
		display:block;
		width:80px;
		height:80px;
		position:absolute;
		background:#ddd;
		color:#fff;
		border-radius:100%;
		text-align: center;
		line-height: 80px;
		font-size:30px;
		z-index:3;
		cursor:pointer;		
	}
	
	.dotCircle  .itemDot::after {
		content:"";
		width: 82px;
		height: 82px;
		position: absolute;
		border-radius: 100%;
		top: 0;
		left: 0;
		right: 0;
		margin: auto;
		z-index:2;
		border:3px solid #fff;
	}
	.dotCircle  .itemDot::before{
		content:"";
		width: 85px;
		height: 85px;
		position: absolute;
		border-radius: 100%;
		top: 0;
		left: 0;
		right: 0;
		margin: auto;
		z-index:2;
		border:3px solid;
		
	}
	
	
	.dotCircle  .itemDot1{
		background:#ffb048;
	}
	.dotCircle  .itemDot1::after	{
		
	}
	.dotCircle  .itemDot1::before{
		border-color:#ffb048
	}
	
	
	.dotCircle  .itemDot2{
		background:#28a9e0;
	}
	.dotCircle  .itemDot2::after	{
		
	}
	.dotCircle  .itemDot2::before{	
		border-color:#28a9e0;
	}

	.dotCircle  .itemDot3{
		background:#89c445;
	}
	
	.dotCircle  .itemDot3::after	{	
		
	}
	.dotCircle  .itemDot3::before{
		border-color:#89c445;
	}
	
	.dotCircle  .itemDot4{
		background:#fca72b;
	}
	
	.dotCircle  .itemDot4::after	{
	
	}
	.dotCircle  .itemDot4::before{
	border-color:#fca72b;
	}
	
	.dotCircle  .itemDot5{
	background:#3dbea0;
		
	}
	
	.dotCircle  .itemDot5::after	{
	
	}
	.dotCircle  .itemDot5::before{	
	border-color:#3dbea0;
	}
	
	
	.dotCircle  .itemDot6{
		background:#aa229d;
	}
	.dotCircle  .itemDot6::after	{
	
	}
	.dotCircle  .itemDot6::before{	
		border-color:#aa229d;
	}
	
	.dotCircle  .itemDot7{
		background:#e06410;
	}
	.dotCircle  .itemDot7::after	{
		
	}
	.dotCircle  .itemDot7::before{
		border-color:#e06410;	
	}
	
	.dotCircle  .itemDot8{
	background:#1362b7;
		
	}
	.dotCircle  .itemDot8::after	{
	
	}
	.dotCircle  .itemDot8::before{	
	border-color:#1362b7;
	}
	
	.dotCircle  .itemDot9{
		background:#e52c47;
		
	}
	.dotCircle  .itemDot9::after	{
	
	}
	.dotCircle  .itemDot9::before{
border-color:#e52c47;	
	}
	
	.dotCircle  .itemDot10{
		background:#fe4491;
	}
	.dotCircle  .itemDot10::after{

	}
	.dotCircle  .itemDot10::before{	
	border-color:#fe4491;
	}
	
	
	
	
	
	.dotCircle .itemDot.active{
		background:#34495e;
		color:#fff;
		transition:0.5s;
	}
	.dotCircle .itemDot.active::before{
		border-color:#34495e;
	}	
	
	.dotCircle  .itemDot .forActive{
		width:56px;
		height:56px;
		position:absolute;
		top:0;
		left:0;
		right:0;
		bottom:0;
		display:none;
	}
	
	.dotCircle  .itemDot .forActive::after{
		content: '';
		width: 5px;
		height: 5px;
		border: 3px solid #FE9290;
		bottom: -31px;
		left: -14px;
		filter: blur(1px);
		position: absolute;
		border-radius: 100%;
	}
	
	.dotCircle  .itemDot .forActive::before{
		content: '';
		width: 6px;
		height: 6px;
		filter: blur(5px);
		top: -15px;
		position: absolute;
		transform: rotate(-45deg);
		border: 6px solid #F48E2A;
		right: -39px;
	}
	
	
	.dotCircle  .itemDot.active .forActive{
		display:block;
	}
	
	
	.dotCircle .itemDot:hover{
		background:#34495e;
		color:#fff;
		transition:0.5s;
	}
	.dotCircle .itemDot:hover::before{
		border-color:#34495e;
	}	
	
	
	
	
	
	
	.contentCircle{
		width: 250px;
		height: 250px;
		border-radius: 100%;
		background: url(../img/bgcircle.png) no-repeat;
		color: #fff;
		position: relative;
		top: 137px;
		right: 0;
		bottom: 0;
		left: 0;
		box-shadow: 0px 0px 69px 1px #2b152e;
		margin: auto;
	}
	
	.contentCircle .CirItem{
		border-radius: 100%;
		color: #fff;
		position: absolute;
		text-align: center;
		bottom: 0;
		left: 0;
		opacity: 0;
		transform: scale(0);
		transition: 0.5s;
		font-weight: bold;
		font-size: 13px;
		width: 100%;
		height: 100%;
		top: 0;
		right: 0;
		margin: auto;
		background: #00000054;
		line-height: 250px;
	}
	
	.CirItem.active{
		z-index:1;
		opacity:1;
		transform:scale(1);
		transition:0.5s;
	}
	
	
	.contentCircle .CirItem1{
		background:rgba(255, 176, 72, 0.83);
	}
	.contentCircle .CirItem1::after,
	.contentCircle .CirItem2::after,
	.contentCircle .CirItem3::after,
	.contentCircle .CirItem4::after,
	.contentCircle .CirItem5::after,
	.contentCircle .CirItem6::after,
	.contentCircle .CirItem7::after,
	.contentCircle .CirItem8::after,
	.contentCircle .CirItem9::after,
	.contentCircle .CirItem10::after{
		content:'';
		width:50%;
		height:100%;
		border-bottom-left-radius: 250px;
		border-top-left-radius: 250px;
		position:absolute;
		top:0;
		left:0;
		z-index:-1;
		background:rgba(0, 0, 0, 0.33);
	}
	.contentCircle .CirItem2{
		background:rgba(40, 169, 224, 0.83);
	}
	.contentCircle .CirItem3{
		background:rgba(137, 196, 69, 0.83);
	}
	.contentCircle .CirItem4{
		background:rgba(252, 167, 43, 0.83);
	}
	.contentCircle .CirItem5{
		background:rgba(61, 190, 160, 0.83);
	}
	.contentCircle .CirItem6{
		background:rgba(170, 34, 157, 0.83);
	}
	.contentCircle .CirItem7{
		background:rgba(224, 100, 16, 0.83);
	}
	.contentCircle .CirItem8{
		background:rgba(19, 98, 183, 0.83);
	}
	.contentCircle .CirItem9{
		background:rgba(229, 44, 71, 0.83);
	}
	.contentCircle .CirItem10{
		background:rgba(254, 68, 145, 0.83);
	}

	
	@media only screen and (min-width: 300px) and (max-width: 599px){
	
		.holderCircle {
			width: 300px;
			height: 300px;
			margin:110px auto;
		}
		.holderCircle::after {
			width: 100%;
			height: 100%;
		}
		
		.dotCircle{
			width: 100%;
			height: 100%;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			margin: auto;

		}
	
	
	}
	@media only screen and (min-width: 600px) and (max-width: 767px){
	
	}
	@media only screen and (min-width: 768px) and (max-width: 991px){
	
	}
	@media only screen and (min-width: 992px) and (max-width: 1199px){
	
	}
	@media only screen and (min-width: 1200px) and (max-width: 1499px){
	
	}
	
	@media only screen and (min-width: 1500px) {
	
	}
	
	
	
	
	
	
	
	
	
	
	
</style>
</head>

<body>
<h1>circleCarousel: Circular Carousel Demo</h1>

	<div class="holderCircle">

		<div class="dotCircle">
			<span class="itemDot active itemDot1" data-tab="1">
				<i class="fa fa-life-ring"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot2" data-tab="2">
				<i class="fa fa-bomb"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot3" data-tab="3">
				<i class="fa fa-heartbeat"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot4" data-tab="4">
				<i class="fa fa-leaf"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot5" data-tab="5">
				<i class="fa fa-magic"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot6" data-tab="6">
				<i class="fa fa-pencil-square-o"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot7" data-tab="7">
				<i class="fa fa-rss-square"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot8" data-tab="8">
				<i class="fa fa-ship"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot9" data-tab="9">
				<i class="fa fa-truck"></i>
				<span class="forActive"></span>
			</span>
			<span class="itemDot itemDot10" data-tab="10">
				<i class="fa fa-pied-piper"></i>
				<span class="forActive"></span>
			</span>
		</div>

		<div class="contentCircle">

			<div class="CirItem active CirItem1">
				TEXT SAMPLE FOR ITEM 1
			</div>
			<div class="CirItem CirItem2">
				TEXT SAMPLE FOR ITEM 2
			</div>
			<div class="CirItem CirItem3">
				TEXT SAMPLE FOR ITEM 3
			</div>
			<div class="CirItem CirItem4">
				TEXT SAMPLE FOR ITEM 4
			</div>
			<div class="CirItem CirItem5">
				TEXT SAMPLE FOR ITEM 5
			</div>
			<div class="CirItem CirItem6">
				TEXT SAMPLE FOR ITEM 6
			</div>
			<div class="CirItem CirItem7">
				TEXT SAMPLE FOR ITEM 7
			</div>
			<div class="CirItem CirItem8">
				TEXT SAMPLE FOR ITEM 8
			</div>
			<div class="CirItem CirItem9">
				TEXT SAMPLE FOR ITEM 9
			</div>
			<div class="CirItem CirItem10">
				TEXT SAMPLE FOR ITEM 10
			</div>
		</div>

	</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="js/circle.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>
