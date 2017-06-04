<?php get_header(); ?>

    <div class="jumbotron jumbotron-fluid">
        <video class="landing-video" autoplay muted loop>
            <source src="/wp-content/themes/academlyc/media/landing.mp4?v=28022017" type="video/mp4">
        </video>
        <div class="container">
            <div class="landing-logo"><img class="img-responsive" src="/wp-content/themes/academlyc/img/logo.png"></div>
            <div class="landing-org-name"></div>
            <div class="landing-view-more text-center">
                <a class="landing-more" href="#details" role="button">Дізнатись більше</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.rawgit.com/mattboldt/typed.js/master/dist/typed.min.js"></script>
    <script>
        // $(function(){
        //     $('.landing-org-name').typed({
        //         strings: ['<h1>Запорізький<br>Академічний ліцей</h1>'],
        //         typeSpeed: 0,
        //         showCursor: false,
        //         contentType: 'html'
        //     });
        // });
        document.addEventListener("DOMContentLoaded", function(){
            Typed.new('.landing-org-name', {
                strings: ['<h1>Запорізький<br>Академічний ліцей</h1>'],
                typeSpeed: 0,
                showCursor: false,
                contentType: 'html'
            });
        });
        $(".landing-video").on('loadeddata', function () {
            $(this).css({
                display: 'block'
            });
        });
    </script>
    <div id="details" style="height: 56px; width: 1px; margin-top: -56px"></div>
    <div class="landing-future">
        <div class="container">
            <div class="text-center">
                <h1>Майбутнє чекає на тебе!</h1>
                <p>Наша мета &ndash; підвищення якості освітніх послуг та можливостей, модернізація освітнього середовища ліцею.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row landing-cards">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="landing-card">
                            <img src="/wp-content/themes/academlyc/img/landing/card-1.png?v=18012016" class="img-fluid rounded-circle">
                            <h3>Сучасні технології</h3>
                            <ul>
                                <li>Wi-Fi у вільному доступі</li>
                                <li>Навчання Google-classroom, Moodle, Votum</li>
                                <li>2 кабінети інформатики</li>
                                <li>Мультимедійні проектори у навчальних кабінетах</li>
                                <li>Ноутбуки у кожного вчителя. Робота з програмами NetSchool, Camtasia, X-Mind, VideoScribe тощо</li>
                                <li>Електронна бібліотека, медіатека</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="landing-card">
                            <img src="/wp-content/themes/academlyc/img/landing/card-2.png?v=18012016" class="img-fluid rounded-circle">
                            <h3>Повний спектр навчальних послуг</h3>
                            <ul>
                                <li>Дружний колектив досвідчених творчих педагогів</li>
                                <li>Школа майбутнього першокласника</li>
                                <li>1-4 класи: додаткові заняття з економіки, група подовженого дня, заняття у школі мистецтв</li>
                                <li>5-9 класи: допрофільна підготовка (основи економіки, поглиблена математика, інформатика, географія)</li>
                                <li>10-11 класи: економічний та математичний профілі навчання, співпраця з ВНЗ міста</li>
                                <li>Заняття у спортивних секціях, музичних і творчих гуртках</li>
                                <li>Програма &laquo;Обдарованість&raquo;:
                                    <ul>
                                        <li>учнівське самоврядування</li>
                                        <li>заняття науково-дослідницькою роботою у МАН України</li>
                                        <li>участь у олімпіадах, міжнародних та всеукраїнських творчих і спортивних конкурсах</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="landing-card">
                            <img src="/wp-content/themes/academlyc/img/landing/card-3.png?v=18012016" class="img-fluid rounded-circle">
                            <h3>Здоров’я та комфорт</h3>
                            <ul>
                                <li>Кваліфікований медичний, психологічний супровід</li>
                                <li>Гарячі сніданки, обіди, буфетна продукція у їдальні ліцею</li>
                                <li>Ігрова кімната</li>
                                <li>Спортивний зал та майданчик оснащені інвентарем та обладнанням</li>
                                <li>Великий бібліотечний фонд (навчальна та художня література)</li>
                                <li>Найкращий в місті актовий зал із сучасною аудіо-, відео та іншою апаратурою</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>