{extends file="main.tpl"}
{block name="content"}
			<!-- Main -->
				<section id="main" class="container">

                    
						
                            {if \core\RoleUtils::inRole('Dealer')}
                    <section class="box special">
					<h2>Jesteś zalogowany jako administrator.</h2>
</section>
{/if}
						{* <span class="image featured"><img src="images/pic01.jpg" alt="" /></span> *}
					
                    
					<section class="box special">
						<header class="major">
                            <h2><b>Wyjątkowe samochody</b>
							<br />
							<b>na każdą kieszeń</b></h2>
							<p><b>Wybierz samochód</b> spośród popularnych marek i pewnych modeli,<br />
							którym <b>na pewno dojedziesz bezpiecznie do celu.</b></p>
						</header>
						{* <span class="image featured"><img src="images/pic01.jpg" alt="" /></span> *}
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon solid major fa-bolt accent2"></span>
								<h3>Ekonomiczność</h3>
								<p>Nikt nie chce płacić dużo za paliwo, dlatego wybraliśmy dla Ciebie modele
                                samochodów, które nie tylko pozwolą na dynamiczną jazdę, ale również niski
                                pobór paliwa.</p>
							</section>
							<section>
								<span class="icon solid major fa-chart-area accent3"></span>
								<h3>Bezpieczeństwo</h3>
								<p>Wszystkie części w samochodach są na bieżąco kontrolowane przez zaufanych
                                mechaników, którzy dbają o to, byś mógł przejechać tysiące kilometrów bezawaryjnie.</p>
							</section>
						</div>
					</section>

                    <input id="wyszukaj" type="text" placeholder="Wyszukaj" /><br>
					
                    
					<div id="row" class="row">
					{foreach $wypozyczalnia->samochod as $s}
						<div class="col-6 col-12-narrower">
							<section class="box special">
								<span class="image featured"><img src="{rel_url action="images/{$s["zdjecie"]}.jpg"}" alt="" /></span>
								<h3>{$s["marka"]} {$s["model"]}</h3>
								<p>Skrzynia: {$s["skrzynia"]}</p>
								<h3>{$s["cena"]} zł / dzień</h3>
								{if !empty($osoba->id)}<form action="{rel_url action="wypozycz" id=$s['id']}" method="post">
									<label for="dataOd">Data wypożyczenia</label>
									<input type="date" name="dataOd" /><br>
									<label for="dataDo">Data oddania</label>
									<input type="date" name="dataDo" /><br>
									<input type="submit" name="submit" class="button" value="Wypożycz" />
								</form>{/if}
							</section>
						</div>
					{/foreach}
					</div>
					<div id="podstrony" class="center">
						{foreach $wypozyczalnia->auta as $a}
							<form action="{rel_url action="strona" id=$a}#row" method="post">
								<input type="submit" class="button icon solid fa-file" value="{$a}"/>
							</form>
						{/foreach}
					</div>

				</section>

{/block}