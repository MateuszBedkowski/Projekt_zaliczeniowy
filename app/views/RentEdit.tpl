{extends file="main.tpl"}

{block name=bottom}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RentEdit</title>
        <link rel="stylesheet" href="{$conf->app_url}/css/style_rent.css">
    </head>

    <!DOCTYPE html>
    <html lang="en">
        <body>
            <div class="bottom-margin">
                <form action="{$conf->action_root}rentSave" method="post" class="pure-form pure-form-aligned">
                    <fieldset>
                        <legend>Wypożyczenie</legend>
                        <div class="pure-control-group">
                            <label for="poczatek">poczatek</label>
                            <input id="poczatek" type="text" placeholder="poczatek" name="poczatek" value="{$form->poczatek|date_format:"%Y-%m-%d"}">
                        </div>
                        <div class="pure-control-group">
                            <label for="koniec">koniec</label>
                            <input id="koniec" type="text" placeholder="koniec" name="koniec" value="{$form->koniec|date_format:"%Y-%m-%d"}">
                        </div>
                        <div class="pure-control-group">
                            <label for="kwota">kwota</label>
                            <input id="kwota" type="text" placeholder="kwota" name="kwota" value="{$form->kwota}">
                        </div>
                        <div class="pure-control-group">
                            <label for="klienci_idklient">klient id</label>
                            <input id="klienci_idklient" type="text" placeholder="klient id" name="klienci_idklient" value="{$form->klienci_idklient}">
                        </div>
                        <div class="pure-control-group">
                            <label for="samochody_idsamochod">samochod id</label>
                            <input id="samochody_idsamochod" type="text" placeholder="samochod id" name="samochody_idsamochod" value="{$form->samochody_idsamochod}">
                        </div>
                        <div class="pure-control-group">
                            <label for="pracownicy_idpracownik">pracownik id</label>
                            <input id="pracownicy_idpracownik" type="text" placeholder="pracownik id" name="pracownicy_idpracownik" value="{$form->pracownicy_idpracownik}">
                        </div>
                        <div class="pure-controls">
                            <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                            <a class="pure-button button-secondary" href="{$conf->action_root}rentList">Powrót</a>
                        </div>
                    </fieldset>
                    <input type="hidden" name="idwypozyczenie" value="{$form->idwypozyczenie}">
                </form>	
            </div>
        </body>
    </html>
{/block}