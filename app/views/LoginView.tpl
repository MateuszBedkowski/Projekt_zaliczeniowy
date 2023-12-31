{extends file="main.tpl"}
{block name=bottom}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="{$conf->app_url}/css/style_login.css">
    </head>

    <!DOCTYPE html>
    <html lang="en">
        <body>
            <div class="wrapper">
                {*<span class="icon-close"><ion-icon name="close"></ion-icon></span>*}
                <div class="form-box login">
                    <h2>Login</h2>
                    <form action="{$conf->action_root}login" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input id="id_login" type="text" name="login" value="{$form->login}" required>
                            <label for="id_login">Login</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input id="id_pass" type="password" name="pass" required>
                            <label for="id_pass">Password</label>
                        </div>
                        <button type="submit" class="btn">Login</button>
                    </form>
                </div>
            </div>

            <script src="{$conf->app_url}/script/script.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </body>
    </html>
{/block}
