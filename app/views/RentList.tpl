{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}rentList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="kwota" name="kwota" value="{$searchForm->kwota}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}rentNew">+ Nowe wypożyczenie</a>
</div>	

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
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}rentEdit/{$p['idwypozyczenie']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}rentDelete/{$p['idwypozyczenie']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
