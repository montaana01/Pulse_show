<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pulse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="fonts/icomoon.ttf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <section id="up" class="promo">
        <div class="container">
            <header class="header">
                <a href="#" class="header__logo">
                    <img src="icon/run_smart_logo.png" alt="Run Smart Logo">
                </a>
                <div class="header__official">
                    Официальный представитель
                    <span>
                        Garmin, Polar, Suunto
                    </span>
                </div>
                <div class="header__contacts">
                    <a href="tel:+74999228974" class="header__phone">+7 (499) 922-89-74</a>
                    <button data-modal="consultation" class="button">заказать звонок</button>
                </div>
            </header>
            <div class="promo__wrapper">
                <h1 class="promo__header">Подбор пульсометра</h1>
                <h2 class="promo__subheader">с учётом Вашего уровня подготовки</h2>
                <div class="promo__icons">
                    <div class="promo__icon">
                        <img src="icon/first_screen/search_time.svg" alt="Подбор">
                        Время подбора:
                        10 минут
                    </div>
                    <div class="promo__icon">
                        <img src="icon/first_screen/delivery.svg" alt="Доставка">
                        Бесплатная доставка
                    </div>
                    <div class="promo__icon">
                        <img src="icon/first_screen/question.svg" alt="Вопросы">
                        Ответим на все вопросы
                    </div>
                </div>
                <button data-modal="consultation" class="button button_main">заказать кОНСУЛЬТАЦИЮ</button>
                <div class="promo__link">
                    или
                    <a href="#catalog">ПЕРЕЙТИ В КАТАЛОГ</a>
                </div>

            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <h2 class="title">НАШИ ПРЕИМУЩЕСТВА</h2>
            <div class="advantages__divider">
                <div class="advantages__icons">
                    <div class="advantages__icon">
                        <img src="icon/advantages/exp.svg" alt="">
                        <div class="advantages__header">Делимся опытом</div>
                        <div class="advantages__description">Наши сотрудники всегда готовы поделиться своим опытом, так
                            как сами бегают полумарафоны, переплыли Босфор, готовятся к соревнованиям по триатлону!
                        </div>
                    </div>
                    <div class="advantages__icon">
                        <img src="icon/advantages/health.svg" alt="health" class="advantages__icon_animated">
                        <div class="advantages__header">Заботимся о здоровье</div>
                        <div class="advantages__description">Мы работаем для того, чтобы Ваши занятия спортом шли на
                            пользу Вашему здоровью и были в радость Вам и Вашим близким!</div>
                    </div>
                    <div class="advantages__icon">
                        <img src="icon/advantages/runing.svg" alt="">
                        <div class="advantages__header">Учим бегать</div>
                        <div class="advantages__description">Помогаем с обучением правильной технике бега! Дружим с
                            крупнейшей школой бега в России - <u>I LOVE RUNNING.</u>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="consultation">
        <div class="container">
            <h2 class="title title_left">Получите бесплатную консультацию по подбору пульсометра </h2>
            <div class="consultation__descr">Просто заполните форму заявки и мы перезвоним вам в течении 10 минут
            </div>
            <form id="consultation-form" class="feed-form" action="#">
                <input name="name" placeholder=" Ваше имя" type="text">
                <input name="phone" placeholder=" Ваш телефон">
                <input name="email" placeholder=" Ваш E-mail" type="email">
                <button class="button button_submit">заказать кОНСУЛЬТАЦИЮ</button>
            </form>

        </div>
    </section>

    <div class="carousel">
        <div class="container">
            <div class="carousel__inner">
                <div> <img src="img/carousel/slide_1.jpg" alt=""></div>
                <div> <img src="img/carousel/slide_2.jpg" alt=""></div>
                <div> <img src="img/carousel/slide_3.jpg" alt=""></div>
                <div> <img src="img/carousel/slide_2.jpg" alt=""></div>
                <div> <img src="img/carousel/slide_3.jpg" alt=""></div>
                <div> <img src="img/carousel/slide_1.jpg" alt=""></div>

            </div>
            <button type="button" class="prev"><img src="icon/carousel/prev.svg" alt="prev"></button>
            <button type="button" class="next"><img src="icon/carousel/next.svg" alt="next"></button>
        </div>
    </div>

    <section class="catalog" id="catalog">
        <div class="container">
            <h2 class="title">Каталог пульсометров</h2>
            <ul class="catalog__tabs">
                <li class="catalog__tab catalog__tab_active">
                    <div>Для фитнеса</div>
                </li>
                <li class="catalog__tab">
                    <div>для бега</div>
                </li>
                <li class="catalog__tab">
                    <div>для триатлона</div>
                </li>
            </ul>

            <div class="catalog__content catalog__content_active">
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Sunto M2</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>

                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>

                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>

                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>

                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>

                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>


            </div>

            <div class="catalog__content">
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>


            </div>

            <div class="catalog__content">
                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>

                <div class="catalog-item">
                    <div class="catalog-item__wrapper">
                        <div class="catalog-item__content catalog-item__content_active">
                            <img src="img/catalog/polar.png" alt="Pulsometr" class="catalog-item__img">
                            <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                            <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном
                                ритме
                            </div>
                            <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                        </div>

                        <div class="catalog-item__list">
                            <ul class="catalog-item__line">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время
                                    тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых
                                    тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;
                                </li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                            </ul>
                            <a href="#" class="catalog-item__back">назад</a>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-item__footer">
                        <div class="catalog-item__prices">
                            <div class="catalog-item__old-price">4 750 руб.</div>
                            <div class="catalog-item__price">4 500 руб.</div>
                        </div>
                        <button class="catalog-item__btn button button_catalog">КУПИТЬ</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <h2 class="title">отзывы клиентов</h2>

            <div class="feedback-item animate__fadeInUp animate__animated wow" data-wow-duration="2s" data-wow-delay="1s">
                <div class="feedback-item__block">
                    <img src="img/reviev/clien_irina.png" alt="Irina">
                    <div class="feedback-item__text">
                        <div class="feedback-item__name">Ирина Иванченко</div>
                        <div class="feedback-item__countMarathones">2 полумарафона</div>
                        <div class="feedback-item__massage">
                            Не знала, что себе купить - обратилась к ребятам из RunSmart - подобрали пульсометр, который
                            подошёл именно под мои цели и финансовые возможности.Через некоторое время решила обновить
                            гаджет - не раздумывая обратилась туда же.
                            <br><br>Новые цели - новый гаджет!
                            <br><br>Спасибо, RunSmart!
                        </div>
                    </div>
                </div>
            </div>

            <div class="feedback-item animate__fadeInUp animate__animated wow" data-wow-duration="1.5s" data-wow-delay="1s">
                <div class="feedback-item__block">
                    <img src="img/reviev/clien_ivan.png" alt="Ivan">
                    <div class="feedback-item__text">
                        <div class="feedback-item__name">Иван Сёмочкин</div>
                        <div class="feedback-item__countMarathones">1 полумарафон</div>
                        <div class="feedback-item__massage">
                            Крутая штука-пульсометр. Обычно без них бегал. Оказывается только хуже себе делал.
                            <br><br>Купил
                            пульсометр, ещё в подарок получил тренировку. Со мной вместе провели первую тренировку,
                            научили пользоваться новым гаджетом. Также объяснили основы анатомии, составили план
                            тренировок на месяц вперёд.
                            <br><br>С ними подготовился к своему первому полумарафону! Спасибо!!!
                        </div>
                    </div>
                </div>
            </div>

            <div class="feedback-item animate__fadeInUp animate__animated wow" data-wow-duration="2s" data-wow-delay="1s">
                <div class="feedback-item__block">
                    <img src="img/reviev/clien_yulia.png" alt="clien_yulia">
                    <div class="feedback-item__text">
                        <div class="feedback-item__name">Юлия Дашкина</div>
                        <div class="feedback-item__countMarathones">2 полумарафона</div>
                        <div class="feedback-item__massage">
                            Долго не могла начать бегать, т.к. до этого несколько раз начинала, но становилось тяжело и
                            я бросала. От друзей услышала о RunSmart и о беге с контролем пульса и решила попробовать.
                            <br><br>Позвонила, ребята поинтересовались моими целями и подобрали очень интересный вариант
                            со скидкой! Теперь бегаю и наслаждаюсь бегом! Пробежала уже 2 полумарафона и несколько более
                            коротких забегов и не намерена останавливаться!
                            <br><br>Спасибо!!!
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="footer_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.43030788928!2d37.64442107712951!3d55.768397990789545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a636edcd2ad%3A0x4c2ca101e2c8c617!2z0JzRj9GB0L3QuNGG0LrQuNC5INC_0YAt0LQsIDQvMywg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEwNzA3OA!5e0!3m2!1sru!2sby!4v1700907886047!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer__info">
            <address class="footer__location">Москва, Мясницкий проезд, д.3с1</address>
            <a href="tel:84999228974" class="footer__phone">8 (499) 922-89-74</a>
            <div class="footer__social">
                <a href="http://facebook.com" class="footer__social-item">
                    <span class="icon-facebook"></span>
                </a>
                <a href="http://instagram.com" class="footer__social-item">
                    <span class="icon-instagram"></span>
                </a>
                <a href="http://pinterest.com" class="footer__social-item">
                    <span class="icon-pinterest"></span>
                </a>
            </div>
        </div>
    </footer>

    <div class="overlay">
        <div class="modal" id="consultation">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">
                Просто заполните форму заявки
            </div>
            <div class="modal__descr">
                и мы перезвоним вам в течении 10 минут
            </div>

            <form class="feed-form feed-form_mt25" action="#">
                <input name="name" placeholder=" Ваше имя" type="text">
                <input name="phone" placeholder=" Ваш телефон">
                <input name="email" placeholder=" Ваш E-mail" type="email">
                <button class="button button_submit">заказать кОНСУЛЬТАЦИЮ</button>
            </form>
        </div>


        <div class="modal" id="order">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">
                Ваш заказ:
            </div>
            <div class="modal__descr">
                Пульсометр Polar FT1
            </div>

            <form class="feed-form feed-form_mt25" action="#">
                <input name="name" placeholder=" Ваше имя" type="text">
                <input name="phone" placeholder=" Ваш телефон">
                <input name="email" placeholder=" Ваш E-mail" type="email">
                <button class="button button_submit">КУПИТЬ</button>
            </form>
        </div>

        <div class="modal modal_mini" id="thanks">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">
                Спасибо за вашу заявку!
            </div>
            <div class="modal__descr">
                Наш менеджер свяжется с вами в ближайшее время!
            </div>
        </div>

    </div>

    <a href="#up" class="pageup">
        <img src="icon/arrow_up.svg" alt="up">
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>