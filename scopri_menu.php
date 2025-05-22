<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>PolloTribe | Menù</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/contatti.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
    <link rel="stylesheet" href="css/scopri_menu.css" />

  <style>
    @media (max-width: 768px) {
      h1 {
        position: static !important;
        top: auto !important;
        font-size: 2em !important;
        padding: 10px 15px !important;
        margin-top: 0 !important;
        text-align: center !important;
        white-space: normal !important;
        overflow-wrap: break-word !important;
        max-width: 90vw;
        color: #fff !important;
      }

      .grid {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        gap: 20px !important;
        padding: 0 10px;
      }

      .item {
        width: 90% !important;
        max-width: 400px !important;
        margin: 0 auto !important;
      }
    }
  </style>

</head>
<body class="menu-page">

    <?php include 'header.php'; ?>

    <section class="sezione">
        <div class="container">
           <section class="order-section">
               <h1 style="margin-top: 0; padding-top: 0; position: relative; top: -30px; color: #fff; text-align: center; font-size: 2.5em; animation: titleReveal 1s ease forwards; opacity: 1;">
  Il nostro Menù
</h1>

            <!-- ANTIPASTI -->
            <h3 class="menu-category">Antipasti</h3>
            <div class="grid">
                <div class="item">
                    <h4>Chicken Nuggets</h4>
                    <p>Croccanti bocconcini di pollo con salsa BBQ o miele-senape</p>
                    <div><strong>€7.50</strong></div>
                </div>
                <div class="item">
                    <h4>Ali di Pollo Piccanti</h4>
                    <p>Alette glassate in salsa piccante, servite con crema allo yogurt</p>
                    <div><strong>€8.00</strong></div>
                </div>
                <div class="item">
                    <h4>Onion Rings</h4>
                    <p>Anelli di cipolla dorati, serviti con salsa aioli</p>
                    <div><strong>€5.50</strong></div>
                </div>
                <div class="item">
                    <h4>Chicken Strips</h4>
                    <p>Filetti di pollo impanati e fritti, accompagnati da salsa honey mustard</p>
                    <div><strong>€7.50</strong></div>
                </div>
                <div class="item">
                    <h4>Mozzarella Sticks</h4>
                    <p>Bastoncini di mozzarella filante in croccante panatura</p>
                    <div><strong>€6.50</strong></div>
                </div>
                <div class="item">
                    <h4>Misto Fritto</h4>
                    <p>Selezione di finger food fritti: nuggets, mozzarella sticks, onion rings</p>
                    <div><strong>€10.00</strong></div>
                </div>
            </div>

            <!-- PANINI -->
            <h3 class="menu-category">Panini</h3>
            <div class="grid">
                <div class="item">
                    <h4>BBQ Classic</h4>
                    <p>Pollo grigliato, bacon croccante, cipolla caramellata e salsa BBQ</p>
                    <div><strong>€10.50</strong></div>
                </div>
                <div class="item">
                    <h4>Buffalo Chicken</h4>
                    <p>Pollo fritto speziato, salsa piccante buffalo, lattuga e formaggio</p>
                    <div><strong>€11.00</strong></div>
                </div>
                <div class="item">
                    <h4>Pollo Teriyaki</h4>
                    <p>Pollo marinato alla teriyaki, cipolle caramellate, lattuga e maionese</p>
                    <div><strong>€12.00</strong></div>
                </div>
            </div>

            <!-- GRIGLIATE -->
            <h3 class="menu-category">Galletti & Carni</h3>
            <div class="grid">
                <div class="item">
                    <h4>Pollo alla Brace</h4>
                    <p>Mezzo pollo marinato con erbe aromatiche, servito con contorno</p>
                    <div><strong>€14.00</strong></div>
                </div>
                <div class="item">
                    <h4>Pollo alla Brace Piccante</h4>
                    <p>Mezzo pollo marinato in salsa chili e miele, patate speziate</p>
                    <div><strong>€16.00</strong></div>
                </div>
                <div class="item">
                    <h4>Grigliata Mista</h4>
                    <p>Pollo, salsiccia, costine di maiale e verdure di stagione</p>
                    <div><strong>€18.00</strong></div>
                </div>
            </div>

            <!-- WRAPS & CO. -->
            <h3 class="menu-category">Wraps & Co.</h3>
            <div class="grid">
                <div class="item">
                    <h4>Wrap Caesar</h4>
                    <p>Pollo grigliato, insalata croccante, scaglie di parmigiano e salsa Caesar</p>
                    <div><strong>€9.50</strong></div>
                </div>
                <div class="item">
                    <h4>Wrap Mediterraneo</h4>
                    <p>Pollo alla griglia, pomodori secchi, olive nere, feta e salsa tzatziki</p>
                    <div><strong>€9.00</strong></div>
                </div>
                <div class="item">
                    <h4>Toast Classico</h4>
                    <p>Prosciutto cotto e formaggio filante su pane grigliato</p>
                    <div><strong>€6.50</strong></div>
                </div>
            </div>


            <!-- INSALATE -->
            <h3 class="menu-category">Insalate</h3>
            <div class="grid">
                <div class="item">
                    <h4>Caesar Salad</h4>
                    <p>Pollo grigliato, lattuga romana, crostini, parmigiano e salsa Caesar</p>
                    <div><strong>€9.50</strong></div>
                </div>
                <div class="item">
                    <h4>Avocado Chicken Salad</h4>
                    <p>Petto di pollo, avocado, lattuga, pomodori e vinaigrette al limone</p>
                    <div><strong>€10.00</strong></div>
                </div>
                <div class="item">
                    <h4>Insalata Mediterranea</h4>
                    <p>Feta greca, cetrioli, pomodorini, cipolla rossa e olive kalamata</p>
                    <div><strong>€8.50</strong></div>
                </div>
            </div>

            <!-- CONTORNI -->
            <h3 class="menu-category">Contorni</h3>
            <div class="grid">
                <div class="item">
                    <h4>Patate Fritte</h4>
                    <p>Classiche patatine fritte croccanti con buccia, servite con salse</p>
                    <div><strong>€4.00</strong></div>
                </div>
                <div class="item">
                    <h4>Patate al Forno</h4>
                    <p>Spicchi di patate al forno con rosmarino e olio extravergine</p>
                    <div><strong>€4.50</strong></div>
                </div>
                <div class="item">
                    <h4>Verdure Grigliate</h4>
                    <p>Zucchine, melanzane e peperoni alla griglia, condite con olio EVO</p>
                    <div><strong>€5.00</strong></div>
                </div>
            </div>

            <!-- MENU BAMBINI -->
            <h3 class="menu-category">Menù Bambini</h3>
            <div class="grid">
                <div class="item">
                    <h4>Mini Chicken Nuggets</h4>
                    <p>Bocconcini di pollo panati, patatine croccanti e succo di frutta</p>
                    <div><strong>€6.50</strong></div>
                </div>
                <div class="item">
                    <h4>Mini Burger Classico</h4>
                    <p>Hamburger di pollo, cheddar, insalata, patatine e bibita</p>
                    <div><strong>€7.50</strong></div>
                </div>
                <div class="item">
                    <h4>Mini Toast Classico</h4>
                    <p>Toast con prosciutto, formaggio, patatine e succo di pesca</p>
                    <div><strong>€6.50</strong></div>
                </div>
            </div>


            <!-- BEVANDE -->
            <h3 class="menu-category">Bevande</h3>
            <div class="grid">
                <div class="item">
                    <h4>Birra Chiara</h4>
                    <p>Birra artigianale leggera (33cl)</p>
                    <div><strong>€5.00</strong></div>
                </div>
                <div class="item">
                    <h4>Birra Rossa</h4>
                    <p>Birra ambrata (33cl)</p>
                    <div><strong>€5.50</strong></div>
                </div>
                <div class="item">
                    <h4>Vino</h4>
                    <p>Rosso o bianco, selezione locale (75cl)</p>
                    <div><strong>€10.00</strong></div>
                </div>
                <div class="item">
                    <h4>Coca-Cola</h4>
                    <p>Bevanda gassata classica (33cl)</p>
                    <div><strong>€3.00</strong></div>
                </div>
                <div class="item">
                    <h4>Fanta</h4>
                    <p>Bibita all’arancia frizzante (33cl)</p>
                    <div><strong>€3.00</strong></div>
                </div>
                <div class="item">
                    <h4>Sprite</h4>
                    <p>Bevanda analcolica al limone (33cl)</p>
                    <div><strong>€3.00</strong></div>
                </div>
                <div class="item">
                    <h4>Acqua Naturale</h4>
                    <p>Bottiglia da 50cl di acqua minerale</p>
                    <div><strong>€1.50</strong></div>
                </div>
                <div class="item">
                    <h4>Acqua Frizzante</h4>
                    <p>Bottiglia da 50cl di acqua gassata</p>
                    <div><strong>€1.50</strong></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modifica questa sezione -->
