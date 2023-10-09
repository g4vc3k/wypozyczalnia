{extends file="main.tpl"}
{block name="content"}
			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
                            <h2>Twoje samochody znajdują się tutaj</h2>

							<p>Pamiętaj, żeby odwieźć samochód na nasz plac na czas!</p>
						</header>
						{* <span class="image featured"><img src="images/pic01.jpg" alt="" /></span> *}
					</section>

				
					<input id="wyszukaj" type="text" placeholder="Wyszukaj" /><br>
					<div class="row">
					{foreach $samochody as $s}
						<div class="col-6 col-12-narrower">
							<section class="box special">
								<span class="image featured"><img src="images/{$s["zdjecie"]}.jpg" alt="" /></span>
								<h3>{$s["marka"]} {$s["model"]}</h3>
								<p>Skrzynia: {$s["skrzynia"]}</p>
								<p>Wypożyczone od: {$s["start_wyp"]}</p>
								<p>Wypożyczone do: {$s["koniec_wyp"]}</p>
								<h4>Cena: {$s["cena"]} zł</h4>
								<form action="{rel_url action="oddaj" id=$s['id']}" method="post">
									<input type="submit" name="submit" class="button" value="Oddaj" />
								</form>
							</section>
						</div>
					{/foreach}
					</div>

				</section>

{/block}