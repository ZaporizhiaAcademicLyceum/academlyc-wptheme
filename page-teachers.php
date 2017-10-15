<?php get_header();
$teachers = [
  [
    'name' => 'Коміссаров Вадим Олексійович',
    'desc' => 'Директор',
    'image' => 'komissarov.png',
    'blog' => 'https://vakom60.ru/',
    'facebook' => 'https://www.facebook.com/vkomisarov',
  ],
  [
    'name' => 'Руденко Олена Станіславівна',
    'desc' => 'Заступник директора, вчитель математики',
    'image' => 'rudenko.png',
    'blog' => 'http://rudenko.zzz.com.ua/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100001208163653',
  ],
  [
    'name' => 'Таран Ілона Анатоліївна',
    'desc' => 'Заступник директора, вчитель математики',
    'image' => 'taran.png',
    'blog' => 'http://taran.zzz.com.ua/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100017305998890',
  ],
  [
    'name' => 'Отрішко Олена Олександрівна',
    'desc' => 'Заступник директора',
    'image' => 'otrishko.png',
    'blog' => ''
  ],
  [
    'name' => 'Деркач Ірина Олександрівна',
    'desc' => 'Заступник директора',
    'image' => 'derkach.png',
    'blog' => 'http://c673036t.beget.tech/derkach/'
  ],
  [
    'name' => 'Кобзар Людмила Вікторівна',
    'desc' => 'Вчитель трудового навчання',
    'image' => 'kobzar.png',
    'blog' => 'http://l9557269.beget.tech/visitka/'
  ],
  [
    'name' => 'Дроздова Юлія Олександрівна',
    'desc' => 'Педагог організатор',
    'image' => 'drozdova.png',
    'blog' => ''
  ],
  [
    'name' => 'Карпова Вікторія Юріївна',
    'desc' => 'Заступник директора, вчитель української мови та літератури',
    'image' => 'karpova.png',
    'blog' => 'http://081068viktoriya.blogspot.com/'
  ],
  [
    'name' => 'Бріштен Галина Володимирівна',
    'desc' => 'Вчитель географії та економіки',
    'image' => 'brishten.png',
    'blog' => 'http://visitivka.brishten.zzz.com.ua/'
  ],
  [
    'name' => 'Ласинська Ірина Миколаївна',
    'desc' => 'Вчитель біології та хімії',
    'image' => 'lasinska.png',
    'blog' => 'http://q63405yv.beget.tech/visitivka/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100009746948665',
  ],
  [
    'name' => 'Левітіна Марія Олександрівна ',
    'desc' => 'Вчитель англійської мови',
    'image' => 'levitina.png',
    'blog' => 'http://n637190s.beget.tech/Maria-Levitina/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100012144735965',
  ],
  [
    'name' => 'Галас Світлана Валеріївна',
    'desc' => 'Вчитель англійської мови',
    'image' => 'galas.png',
    'blog' => 'http://f962325u.beget.tech/Svitlana-Galas/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100009192146817',
  ],
  [
    'name' => 'Коміссарова Вікторія Іванівна',
    'desc' => 'Психолог',
    'image' => 'komissarova.png',
    'blog' => '',
    'facebook' => '',
  ],
  [
    'name' => 'Мінакова Наталія Володимирівна',
    'desc' => 'Вчитель зарубіжної літератури',
    'image' => 'minakova.png',
    'blog' => 'http://v634411b.beget.tech/Vizitka/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100009318636911',
  ],
  [
    'name' => 'Рязанова Ольга Станіславівна',
    'desc' => 'Вчитель української мови та літератури',
    'image' => 'ryazanova.png',
    'blog' => 'http://z68450r7.beget.tech/Vizitivka/',
    'facebook' => '',
  ],
  [
    'name' => 'Божко Ольга Олександрівна',
    'desc' => 'Вчитель української мови',
    'image' => 'bozhko.png',
    'blog' => '',
    'facebook' => '',
  ],
  [
    'name' => 'Куликовський Микола Борисович',
    'desc' => 'Вчитель фізики',
    'image' => 'kylikovskiy.png',
    'blog' => '',
    'facebook' => '',
  ],
  [
    'name' => 'Тархова Інна Олегівна',
    'desc' => 'Вчитель математики',
    'image' => 'tarhova.png',
    'blog' => 'http://l6845104.beget.tech/visitivka/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100011587202233',
  ],
  [
    'name' => 'Приходченко Катерина Леонідівна',
    'desc' => 'Бібліотекар',
    'image' => 'pryhodchenko.png',
    'blog' => 'http://g96619ru.beget.tech/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100009052732182',
  ],
  [
    'name' => 'Кондратенко Яна Юріївна',
    'desc' => 'Вчитель фізичної культури',
    'image' => 'kondratenko.png',
    'blog' => 'http://x67588dy.beget.tech/visitka/',
    'facebook' => 'https://www.facebook.com/yana.kondratenko.963',
  ],
  [
    'name' => 'Горб Наталія Вадимівна',
    'desc' => 'Вчитель історії',
    'image' => 'horb.png',
    'blog' => 'http://v63549u9.beget.tech/visitka/',
    'facebook' => '',
  ],
  [
    'name' => 'Одінцова Ольга Віталіївна',
    'desc' => 'Вчитель образотворчого мистецтва',
    'image' => 'odintsova.png',
    'blog' => '',
    'facebook' => '',
  ],
  [
    'name' => 'Сташенко Володимир Павлович',
    'desc' => 'Вчитель інформатики',
    'image' => 'stashenko.png',
    'blog' => 'http://visitivka.stashenko-vp.pp.ua/',
    'facebook' => '',
  ],
  [
    'name' => 'Шагарова Владислава П.',
    'desc' => 'Вчитель інформатики',
    'image' => 'shagarova.png',
    'blog' => 'http://a9955117.beget.tech/',
    'facebook' => 'https://www.facebook.com/vladyslava.shagarova',
  ],
  [
    'name' => 'Лука Ксенія Миколаївна',
    'desc' => 'Соціальний педагог',
    'image' => 'luka.png',
    'blog' => 'http://visitivka.kseniyaluka.kl.com.ua/',
    'facebook' => '',
  ],
  [
    'name' => 'Тур Вікторія Олегівна',
    'desc' => 'Вчитель початкових класів',
    'image' => 'tur.png',
    'blog' => 'http://u99489gj.beget.tech/Victoriia-Tur/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100017202281071',
  ],
  [
    'name' => 'Храпаль Лариса Василівна',
    'desc' => 'Вчитель початкових класів',
    'image' => 'khrapal.png',
    'blog' => 'http://h93397vf.beget.tech/Larysa-Khrapal/',
    'facebook' => 'https://www.facebook.com/larisa.khrapal',
  ],
  [
    'name' => 'Попова Віта Анатоліївна',
    'desc' => 'Вчитель початкових класів',
    'image' => 'popova.png',
    'blog' => 'http://f50779pt.beget.tech/visitivka/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100009322140900',
  ],
  [
    'name' => 'Говоруха Ірина Вікторівна',
    'desc' => 'Вчитель початкових класів',
    'image' => 'govoruha.png',
    'blog' => '',
    'facebook' => '',
  ],
  [
    'name' => 'Россол Марина Олександрівна',
    'desc' => 'Вчитель початкових класів',
    'image' => 'rossol.png',
    'blog' => 'http://d97440xc.beget.tech/Maryna-Rossol/',
    'facebook' => 'https://www.facebook.com/profile.php?id=100016537908008',
  ],
];
?>
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <?php while (have_posts()) : the_post(); ?>
        <article class="post-single">
          <header>
            <h1 class="h2"><?php single_post_title(); ?></h1>
          </header>
          <div class="body">
            <div class="row">
              <?php foreach($teachers as $teacher): ?>
              <div class="col-sm-3 col-xs-6">
                <div class="card card-teacher">
                  <img src="/wp-content/themes/academlyc/img/teachers/<?php echo $teacher['image'] .'?v=250920172211'; ?>" class="img-fluid card-img-top">
                  <div class="teacher__detail">
                    <div class="teacher__detail-name"><?php echo $teacher['name']; ?></div>
                    <div class="teacher__detail-desc"><?php echo $teacher['desc']; ?></div>
                    <div class="teacher__detail-links">
                      <?php if ($teacher['blog']): ?>
                        <a href="<?php echo $teacher['blog']; ?>" alt="Блог"><i class="fa fa-link"></i></a>
                      <?php endif; ?>
                      <?php if ($teacher['facebook']): ?>
                        <a href="<?php echo $teacher['facebook']; ?>" alt="Сторінка у Facebook"><i class="fa fa-facebook"></i></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
