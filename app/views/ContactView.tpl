{extends file="main.tpl"}
{block name=content}


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{$conf->app_url}/css/style_contact.css">
</head>

<!DOCTYPE html>
<html lang="en">
<body>
    <header>
        <h2 class="rent">Rental</h2>
        <nav class="navigation">
            <a href="../../login/login.html">Home</a>
            <a href="#">Rent</a>
            <a href="Contact.html">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <div class="form-box login">
            <h2>Contact</h2>
            <form action="mailto:bedkowskim@outlook.com" method="POST" enctype="text/plain">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="document"></ion-icon></span>
                    <input type="text" name="subject" required>
                    <label>Subject</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="chatbox"></ion-icon></span>
                    <textarea name="message" required></textarea>
                    <label>Message</label>
                </div>
                <button type="submit" class="btn-send">Send</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
{/block}
