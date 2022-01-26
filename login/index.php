<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LogIn</title>

        <meta property="og:site_name" content="ShopNow">
        <meta property="og:title" content="Stock and product management | Login page | ShopNow">
        <meta property="og:description" content="A website for for login to the dashboard of the stock management">
        <meta property="og:type" content="login webpage">
        <meta property="og:image" content="images/logo.png">
        <meta property="og:url" content="https://shop-now-brief.netlify.app/login">

        <link rel="shortcut icon" href="images/logo.png">

        <link rel="stylesheet" href="style-files/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/52c3d542f8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div class="info-side">
                <h1>Shop Now</h1>
                <div class="slider-container">
                    <div class="slid-mov">
                        <div class="elem">
                            <p>Allum officiis aspernatur esslias ea e autem dolorem et amet consectetur adipisicing elit. doms ea illum. <br> Alias ea illum officiis aspernatur esse autem dolorem et amet consectetur</p>
                            <img src="images/management.png" alt="stor image">
                        </div>
                        <div class="elem">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea illum officiis aspernatur esse autem dolorem et amet consectetur adipisicing elit. Alias ea illum.</p>
                            <img src="images/stor-stock.png" alt="stor image">
                        </div>
                        <div class="elem">
                            <p>Adipisicing elit.  officiis aspernatur esse adipisicing elit autem dolorem et amet conAlias ea illum sectetur. Alias ea illum rnatur esse adipisicing elit autem dolorem con nlias ea illum rnatur esse adipisicing elias ea illum sectetur. </p>
                            <img src="images/dash.png" alt="stor image">
                        </div>
                        <div class="elem">
                            <p>Rutem dolorem et amet consectetuadipisicing elit. Alias ea illum officiis aspernatur esse autem dolorem et amet consectetur adit. Alias ea illum. <br> conAlias ea illum sectetur. Alias ea illum rnatur esse adipisicing elit autem dolorem </p>
                            <img src="images/analytics.png" alt="stor image">
                        </div>
                    </div>
                </div>
                <div class="keys">
                    <i class="fas fa-arrow-left" title="left arrow"></i>
                    <i class="fas fa-arrow-right" title="right arrow"></i>
                </div>
            </div>
            <div class="second-side">
                <div class="form-side">
                    <h2>Log In</h2>
                    <div class="accounts">
                        <div>
                            <img src="images/google.png" alt="google icon">
                        </div>
                        <div>
                            <img src="images/facebook.png" alt="facebook icon">
                        </div>
                        <div>
                            <img src="images/apple.png" alt="apple icon">
                        </div>
                    </div>
                    <p class="or-email">or do it via E-mail</p>
                    <form id="form" action="index.php" method="POST">
                        <div class="input-container">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" placeholder="@gmail.com">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <p>error message</p>
                        </div>
                        <div class="input-container">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <p>error message</p>
                        </div>
                        <div class="form-check-pass">
                            <div>
                                <input type="checkbox" id="checkbox" name="checkbox">
                                <label for="checkbox">Remember me</label>
                            </div>
                            <a href="#">Forgot Password?</a>
                        </div>
                        <input type="submit" id="submit" name="submit" value="Sign in">
                    </form>
                    <p class="cpy">&copy; 2022 All Rights Reserved</p>
                </div>
            </div>
        </main> 
        <script src="scripts/validation.js"></script>
        <script src="scripts/slider.js"></script>
    </body>
</html>