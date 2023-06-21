{extends file="main.tpl"}
{block name=content}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="{$conf->app_url}/css/style_login.css">
    </head>

    <!DOCTYPE html>
    <html lang="en">
        <body>
            <div class="wrapper">
                <span class="icon-close"><ion-icon name="close"></ion-icon></span>
                <div class="form-box login">
                    <h2>Login</h2>
                    <form action="#">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" required>
                            <label>Login</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" required>
                            <label>Password</label>
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
