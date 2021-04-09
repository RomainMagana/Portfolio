<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <meta property="og:title" content="Portfolio">
  <meta property="og:image" content="https://https://magana-romain.fr/IMG/Lumieredetour-min.png">
  <meta property="og:description" content="Portfolio_Romain-Magana_2021">
  <meta property="og:url" content="https://magana-romain.fr">
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="./JS/_chargement.js"></script>
  <link rel="icon" type="image/png" href="./IMG/Lumieredetour-min.png" />
  <title>Portfolio-Magana</title>
</head>

<body>
  <aside class="sidebar" id="sidebar-id">
    <nav class="sidebar__item" id="sidebar__a">
      <a href="#banner">Accueil</a>
      <a href="#about">À propos</a>
      <a href="#projets">Projets</a>
      <a href="#contacte">Contacts</a>
    </nav>
  </aside>
  <section class="site">
    <header class="site__banner" id="banner">
      <div class="banner__topbar" id="folow">
        <div class="topbar__left">
          <a href="#"><img src="./IMG/magana-min.png" alt=""></a>
        </div>
        <div class="topbar__right">
          <div class="burger" id="burger-icon">
            <div></div>
          </div>
        </div>
      </div>
      <ul class="banner__title">
        <li>P</li>
        <li>O</li>
        <li>R</li>
        <li>T</li>
        <li>F</li>
        <li>O</li>
        <li>L</li>
        <li>I</li>
        <li>O</li>
      </ul>
      <div class="banner__item">
        <div class="item__lampe"></div>
        <div class="item__lampe"></div>
        <div class="item__lampe"></div>
      </div>
    </header>

    <section class="site__block section__1" id="about">
      <div class="block__presentation">
        <div class="item__card">
          <div class="card__contain" id="writter"></div>
          <a class="card__button" href="#contacte">
            <p>Contacter</p>
          </a>
        </div>
        <div class="item__bar reveal__skill">
          <div class="bar__skill html">
            <h2>HTML5</h2>
            <div>
              <span></span>
            </div>
          </div>
          <div class="bar__skill css">
            <h2>CSS3/SASS</h2>
            <div>
              <span></span>
            </div>
          </div>
          <div class="bar__skill js">
            <h2>JAVASCRIPT</h2>
            <div>
              <span></span>
            </div>
          </div>
          <div class="bar__skill php">
            <h2>PHP</h2>
            <div>
              <span></span>
            </div>
          </div>
          <div class="bar__skill mysql">
            <h2>MYSQL</h2>
            <div>
              <span></span>
            </div>
          </div>
          <div class="bar__skill c">
            <h2>C/SDL/GTK</h2>
            <div>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site__block section__2" id="projets">
      <div class="block__timeline">

        <div class="timeline__line"></div>

        <div class="timeline__rond r1" data-anim="1">&#128187;</div>
        <div class="timeline__rond r2" data-anim="2">&#128187;</div>
        <div class="timeline__rond r3" data-anim="3">&#128187;</div>
        <div class="timeline__rond r4" data-anim="4">&#128187;</div>

        <div class="timeline__box b1 " data-anim="1">
          <h2>Site Endocrinologue</h2>
          <p>Site réalisé pour Mme Frédérique Gastaud, Endocrinologue Pédiatrique. <br>
            En cours de réalisation.</p>
          <a href="https://github.com/RomainMagana/Site-Endocrinologue" target=”_blank class="button">Projet</a>
        </div>
        <div class="timeline__box b2" data-anim="2">
          <h2>Portfolio</h2>
          <p>Ce Portfolio à été réalisé en JAVASCRIPT/HTML/SASS. Il en est le résultat d'un projet de fin d'année.</p>
          <a href="https://github.com/RomainMagana/Portfolio" target=”_blank class="button">Projet</a>
        </div>
        <div class="timeline__box b3" data-anim="3">
          <h2>Space Invaders</h2>
          <p>Le projet Space Invaders, est un projet développé en C utilisant SDL. Actuellement disponible uniquement
            en version console.</p>
          <a class="button" href="https://github.com/RomainMagana/Space_invaders" target=”_blank”>Projet</a>
        </div>
        <div class="timeline__box b4" data-anim="4">
          <h2>Site Sophrologue</h2>
          <p>Site réalisé pour Mme Sandra Méchin-Layani, Sophrologue.
            Ce projet est actuellement en cours de réalisation.</p>
          <a href="https://github.com/RomainMagana/Site-sophrologue" target=”_blank class="button">Projet</a>
        </div>

      </div>
    </section>


    <section class="site__block section__3" id="contacte">
      <div class="block__container">
        <div class="block__contact">
          <h2>ME CONTACTER</h2>
          <ul class="infos">
            <li>
              <span><img src="./IMG/linkedin.svg" alt="linkedin"></span>
              <span><a href="https://www.linkedin.com/in/romain-magana-804b6a1a9" target=”_blank”>Romain
                  MAGANA</a></span>
            </li>
            <li>
              <span><img src="./IMG/github.svg" alt="github"></span>
              <span><a href="https://github.com/RomainMagana" target=”_blank”>Romain_Magana</a></span>
            </li>
            <li>
              <span><img src="./IMG/phone.svg" alt="téléphone"></span>
              <span><a href="tel:0658216067">06.58.21.60.67</a></span>
            </li>
            <li>
              <span><img src="./IMG/email.svg" alt="email"></span>
              <span><a href="mailto:postmaster@magana-romain.fr">postmaster@magana-romain.fr</a></span>
            </li>
          </ul>
        </div>
        <div class="block__form">
          <form class="form__box" id='myForm'>
            <div class="box__input">
              <input type="text" name="nom" id="nom" required autocomplete="off">
              <span>NOM</span>
            </div>
            <div class="box__input w50">
              <input type="email" name="email" id="email" required autocomplete="off">
              <span>MAIL</span>
            </div>
            <div class="box__input w50">
              <input type="tel" name="telephone" id="telephone" required autocomplete="off">
              <span>TELEPHONE</span>
            </div>
            <div class="box__input w100">
              <textarea type="text" name="message" id="message" required></textarea>
              <span>MESSAGE</span>
            </div>
            <?php include('./mail.php'); ?>
            <div class=" box__input w100">
              <input type="submit" name="submit" value="Envoyer" id="envoyer">
            </div>
          </form>
        </div>
      </div>
    </section>

  </section>
  <!-- Scroll boxes -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
  <script src="./JS/_apparitionbox.js"></script>
  <script src="./JS/_apparition.js"></script>
  <!------------------>

  <script src="./JS/_button.js"></script>
  <script src="./JS/_topbar.js"></script>
  <script src="./JS/_antiscroll.js"></script>
  <script src="./JS/_type-writter.js"></script>
</body>

</html>