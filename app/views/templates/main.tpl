<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Wypożyczalnia samochodów</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{rel_url action="assets/css/main.css"}" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="{rel_url action="Strona"}">Wypożyczalnia samochodów</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="{rel_url action="Strona"}">Strona główna</a></li>
							{if empty($osoba->login)}<li><a href="{rel_url action="registerShow"}" class="button">Zarejestruj</a></li>
							<li><a href="{rel_url action="loginShow"}" class="button">Zaloguj</a></li>{/if}
							{if !empty($osoba->login)}<li><a href="{rel_url action="konto"}">Moje Konto</a></li>
							<li><a href="{rel_url action="logout"}" class="button">Wyloguj</a></li>{/if}
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>Wypożyczalnia samochodów</h2>
					<p>Zaplanuj swoją wymarzoną podróż.</p>
				</section>
            

            
{block name=top} {/block}
	
{block name=content} {/block}

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Wypożyczalnia samochodów. Wyk. Gracjan Knopik</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script src="{rel_url action="assets/js/szukaj.js"}"></script>
			<script src="{rel_url action="assets/js/jquery.min.js"}"></script>
			<script src="{rel_url action="assets/js/jquery.dropotron.min.js"}"></script>
			<script src="{rel_url action="assets/js/jquery.scrollex.min.js"}"></script>
			<script src="{rel_url action="assets/js/browser.min.js"}"></script>
			<script src="{rel_url action="assets/js/breakpoints.min.js"}"></script>
			<script src="{rel_url action="assets/js/util.js"}"></script>
			<script src="{rel_url action="assets/js/main.js"}"></script>

	</body>
</html>