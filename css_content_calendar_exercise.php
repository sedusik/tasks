

/*
Основные стили календаря
Цвет текста: #fff
Размер шрифта: 16px
Межстрочный интервал: 1
Шрифт: Rubik. Файлы шрифтов находятся в директории assets
Цвет фона: #e5e5e5
Обёртка
Ширина: 250px
Внутренние отступы: 60 пикселей сверху, справа и слева. 30 пикселей снизу
Фон: #1e1f25
Закругление: 12px
Заголовок второго уровня
Внешний отступ снизу: 30px. Отступы с остальных сторон: 0px
Жирное начертание
Размер шрифта: 16px
Календарь
Внешний отступ снизу: 30px
Внутренний отступ снизу: 20px
Размер шрифта: 14px с межстрочным интервалом 2
Граница снизу с цветом #313131 и размером 1 пиксель
Ячейки с числами
Цвет чисел: #ccc с выравниванием по центру.
Внутренний отступ у чисел: 0
Межстрочный интервал: 2.3
Список дел
Внешние отступы у названия: 5px сверху и 20 пикселей снизу
Размер шрифта названия дела: 14px
Цвет времени: #ccc
Размер шрифта времени: 10px
Сбросьте внешние и внутренние отступы у списка
Подсказки
Путь к шрифтам:
../assets/fonts/Rubik-Regular.woff2
../assets/fonts/Rubik-Bold.woff2

*/



css

/* BEGIN (write your solution here) */
@font-face {
font-family: "Rubik-Regular";
src: url("../assets/fonts/Rubik-Regular.woff2");
}

@font-face {
font-family: "Rubik-Bold";
src: url("../assets/fonts/Rubik-Bold.woff2");
}

/* END */

body {
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
margin: 0;

/* BEGIN (write your solution here) */
color: #fff;
font-size: 16px;
line-height: 1;
font-family: "Rubik-Regular";
background-color: #e5e5e5;
/* END */
}

/* BEGIN (write your solution here) */
.calendar {
width: 250px;
padding: 60px 60px 30px 60px;
background-color: #1e1f25;
border-radius: 12px;
}

.calendar h2 {
margin: 0px 0px 30px 0px;
font-weight: bold;
font-size: 16px;
font-family: "Rubik-Bold";
text-align: center;
}

.calendar
.calendar-date {
margin-bottom: 30px;
padding-bottom: 20px;
font-size: 14px;
line-height: 2;
border-bottom: 1px solid #313131;
box-sizing: border-box;
width: 100%;
}

.calendar
.calendar-date td {
text-align: center;
padding: 0;
color:#ccc;
line-height: 2.3;
}

.calendar-todo {
margin: 0;
padding: 0;
list-style-type: none;

}

.calendar-todo
.todo-name {
margin: 5px 0px 20px 0px;
font-size: 14px;
}

.calendar-todo
.todo-time {
color: #ccc;
font-size: 10px;
}

/* END */

.rounded-green {
color: #fff;

background: #589c5f;
border-radius: 50%;
}


html

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Календарь</title>
    <link rel="stylesheet" href="styles/app.css">
</head>

<body>
<section class="calendar">
    <h2 class="calendar-header">Апрель 2021</h2>
    <table class="calendar-date">
        <thead>
        <tr>
            <th>Пн</th>
            <th>Вт</th>
            <th>Ср</th>
            <th>Чт</th>
            <th>Пт</th>
            <th>Сб</th>
            <th>Вс</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
        </tr>
        <tr>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td class="rounded-green">15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
        </tr>
        <tr>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
        </tr>
        <tr>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <ul class="calendar-todo">
        <li>
            <small class="todo-time">8:15</small>
            <p class="todo-name">Погладить галстук</p>
        </li>
        <li>
            <small class="todo-time">10:00</small>
            <p class="todo-name">Заехать за Алексеем</p>
        </li>
        <li>
            <small class="todo-time">17:30</small>
            <p class="todo-name">Церемония награждения</p>
        </li>
    </ul>
</section>
</body>

</html>