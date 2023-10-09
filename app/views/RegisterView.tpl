{extends file="main.tpl"}
{block name="content"}
<!-- Main -->
	<section id="main" class="container">
		<section class="box">
		<h3>Rejestracja</h3>
		<form method="post" action="{rel_url action="register"}">
			<div class="row gtr-uniform gtr-50">
				<div class="col-6 col-12-mobilep">
					<label for="imie">Imię</label>
					<input type="text" name="imie" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Nazwisko</label>
					<input type="text" name="nazwisko" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Email</label>
					<input type="email" name="email" id="email" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Hasło</label>
					<input type="password" name="haslo" id="haslo" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Telefon</label>
					<input type="text" name="telefon" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Start prawka</label>
					<input type="date" name="start_prawka" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Miejscowość</label>
					<input type="text" name="miejscowosc" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Ulica</label>
					<input type="text" name="ulica" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Nr lokalu</label>
					<input type="numeric" name="nr_lokalu" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Data urodzenia</label>
					<input type="date" name="data_ur" id="name" value=""/>
				</div>
				<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zarejestruj" /></li>
				</ul>
				</div>
            </div>
		</form>
		</section>
	</section>

{/block}