<!DOCTYPE html>
<html>
<head>
  <title>My sitу broken</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="css/main.css">
 
  <script src="scripts/datetime.js"></script>
  <script src="scripts/navbar.js"></script>
  <script src="scripts/scroll.js"></script>
  <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>

  <div id="header">
    <h1>Мой сайт</h1>
  </div>
   <div id="navbar">
    <a href="#resume">Резюме</a>
    <a href="#resume_eng">Resume</a>
    <a href="#bio">Биография</a>
    <a href= "#hobby">Хобби</a>
    <a href="#taskjs">Задания JS</a>
   </div>
   
   <div id="resume">
      <h1 align='center'>Мое резюме</h1>
      <h2 align='center'>Хван Константин Леонидович</h2>
      <img src="images/me.jpg" alt ='my_photo'>
      <br/>
      <p>20 лет, родился 14 октября 2000</p>
      <br/>
      <p><b>Номер телефон: </b>8(918)-288-21-54</p>
      <br/>
      <p><b>Проживает: </b> Краснодар</p>
      <br/>
      <p><b>Гражданство: </b> Россия, есть разрешение на работу: Россия</p>
      <br/>
      <p><b>Желаемая должность и зарплата: </b>Системный аналитик (60000 руб.)</p>

      <br/>
      <p><b>Образование: </b> Кубанский Государственный университет (2022г.)</p>
      <br/>
      <p><h2>Ключевые навыки:</h2><ul>
        <li>Исполнительность</li> 
        <li>Ответственность</li>
        <li>Честность</li>
        <li>Добросовестность</li>
        <li>Быстрая обучаемость</li>
        <li>Грамотность</li>
      </p>
      <br/>
      <p><b>Обо мне: </b>Имею навыки программирования на С++, C#, Python, изучала ООП, паттерны программирования, занимался разработкой Case-технологии проектирования и UML-проектирования (IDEF0-диаграммы, Use case - диаграммы прецендентов, Sequence-диаграммы) в рамках образовательной программы университета. 
        На данный момент наибольший интерес вызывает DDD, Паттерны, Проектирование. 
        Готов изучать новое, совершенствовать или приобретать навыки, пробовать себя в решении заданий</p>
        <br/>
    </div>

  <div id="resume_eng">
      <h1 align='center'>My resume</h1>
      <h2 align='center'>Khvan Konstantin Leonidovich</h2>
      <img src="images/me.jpg" alt ='my_photo'/>
      <br/>
      <p>20 years old, I was born in 14 October 2000</p>
      <br/>
      <p><b>Mobphone number is </b>8(918)-288-21-54</p>
      <br/>
      <p><b>Lives in </b> Krasnodar</p>
      
      <p><b>Citizenship is </b> Russia, I have a work permit in Russia</p>
      <p><b>Desired position and salary: </b>System Analyst (60000 rub)</p>

      <p><b>Education: </b> Kuban State University (2022)</p>
      <p><h2 >Core skills:</h2><ul>
        <li>Punctuality</li> 
        <li>Responsibility</li>
        <li>Honesty</li>
        <li>Conscientiousness</li>
        <li>Adaptability</li>
        <li>Competence</li>
      </p>
      <br/>
      <p><b>About me: </b>I have programming skills in C++, C#, Python, studied OOP, programming patterns, was engaged in the development of Case - design technology and UML-design (IDEF0-diagrams, Use case-diagrams of precents, Sequence-diagrams) as part of the university's educational program.
