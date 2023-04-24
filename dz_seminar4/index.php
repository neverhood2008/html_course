<?php
$job = [
    [
        'job_title' => 'с#-разработчик',
        'job_date_start'=> '2010',
        'job_date_end'=> '2013',
        'description' => 'Опыт работы коммерческой разработки от 2,5 лет;
Опыт применения в работе классических алгоритмов;
Знание структур данных;
Понимание теории реляционных БД, умение не только писать код ORM, но и строить SQL запросы, оптимизировать их, выстраивать архитектуру БД для проекта;
Умение работать как с JSON, так и YAML.
Уметь составлять документацию к продукту, в том числе автодокументирование кода.
Хорошее знание Python 3.6+ и одного или нескольких из фреймворков (Django, Flask, aiohttp, Sanic, FastAPI);
Знание pytest и/или unittest, умение грамотно писать тесты к коду, практика TDD;
Умение работать с вебсокетами;
Следование принципам DRY, KISS, SOLID.123',
    ],
      [
        'job_title' => 'python-разработчик',
         'job_date_start'=> '2013',
        'job_date_end'=> '2015',
        'description' => 'Проектирование и разработка новых программных продуктов с нуля;
Поддержка существующих продуктов;
Интеграция информационных систем;
Профилирование и оптимизация кода.',
    ],
      [
        'job_title' => 'python-разработчик',
           'job_date_start'=> '2015',
        'job_date_end'=> '2019',
        'description' => 'Опыт проектирования API для интеграции с внешними системами;
Приветствуется знание HTML, CSS/SCSS, JavaScript;
Приветствуется опыт работы с Celery, RabbitMQ или фоновыми задачами в aiohttp, fastapi;',
    ],
      [
        'job_title' => 'системный аналитик',
          'job_date_start'=> '2019',
        'job_date_end'=> 'по текущее время',
        'description' => 'Осуществлять сбор и формализацию бизнес и функциональных требований, согласовывать требования, управлять ими.
Описывать бизнес-процессы as is и to be, моделировать предметную область (BPMN2.0, UML)
Разрабатывать проектную документацию (use cases, проектные решения, технические задания, регламенты и инструкции), сопровождать и актуализировать ее на протяжении всего процесса реализации.
Моделировать базы данных (ERD на логическом уровне).
Проектировать интеграции (описывать интеграционные сценарии, интерфейсы, маппинг данных).
Взаимодействовать с командой, заинтересованными лицами, заказчиком; демонстрировать функциональность системы.
Проектировать пользовательские интерфейсы.',
    ],
    
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2>Имя</h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <p>Adobe Photoshop</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
            </div>
            <p>Photography</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                <div class="w3-center w3-text-white">80%</div>
              </div>
            </div>
            <p>Illustrator</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
            </div>
            <p>Media</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
            </div>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <?php for ($i=0;$i<count($job);$i++):?>
           <div class="w3-container">
            <h5 class="w3-opacity"><b><?=$job[$i]['job_title']?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?=$job[$i]['job_date_start']?>-
            <?php if ($job[$i]['job_date_end']=='по текущее время'):?>
            <span
                class="w3-tag w3-teal w3-round">  <?=$job[$i]['job_date_end']?></span>
            <?php else :?>
            <?=$job[$i]['job_date_end']?>
            <?php endif;?>
            </h6>
            <p><?=$job[$i]['description']?></p>
            <hr>
          </div>
          <?php endfor ;?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Front End Developer </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span
                class="w3-tag w3-teal w3-round">Current</span></h6>
            <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit
              sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
            <hr>
          </div>
         
         
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>