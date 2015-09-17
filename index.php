<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/material.min.css">
		<script src="js/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>
	<body>
		<!-- Uses a transparent header that draws on top of the layout's background -->
			<style>
			.demo-layout-transparent {
			  background: url('img/pic/smart_phone_world.jpg') center / cover;
			}
			.demo-layout-transparent .mdl-layout__header,
			.demo-layout-transparent .mdl-layout__drawer-button {
			  
			  color: white;
			}
			</style>

			<div class="demo-layout-transparent mdl-layout mdl-js-layout">
			  <header class="mdl-layout__header mdl-layout__header--transparent">
				<div class="mdl-layout__header-row">
				  <!-- Title -->
				  <span class="mdl-layout-title">Title</span>
				  <!-- Add spacer, to align navigation to the right -->
				  <div class="mdl-layout-spacer"></div>
				  <!-- Navigation -->
				  <nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="">Link</a>
					<a class="mdl-navigation__link" href="">Link</a>
					<a class="mdl-navigation__link" href="">Link</a>
					<a class="mdl-navigation__link" href="">Link</a>
				  </nav>
				</div>
			  </header>
			  <div class="mdl-layout__drawer">
				<span class="mdl-layout-title">Title</span>
				<nav class="mdl-navigation">
				  <a class="mdl-navigation__link" href="">Link</a>
				  <a class="mdl-navigation__link" href="">Link</a>
				  <a class="mdl-navigation__link" href="">Link</a>
				  <a class="mdl-navigation__link" href="">Link</a>
				</nav>
			  </div>
			  <main class="mdl-layout__content">
			  </main>
			</div>
	</body>
</html>