<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Selectal</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
	</head>
	<body>
		<a href="https://github.com/Kovee98/selectal" target="_blank"><div id="fork">Fork me on GitHub</div></a>

		<div id="header" class="gradient shadow-inset-bottom">
			<h1>Selectal</h1>
			<ul class="navbar" id="main-navbar">
				<li><a href="#install">Install</a></li>
				<li><a href="#use">Use</a></li>
				<li><a href="#customize">Customize</a></li>
			</ul>
		</div>

		<div class="content">

			<div class="section" id="install">
				<h2>Install</h2>
				<div class="horizontal-line"></div>
				<p>Run the following command:</p>
				<p class="code">npm install selectal</p>

				<p>or manually download the files you need from <a href="https://github.com/Kovee98/selectal/releases" target="_blank">GitHub Releases</a> or from here</p>
			</div>

			<div class="section" id="use">
				<h2>Use</h2>
				<div class="horizontal-line"></div>

				<p>In the javascript files where you need it:</p>
				<br>
				<p class="code">
					const selectal = require('selectal');
					<br>
					var mySelect = new Selectal('#my-select');
				</p>
				<br>
				<p>or include</p>
				<br>
				<p class="code">
					<?php
						echo htmlspecialchars("<script src='<installation_directory>/dist/selectal.min.js'>"); 
					?>
				</p>
				<br>
				<p>in your html. and include the base styling by including the script in your html:</p>
				<br>
				<p class="code">
					<?php
						echo htmlspecialchars("<link rel=\"stylesheet\" href=\"<installation_directory>/dist/selectal.min.css\" crossorigin=\"anonymous\"> ");
					?>
				</p>
			</div>


			<div class="section" id="customize">
				<h2>Customize</h2>
				<div class="horizontal-line"></div>
				<p>Use the following classes to customize to your hearts content.</p>
				<br>
				<p><strong>Classes</strong></p>
				<img src="<?php echo base_url('assets/img/styling_diagram.png');?>">
				<br>
				<h3>
					<span>selectal-wrapper</span>
				    	<br><span style="color:#007FFF;			margin-left:40px">selectal-group</span>
				        	<br><span style="color:#00cc00;		margin-left:80px">selectal-btn</span>
				            	<br><span style="color:#FFFF33;	margin-left:120px">selectal-selected-item</span>
				        	<br><span style="color:#f07b27;		margin-left:80px">selectal-dropdown</span>
				            	<br><span style="color:#ff3333;	margin-left:120px">selectal-dropdown-option</span>
				</h3>
			</div>

		</div>
		
		<div class="shadow-inset-top" id="footer">
			<div id="projects">
				<div id="github">
					<a href="https://github.com/Kovee98/selectal" target="_blank"><img class="white-filter" src="<?php echo base_url('assets/img/github.png');?>"></a>
				</div>
				<div id="npm">
					<a href="https://www.npmjs.com/package/selectal" target="_blank"><img class="white-filter" src="<?php echo base_url('assets/img/npm_transparent.png');?>"></a>
				</div>
			</div>

			<div class="dot"></div>
			<h2 class="gradient-text">Selectal</h2>
			<div class="dot"></div>

			<div id="contact">
				<p>Joshua Kovalchik</p>
				<p>kovee98@gmail.com</p>
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
	</body>
</html>