<!DOCTYPE html>
<html>
<head>
	<title>Image slider</title>
</head>
<style>
	body{
		background-color: rgba(26,34,36,0.86);
		
	}
	h1{
		padding-bottom: 5%;
		color: white;
		line-height: 1.5em;
		letter-spacing: 0.5rem;
		text-align: center;
	}
	.Maindiv{
		width: 50%;
		height: 400px;
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
		background-image: url('image/christmas-4.jpg');		
		background-size: 100% 100%;
		box-shadow: 1px 2px 5px 2px white;
		animation: zoom 9s infinite ease-in-out ;
	}
	@keyframes zoom{
		0%{  background-image: url('image/christmas-3.jpg'); }
		35%{ background-image: url('image/christmas-2.jpg'); }
		70%{ background-image: url('image/christmas-2.jpg'); }
		/*100% { background-image: url('image/christmas-3.jpg'); }*/
	}
	
</style>
<body>
	<h1>CSS Animation slider</h1>
	<div class="Maindiv">
		<!-- <img src="image/christmas-4.jpg"> -->
	</div>

</body>
</html>