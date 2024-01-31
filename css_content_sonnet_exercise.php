

/*
В этом испытании вам предстоит реализовать вёрстку 85 сонета Уильяма Шекспира в виде рукописного текста на листке бумаги. Вся вёрстка уже готова в файле index.html. Ваша задача — создать стили бумаги с помощью градиента

Сонет Шекспира на CSS

Задание
Подключите шрифты Caveat и Marck Script. Они расположены в директории assets/fonts/

Блок notebook
Размеры: 750 на 700 пикселей
Внутренний отступ сверху: 50 пикселей. Отступ не должен увеличивать размер блока
Блок paper
Блок занимает всю доступную высоту
Внутренние отступы: по 60 пикселей слева и справа
Размер шрифта и межстрочный интервал находятся в соответствующих переменных
Блок имеет градиент, имитирующий полоски тетради. Градиент состоит из двух цветов: белый #ffffff и зелёный #80cbc4. Подумайте, как создать полосы с помощью точек остановки
pre
Внешние отступы: 0
Внутренний отступ сверху: 10 пикселей
Шрифт: Caveat
Блок author
Шрифт: Marck Script
Выравнивание текста: по правому краю
Подсказки
Точки остановки градиента имеют прямую зависимость от межстрочного интервала. Размер зелёной линии: 1 пиксель
Браузер Firefox, для корректного отображения, требует наличие свойства background-size. Тесты проходят в браузере Chrome, где это свойство не требуется. Поэтому лучше проходить задание именно в этом браузере
Пути к шрифтам:
../assets/fonts/caveat.woff2
../assets/fonts/marckscript.woff2

*/



css

:root {
--font-size: 27px;
--line-height: 37.5px;
}

/* BEGIN (write your solution here) */
@font-face {
font-family: "Caveat";
src: url("../assets/fonts/caveat.woff2");
}

@font-face {
font-family: "Marck-Script";
src: url("../assets/fonts/marckscript.woff2");
}

/* END */

body {
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
margin: 0;

background-color: #4db6ac;
}

.notebook {
position: relative;

/* BEGIN (write your solution here) */
width: 750px;
height: 700px;
padding-top: 50px;
box-sizing: border-box;
/* END */

word-spacing: 6px;

background-color: #fff;
box-shadow: 4px 6px 16px 3px #009688;
}

.notebook::before {
position: absolute;
top: 0;
left: 50px;

width: 2px;
height: 100%;

background-color: #ff5722;

content: "";
}

/* BEGIN (write your solution here) */
.paper {
height: 100%;
padding-left: 60px;
padding-right: 60px;
font-size: var(--font-size);
line-height: var(--line-height);
background: repeating-linear-gradient(#ffffff, #ffffff 36.5px,
#80cbc4 36.5px, #80cbc4 37.5px);
}

.paper pre {
margin: 0;
padding-top: 10px;
font-family: "Caveat";
}

.author {
font-family: "Marck-Script";
text-align: right;
}

/* END */

html

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>William Shakespeare. Sonnet 85</title>
    <link rel="stylesheet" href="styles/app.css">
</head>

<body>
<div class="notebook">
    <div class="paper"><pre>My tongue-tied Muse in manners holds her still,
While comments of your praise, richly compiled,
Reserve their character with golden quill
And precious phrase by all the Muses filed.
I think good thoughts, whilst other write good words,
And like unlettered clerk still cry 'Amen'
To every hymn that every spirit affords
In polished form of well-refind pen.
Hearing you praised, I say, ''Tis so, 'tis true',
And to the most of praise add something more;
But that is in my thought, whose love to you
(Though words come hindmost) holds his rank before.
Then others for the breath of words respect,
Me for my dumb thoughts, speaking in effect.


<div class="author">William Shakespeare</div></pre>
    </div>
</div>
</body>
</html>