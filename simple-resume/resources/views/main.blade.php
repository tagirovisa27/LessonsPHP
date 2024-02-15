@extends('layout.main')
@section('content')
  <section class="bg-blue">
    <div class="wrapper introduction">
      <div class="introduction__content">
        <h1 class="introduction__title">Меня зовут Иса</h1>
        <p class="introduction__text">Lorem Ipsum is simply dummy
          text of the printing and typesetting industry.</p>
      </div>
      <div>
        <img class="introduction_img" src="{{Vite::asset('resources/images/my-img.png')}}" alt="my-img">
      </div>
    </div>
  </section>
  <section id="my_portfolio">
    <div class="wrapper">
      <div class="my_portfolio">
        <h1 class="my_portfolio__title">Портфолио</h1>
        <div class="my_portfolio__arrows">
            <img class="arrows-img" src="{{Vite::asset('resources/images/arrows-left.png')}}" alt="arrows-left">
            <img class="arrows-img" src="{{Vite::asset('resources/images/arrows-right.png')}}" alt="arrows-right">
        </div>
         <div class="my_portfolio__text-left">
          <p class="my_portfolio__text">AI DIGITAL CORPORATE PRESENTATION TEMPLATE</p>
        </div>
        <div class="my_portfolio__slide">
        <div>
          <img src="{{Vite::asset('resources/images/slide.png')}}" alt="slide">
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
          <img class="about-img" src="{{Vite::asset('resources/images/my-img.png')}}" alt="my-img">
        </div>
      </div>
    </div>
  </section>
  <section id="discussions">
    <div class="wrapper">
      <div class="discussions">
        <h1 class="discussions__title">Обсудим проект?</h1>
        <p class="discussions_text">Заполните форму обратной связи</p>
        <form class="form" id="registrationForm">
            <div class="form_contacts">
                <p class="name">Ваше имя</p>
                <input type="text" id="name" placeholder="Иса" required>
                <span id="nameError" class="error"></span>
                <p class="name">Ваш email</p>
                <input type="email" id="email" placeholder="mail@example.com" required>
                <span id="emailError" class="error"></span>
                <p class="name">Ваш телефон</p>
                <input type="tel" id="phone" placeholder="+7 777 777 77 77" required>
                <span id="phoneError" class="error"></span>
                <button type="button" class="form_contacts__btn" onclick="validateForm()">Отправить</button>
            </div>
        </form>
        <script>

        function validateForm() {
            resetStyles();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;

            if (name.trim() === '') {
                setError('name', 'Введите ваше имя');
                return;
            }

            if (email.trim() === '' || !isValidEmail(email)) {
                setError('email', 'Введите корректный email');
                return;
            }

            if (phone.trim() === '' || !isValidPhone(phone)) {
                setError('phone', 'Введите корректный телефон');
                return;
            }
        }

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPhone(phone) {
            var phoneRegex = /^\+7 \d{3} \d{3} \d{2} \d{2}$/;
            return phoneRegex.test(phone);
        }

        function setError(fieldId, errorMessage) {
            document.getElementById(fieldId).classList.add('invalid');
            document.getElementById(fieldId + 'Error').innerHTML = errorMessage;
        }

        function resetStyles() {
            document.getElementById('name').classList.remove('invalid');
            document.getElementById('email').classList.remove('invalid');
            document.getElementById('phone').classList.remove('invalid');

            document.getElementById('nameError').innerHTML = '';
            document.getElementById('emailError').innerHTML = '';
            document.getElementById('phoneError').innerHTML = '';
        }
         </script>
        <p class="discussions_text-contact">Или свяжитесь со мной удобным способом связи, расположенным ниже</p>
      </div>
    </div>
  </section>
@endsection
