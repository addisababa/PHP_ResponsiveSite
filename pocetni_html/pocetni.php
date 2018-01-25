<!DOCTYPE html>
<html>
    <head>
        <title>Nas katalog proizvoda</title>
        <link href="../assets/style/main.css" rel="stylesheet">
        <link href="../assets/style/mobile.css" rel="stylesheet">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id="wrapper">
            <header id="header">
                <a>
                    
                    <img src="../assets/image/baner1.jpg" alt="Baner firme">
                </a>
            </header>
            <nav id="nav">
                <ul>
                    <li><a<?php if($_GET['Controller']=='Products')echo 'class="active";' ?> href="index.php">Pocetna</a></li>
                    <li><a<?php if($_GET['Controller']=='Usluge')echo 'class="active";' ?> href="./">Usluge</a></li>
                    <li><a <?php if($_GET['Controller']=='Product')echo 'class="active";' ?> href="products.php">Proizvodi</a></li>
                    <li><a <?php if($_GET['Controller']=='Contact')echo 'class="active";' ?> href="contact.php">Kontakt</a></li>
                </ul>
            </nav>
            <main id="sadrzaj">
                    <article class="blok">
                        <header>
                            <h2>Tastatura GTI4530</h2>
                        </header>
                        <main class="opis">
                            Detaljan opis i karakteristike ove tastature.
                        </main>
                        <footer class="cena">25.88 &euro;</footer>
                    </article>
                    <article class="blok">
                        <header>
                            <h2>Mis GAM8700</h2>
                        </header>
                        <main class="opis">
                            Posebne karakteristike i neki kraci opis ovoga misa.
                        </main>
                        <footer class="cena">13.48 &euro;</footer>
                    </article>
                    <article class="blok">
                        <header>
                            <h2>Kuciste Metal</h2>
                        </header>
                        <main class="opis">
                            Metalno kuciste sa posebnim osobinama i hladjenjem itd.. 
                            Dodatne karakteristike kao sto su dimenzije kucista.
                        </main>
                        <footer class="cena">43.65 &euro;</footer>
                    </article>
                    <article class="blok">
                        <header>
                            <h2>Mis GAM8700</h2>
                        </header>
                        <main class="opis">
                            Posebne karakteristike i neki kraci opis ovoga misa.
                        </main>
                        <footer class="cena">13.48 &euro;</footer>
                    </article>
            </main>
            <aside class="aside">
                <img alt='Reklamni baner' src="oglas.jpg" class="ad">
            </aside>
            <footer id="footer">
                &copy; 2018 - Kompanija ta i ta
            </footer>
        </section>
    </body>
</html>

