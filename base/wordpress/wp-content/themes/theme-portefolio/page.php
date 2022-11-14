<?php

/* 
    Template Name: Allan
*/

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
}

body {
    font-family: 'Public Sans', sans-serif;
}

.padding-lr {
    padding: 40px 30px;
}

.padding-lg {
    padding: 60px 40px;
}

.padding-tb {
    padding: 50px 0;
}

.container {
    max-width: 1024px;
    margin: 0 auto;
}

.header {
    background: #1f2937;
}

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 0;
}

.logo > h1 {
    color: white; 
    font-weight: bold;
    font-size: 25px;
}


nav .navbar ul {
    display: flex;
    list-style: none;
}

nav .navbar ul li {
    margin-right: 25px;
}

nav .navbar ul li a {
    text-decoration: none;
    font-size: 18px;
    color: #e5e7eb;
}

/** End Navbar **/

.hero {
    padding: 100px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
}

.hero .hero-content  {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.hero .hero-content .hero-header {
    font-size: 48px;
    font-weight: bold;
    color: #f9faf8;
}

.hero .hero-content .hero-desc {
    font-size: 20px;
    color: #f9faf8;
    margin: 15px 0;
}

.hero .hero-img {
    flex: 1;
}

.hero .hero-img img {
    width: 100%;
}

.hero .hero-content .btn {
    display: block;
    padding: 10px 30px;
    border-radius: 5px;
    border: none;
    background-color: #3882f6;
    color: #f9faf8;
    font-size: 18px;
    font-weight: 300;
    text-transform: uppercase;
}

/** End Hero **/

.about {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.about-header {
    text-align: center;
    margin-bottom: 30px;
    font-size: 36px;
    color: #1f2937;
    text-transform: uppercase;
    font-weight: bold;
}

.about-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.about-content .box {
    flex: 1;
    text-align: center;
}

.about-content .box .box-img img {
    width: 100%;
}

/** End About **/

.slogan {
    background-color: #e5e7eb;
}

.slogan-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
}

.slogan-content .slogan-text {
    font-size: 30px;
    font-weight: lighter;
    font-style: italic;
    color: #1f2937;
}

.slogan-content .author {
    font-size: 18px;
    font-weight: bold;
    color: #1f2937;
    align-self: flex-end;
}

.footer-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 30px;
    gap: 200px;
    background-color: #3882f6;
    border-radius: 5px;
}

.footer-header {
    font-size: 20px;
    color: #f9faf8;
}

.footer-desc {
    font-size: 18px;
    color: #e5e7eb;
    font-weight: lighter;
}

.footer-btn .secondary-btn {
    display: block;
    padding: 10px 40px;
    background-color: transparent;
    border: 2px solid #f9faf8;
    border-radius: 10px;
    font-size: 15px;
    color: #e5e7eb;
    text-transform: uppercase;
    font-weight: bold;
}


</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <section class="header">
        <div class="container">
            <nav>
                <div class="navbar">
                    <ul>
                        <li class="logo"><h1>Allan Dev</h1></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">contact us</a></li>
                    </ul>
                </div>
            </nav>

            <div class="hero">
                <div class="hero-content">
                    <div class="hero-header"><?= the_title() ?></div>
                    <p class="hero-desc">
                       <?= the_content() ?> 
                    </p>
                    <a class="btn" href="/index.php">Retour à l'accueil</a>
                </div>
                <div class="hero-img">
                    <img src="https://images.unsplash.com/photo-1661956602944-249bcd04b63f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="slogan">
        <div class="container padding-lg">
            <div class="slogan-content">
                <p class="slogan-text">This is an inspiring quote or a testimonial from a customer. Maybe it's just filling up space, or marbe people will actually read it. Who knows? All i know is that it looks nice.</p>
            <span class="author">-Thor, God of Thunder</span>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container padding-tb">
            <div class="footer-wrapper">
                <div class="footer-content">
                    <div class="footer-text">
                        <p class="footer-header">Call to action!!! It's time!</p>
                        <p class="footer-desc">Sign up for our product by clicking that button right over there !</p>
                    </div>
                </div>
                <div class="footer-btn">
                    <button class="secondary-btn">Sign up</button>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>


























<?php get_header() ?>

<h1>Allan je suis un dieu en developpement</h1>

<?php the_title() ?>
<?php the_content() ?>

<?php get_footer() ?>