{extends file="main.tpl"}

{block name=bottom}
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rent</title>
        <link rel="stylesheet" href="{$conf->app_url}/css/style_rent.css">
    </head>

	<!DOCTYPE html>
		<html lang="en">
			<body>
				<div class="bottom-margin">
					<form class="pure-form pure-form-stacked" action="{$conf->action_url}rentList">
						<legend>Opcje wyszukiwania</legend>
						<fieldset>
							<input type="text" placeholder="kwota" name="kwota" value="{$searchForm->kwota}" /><br />
							<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
						</fieldset>
					</form>
				</div>	
				<div class="table-container">
					<table id="tab_wypozyczenie" class="pure-table pure-table-bordered">
						<thead>
							<tr>
								<th>początek</th>
								<th>koniec</th>
								<th>kwota</th>
								<th>klient id</th>
								<th>samochod id</th>
								<th>pracownik id</th>
							</tr>
						</thead>
							<tbody>
								{foreach $wypozyczenie as $w}
									{strip}
										<tr>
											<td>{$w["poczatek"]}</td>
											<td>{$w["koniec"]}</td>
											<td>{$w["kwota"]}</td>
											<td>{$w["klienci_idklient"]}</td>
											<td>{$w["samochody_idsamochod"]}</td>
											<td>{$w["pracownicy_idpracownik"]}</td>
											<td>
												<a class="button-small pure-button button-secondary" href="{$conf->action_url}rentEdit/{$w['idwypozyczenie']}">Edytuj</a>
												&nbsp;
												<a class="button-small pure-button button-warning" href="{$conf->action_url}rentDelete/{$w['idwypozyczenie']}">Usuń</a>
											</td>
										</tr>
									{/strip}
								{/foreach}
							</tbody>
					</table>
				</div>
				<div class="car-list">
					<div class="car-item">
						<img src="../public/cars/Audi_S3.jpg" alt="Audi S3">
						<button class="rent-button">Wypożycz</button>
					</div>
					<div class="car-item">
						<img src="../public/cars/BMW_F30.jpg" alt="BMW F30">
						<button class="rent-button">Wypożycz</button>
					</div>
					<div class="car-item">
						<img src="../public/cars/BMW_F36.jpg" alt="BMW F36">
						<button class="rent-button">Wypożycz</button>
					</div>
					<div class="car-item">
						<img src="../public/cars/Chevrolet_Trax.jpg" alt="Chevrolet Trax">
						<button class="rent-button">Wypożycz</button>
					</div>
					<div class="car-item">
						<img src="../public/cars/Mercedes_A45s.jpg" alt="Mercedes AMG A45s">
						<button class="rent-button">Wypożycz</button>
					</div>
					<div class="car-item">
						<img src="../public/cars/Porsche_Macan.jpg" alt="Porsche Macan">
						<button class="rent-button">Wypożycz</button>
					</div>
				</div>

				<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
				<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		</body>
	</html>
{/block}