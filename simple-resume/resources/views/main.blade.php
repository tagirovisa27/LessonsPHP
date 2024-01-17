<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style/style.css"> -->
  <!-- <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet"> -->
  <!-- <link rel="shortcut icon" href="images/img-icon.png"> -->
  <title>My projekt</title>
</head>

<body>
  <header class="bg-blue">
    <nav class="wrapper">
      <a href="#my_portfolio">Портфолио</a>
      <a href="#about">Обо мне</a>
      <a href="#discussions">Контакты</a>
    </nav>
  </header>
  <section class="bg-blue">
    <div class="wrapper introduction">
      <div class="introduction__content">
        <h1 class="introduction__title">Меня зовут Иса</h1>
        <p class="introduction__text">Lorem Ipsum is simply dummy
          text of the printing and typesetting industry.</p>
      </div>
      <div>
        <!-- <img class="introduction_img" src="images/my-img.png" alt="my-img"> -->
      </div>
    </div>
  </section>
  <section id="my_portfolio">
    <div class="wrapper">
      <div class="my_portfolio">
        <h1 class="my_portfolio__title">Портфолио</h1>
        <div class="my_portfolio__arrows">
          <!-- <img class="arrows-img" src="images/arrows-left.png" alt="arrows-left"> -->
          <!-- <img class="arrows-img" src="images/arrows-right.png" alt="arrows-right"> -->
        </div>
        <div class="my_portfolio__text-left">
          <p class="my_portfolio__text">AI DIGITAL CORPORATE PRESENTATION TEMPLATE</p>
        </div>
        <div class="my_portfolio__slide">
          <div>
            <!-- <img src="images/slide.png" alt="slide"> -->
          </div>
          <div class="my_portfolio__information">
            <div class="my_portfolio__text-right">
              <p class="my_portfolio_line">ux / ui design</p>
              <p class="my_portfolio_line">development</p>
              <p class="my_portfolio_line">adaptives for tablet and phone</p>
              <p class="my_portfolio_line">animation support </p>
            </div>
            <button class="my_portfolio_btn">Посмотреть</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="bg-blue">
    <div class="wrapper">
      <div class="about">
        <div class="about__left-text">
          <h1 class="about__title">Обо мне</h1>
          <p class="about__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book.</p>
        </div>
        <div>
          <!-- <img class="about-img" src="images/my-img.png" alt="my-img"> -->
        </div>
      </div>
    </div>
  </section>
  <section id="discussions">
    <div class="wrapper">
      <div class="discussions">
        <h1 class="discussions__title">Обсудим проект?</h1>
        <p class="discussions_text">Заполните форму обратной связи</p>
        <form class="form" action="">
          <div class="form_contacts">
            <p class="name">Ваше имя</p>
            <input type="text" placeholder="Иса">
            <p class="name">Ваше email</p>
            <input type="email" placeholder="mail@example.com">
            <p class="name">Ваш телефон</p>
            <input type="tel" placeholder="+7 777 777 77 77">
            <button class="form_contacts__btn">Отправить</button>
          </div>
        </form>
        <p class="discussions_text-contact">Или свяжитесь со мной удобным способом связи, расположенным ниже</p>
      </div>
    </div>
  </section>
  <footer>
    <div class="wrapper footer_contacts">
      <a class="network" href="https://web.tlgrm.app/">TELEGRAM</a>
      <a class="network" href="https://web.whatsapp.com/">WHATSAPP</a>
      <a class="network" href="https://www.instagram.com/accounts/login/">INSTAGRAM</a>
      <a class="network" href="https://account.mail.ru/login">E-MAIL</a>
    </div>
  </footer>
</body>
<script src="js/script.js"></script>

</html>