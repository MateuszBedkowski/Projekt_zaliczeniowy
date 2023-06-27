{enxtends file="main.tpl"}
{block name=content}

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="{$conf->app_url}/css/style_rent.css">
    </head>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Rent</title>
            <link rel="stylesheet" href="style_rent.css">
        </head>
        <body>
            <header>
                <h2 class="rent">Rental</h2>
                <nav class="navigation">
                    <a href="{$conf->action_root}loginShow">Home</a>
                    <a href="{$conf->action_root}rentList">Wypożycz</a>
                    <a href="{$conf->action_root}contact">Kontakt</a>
                    <button class="btnLogin-popup">Login</button>
                </nav>
            </header>

            <div class="car-list">
                <div class="car-item">
                    <img src="zdj/Audi_S3.jpg" alt="Audi S3">
                    <button class="rent-button">Wypożycz</button>
                </div>
                <div class="car-item">
                    <img src="zdj/BMW_F30.jpg" alt="BMW F30">
                    <button class="rent-button">Wypożycz</button>
                </div>
                <div class="car-item">
                    <img src="zdj/BMW_F36.jpg" alt="BMW F36">
                    <button class="rent-button">Wypożycz</button>
                </div>
                <div class="car-item">
                    <img src="zdj/Chevrolet_Trax.jpg" alt="Chevrolet Trax">
                    <button class="rent-button">Wypożycz</button>
                </div>
                <div class="car-item">
                    <img src="zdj/Mercedes_A45s.jpg" alt="Mercedes AMG A45s">
                    <button class="rent-button">Wypożycz</button>
                </div>
                <div class="car-item">
                    <img src="zdj/Porsche_Macan.jpg" alt="Porsche Macan">
                    <button class="rent-button">Wypożycz</button>
                </div>
            </div>

            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </body>
    </html>
{/block}