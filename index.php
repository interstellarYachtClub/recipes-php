<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');	
	</style>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div>
	<div class="w-full top-0 main-nav bg-white shadow-gray shadow-lg h-12">
		<div class="flex flex-row justify-between mx-2 sm:mx-4 items-center self-center">
			<div class="font-bold text-2xl">olive u.</div>
			<ul class="flex flex-row space-x-2 sm:space-x-6 text-xl items-center">
				<li>Add recipe</li>
				<li>Randomizer</li>
				<li>About</li>
			</ul>

		</div>
	</div>

	<!-- <div class="release-panel w-[150px] h-[150px] mt-10 p-4 mx-auto"></div> -->
	<div class="text-justify container mx-auto px-1 w-[375px] sm:w-[640px]">
		<h1 class="text-center text-4xl my-4">Recipes</h1>
		<div class="relative recipe-card w-11/12 mx-auto border border-white rounded bg-gradient-to-t from-[#fff]/50 to-transparent">
			<div class="relative w-[100%] h-[50vh] rounded-b border-white border-b bg-no-repeat bg-cover bg-origin-border bg-[url('https://assets.epicurious.com/photos/6123d145663e652dbef9886e/2:3/w_2940,h_4410,c_limit/French75_RECIPE_082021_20487.jpg')]">
				<div class="absolute bottom-0 right-[5px]">
					<a class="text-white" 
					href="https://www.garlicandzest.com/french-75-classic-gin-champagne-cocktail/">
						Source
					</a>
				</div>
			</div>
			<h2 class="text-center text-2xl my-2">French 75</h2>
			<div>
				<p class="text-center px-8 my-2">Light, herbal and very refreshing, this summer sipper starts with good gin and augments the botanical notes with bitters and lemon. Perfect for a starry night on the patio.</p>
			</div>
			<div>
				<h3 class="text-lg px-4">Overview:</h3>
				<div class="flex flex-row justify-evenly px-4">
					<div class="flex flex-col">
						Preptime:
					</div>
					<div class="flex flex-col">
						Servings:
					</div>
	
				</div>


			</div>
			
			<div class="pl-4">
				<h3 class="text-lg">Ingredients:</h3>
				<ul class="text-center">
					<li>Good Quality Gin</li>
					<li>Simple Syrup</li>
					<li>Lemon Juice</li>
					<li>Bitters</li>
					<li>Champagne </li>
					<li>Lemon Twist</li>
				</ul>
			</div>
			
			<div class="px-4">
				<h3 class="text-lg">Instructions:</h3>
				<text>Add the ice to a cocktail shaker. Pour in the gin, lemon juice, simple syrup and bitters.
					Secure the lid tightly and shake vigorously until the outside of the cocktail shaker is frosty and cold. Strain the cocktail into a flute glass and top with sparkling wine. Drop the lemon into the glass and serve.</text>
			</div>
		</div>
	<p>
		
	</p>
</div>

</div>

</body>
</html>

<?php
$jsonRecipeData = file_get_contents('recipes.json');
$recipeArray = json_decode($jsonRecipeData, true);
print_r($recipeArray);
?>

<style>
	/*
  font-family: 'Karma', serif;
font-family: 'Smooch Sans', sans-serif;
*/
	.main-nav {
		font-family: 'Source Sans Pro', sans-serif;
	}
	.release-panel {
		border-radius: 50px;
background: #c9e6f8;
box-shadow:  -20px 20px 60px #abc4d3,
             20px -20px 60px #e7ffff;
	}

	body {
		background: #d9a7c7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #fffcdc, #d9a7c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #fffcdc, #d9a7c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	p {
		font-family: 'EB Garamond', serif;
		font-weight: 200;
		font-style: italic;
	}
	.recipe-card ul {
		font-family: 'EB Garamond', serif;
		font-weight: 200;
	}

	ul li:nth-child(even) {
		background-color: rgba(255, 255, 255, .25);
	}

	text {
		font-family: 'EB Garamond', serif;
		font-weight: 200;
	}



	h1 {
		font-family: 'EB Garamond', serif;
		font-weight: 800;
	}
	h2 {
		font-family: 'EB Garamond', serif;
		font-weight: 600;
	}

	</style>