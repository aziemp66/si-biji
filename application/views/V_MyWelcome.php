<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halo Azie</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script defer>
		const button = document.getElementById('btn');

		button.addEventListener('click', () => {
			alert('Halo Azie');
		});
	</script>
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
	<script defer src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="./V_MyWelcome.css">
</head>

<body>
	<div class="container text-center">
		<div class="row">
			<div style="background-color: red;" class="col">
				<h1>Aziepedia</h1>
			</div>
		</div>
		<div class="row">
			<div style="background-color: blue;" class="col-3">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>

			<div style="background-color: green;" class="col">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio asperiores vero ducimus quae odit unde labore voluptate voluptates recusandae sequi consequuntur, ratione voluptatum laborum nam corporis. Culpa sint nemo reiciendis animi, velit dolorum ipsam veniam eos doloribus expedita nihil, corporis mollitia tempora unde ea labore, molestiae amet sed vel. Fugiat?
			</div>
		</div>
		<div style="background-color: yellow;" class="row">
			<div class="col ">
				Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.
			</div>
			<button class="anjay">Not Clicked</button>
		</div>
	</div>
	<script>
		const button = document.querySelector('.anjay');

		console.log(button);
	</script>
</body>

</html>