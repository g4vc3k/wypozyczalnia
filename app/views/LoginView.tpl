{extends file="main.tpl"}
{block name="content"}
<!-- Main -->
<section id="main" class="container">
	<section class="box">
	<h3>login</h3>
	<form method="post" id="login" action="{rel_url action="login"}">
		<div class="row gtr-uniform gtr-50">
			<div class="col-6 col-12-mobilep">
				<input type="email" name="email" id="email" value="" placeholder="Email" />
			</div>
			<div class="col-6 col-12-mobilep">
				<input type="password" name="haslo" id="name" value="" placeholder="Hasło" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" /></li>
				</ul>
			</div>
		</div>
	</form>
	</section>
</section>

{/block}