At the moment, I`ve interested in DDD, Design Patterns, Prototyping.
I am ready to learn new things, improve or acquire skills, try myself in solving tasks</p>
      <br/>
      </div>

   <div id="bio">

   
      <h1>Моя биография</h1>
      Родился в г. Фергана в 2000 году. В 2006 г. переехал с семьей в Россию. С 2006 по 2010 жил в Уссурийске. Учился в сельской школе. В 2010 году переехал в ст. Сергиевская в Краснодарском крае.
      Закончил школу там же, в 2018 году, с золотой медалью. После поступил в Кубанский Государственный Университет по направлению "Фундаментальная информатика". ---Я тут---

  </div>

  <div id="hobby">
      <h1>Мои Хобби</h1>
      У меня не так-то много хобби. Единственное хобби, что у меня есть - это программирование и проектирование. Еще люблю слушать музыку. Любимый жанр - роцк.
  </div>

  <div id="taskjs">
    
   <h1>Задания JS</h1>

   <button class="collapsible">Задание 1</button>
   <div class="content">
    <div id = "time_block"></div>
   </div>
   
   <button class="collapsible">Задание 2</button>
   <div class="content">
    <div id="month-calendar">
      <ul class="month">
          <li class="prev"><i class="fas fa-angle-double-left" aria-hidden="true"></i></li>
          <li class="next"><i class="fas fa-angle-double-right" aria-hidden="true"></i></li>
          <li class="month-name"></li>
          <li class="year-name"></li>
      </ul>
      <ul class="weekdays">
          <li>Пн</li>
          <li>Вт</li>
          <li>Ср</li>
          <li>Чт</li>
          <li>Пт</li>
          <li>Сб</li>
          <li>Вс</li>
      </ul>
      <ul class="days">
      </ul>
    </div>
   </div>
   
   <button class="collapsible">Задание 3</button>
   <div class="content">
     <div id="userdiv">

     </div>
   </div>
   
   <button class="collapsible">Задание 4</button>
   <div class="content">
     <div id= "changediv">
        Hello? Do you know the way?
     </div>
   </div>

   <button class="collapsible">Задание 5</button>
   <div class="content">
     <div id="hidelist">
      <span class="title">Сладости!</span>
       <ul> 
         <li>Мед</li>
         <li>Конфета</li>
         <li>Пирог</li>
       </ul>
     </div>
   </div>

   <button class="collapsible">Задание 6</button>
   <div class="content">
     <div id = "imagediv">
        <img src="images/picture1.jpg"; alt="Картинка"/>
      </div>
   </div>

   <button class="collapsible">Задание 7</button>
   <div class="content">
    <div id = "imagediv2">
      <img src="images/picture2.jpg"; alt="Картинка"/>
      <div id="centered">Hello, World!</div>
    </div>
   </div>

   <button class="collapsible">Задание 8</button>
   <div class="content">
    <div class="form-wrap">
      <div class="profile"><img src="images/user.png">
        <h1>Анкета Web-разработчика</h1>
      </div>
      <form method="post" action="scripts/form.php  ">
        <div>
          <label for="name">Имя</label>
          <input type="text" name="name" pattern="^[a-zA-Z](.[a-zA-Z0-9_-]*)$" required>
        </div>
        <div>
          <label for="password">Пароль</label>
          <input type="password" name="password" required>
        </div>
        <div>
          <label for="password_repeat">Повторите пароль</label>
          <input type="password" name="password_repeat" required>
        </div>
        <div>
          <label for="date">Дата рождения</label>
          <input type="date" name="birthdate" value="2000-10-14" required>
        </div>
        <div class="radio">
          <span>Пол</span>
          <label>
            <input type="radio" name="sex" value="мужской">мужской
            <div class="radio-control male"></div>
          </label>
          <label>
            <input type="radio" name="sex" value="женский">женский
            <div class="radio-control female"></div>
          </label>
        </div>
        <div>
          <label for="email">E-mail</label>
          <input type="text" name="email" pattern="^(([a-zа-я0-9_-]+\.)*[a-zа-я0-9_-]+@[a-zа-я0-9-]+(\.[a-zа-я0-9-]+)*\.[a-zа-я]{2,6})?$" required>
        </div>
        <div>
          <label for="mobphone">Мобильный телефон</label>
          <input type="text" name="mobphone" pattern="^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$" placeholder="8" required>
        </div>
      
        <div>
          <label for="spec">Ваша специализация</label>
          <select name="spec">
            <option>Выберите свою специализацию</option>
            <option value="Backend-разработчик">Backend-разработчик</option> 
            <option value="Fronted-разработчик">Fronted-разработчик</option> 
            <option value="Системный аналитик">Системный аналитик</option> 
          </select> 
          <div class="select-arrow"></div> 
        </div> 
        <button type="submit">Отправить</button> 
      </form> 
    </div>
    </div>

   <button class="collapsible">Задание JQuery</button>
   <div class="content">
   <a href="JQuery+AJAX.php">Ссылка на форму (jquery)</a>    
   </div>


   <button class="collapsible">Задание PHP</button>
   <div class="content">
     <a href="form.php">Ссылка на форму</a>
   </div>
   
  </div>
 

  <div id="footer">
    <img src="images/logo.png" alt="My logo"/>
  </div>  

 <script src="scripts/collapse.js"></script>
 <script src="scripts/calendar.js"></script>
 <script src= "scripts/useradd.js"></script>
 <script src= "scripts/changefield.js"></script>
 <script src="scripts/hidelist.js"></script>
 <script src="scripts/imgscript.js"></script>
 <script src="scripts/imgscript2.js"></script>

</body>
</html>