<div class="order-button-container" style="margin-top: -40px !important; margin-bottom: 60px;">
     <a href="https://glovoapp.com/it/it/follonica/" target="_blank" class="order-button">
        <span style="position: relative; z-index: 2;">ORDINA CON GLOVO</span>
        <span class="hover-effect"></span>
    </a>
</div>

<div style="border-bottom: 3px solid #dcdcdc;"></div>

<style>
    .whatsapp-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25D366;
        color: white;
        padding: 15px 18px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        z-index: 1000;
        transition: all 0.3s ease;
        text-decoration: none;
        font-size: 28px;
        line-height: 1;
    }
    .whatsapp-icon:hover {
        transform: scale(1.1) rotate(15deg);
        background-color: #128C7E;
        box-shadow: 0 6px 12px rgba(0,0,0,0.4);
    }
    
    @media (max-width: 768px) {
        .whatsapp-icon {
            bottom: 15px;
            right: 15px;
            padding: 12px 15px;
            font-size: 24px;
        }
    }
</style>

<a href="https://wa.me/39123456789" class="whatsapp-icon" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i>
</a>

    <?php include 'footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menuToggle');
        const navigation = document.getElementById('main-navigation');
        const navLinks = document.querySelectorAll('#main-navigation a');

        if (menuToggle && navigation) {
            menuToggle.addEventListener('click', function () {
                const isOpen = menuToggle.classList.toggle('open');
                navigation.classList.toggle('open');
                menuToggle.setAttribute('aria-expanded', isOpen);
            });

            // Chiudi menu cliccando fuori
            document.addEventListener('click', function (e) {
                if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
                    menuToggle.classList.remove('open');
                    navigation.classList.remove('open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });

            // Scroll e chiusura menu
            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);

                    if (targetSection) {
                        e.preventDefault();
                        menuToggle.classList.remove('open');
                        navigation.classList.remove('open');
                        menuToggle.setAttribute('aria-expanded', 'false');

                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        }
    });
</script>

</body>
</html>


