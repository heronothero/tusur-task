<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Тестовое задание</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        @vite(['resources/js/app.js'])
    </head>
    <body class=main>
        <div class="flipper">
            <div class="figure">
                <div class="side main-block">
                    <form method="POST" action="calculate" class="side-form">
                        @csrf
                    <h4 id="title">Решение квадратного уравнения</h4>
                    <div class="value">
                        <b>a =</b>
                        <input type="number" name="a" class="input-value" placeholder="Введите значение...">
                    </div>
                    <div class="value">
                        <b>b =</b>
                        <input type="number" name="b" class="input-value" placeholder="Введите значение...">
                    </div>
                    <div class="value">
                        <b>c =</b>
                        <input type="number" name="c" class="input-value" placeholder="Введите значение...">
                    </div>
                    <div class=btn>
                    <button class="bttn" type="submit">Найти решение</button>
                    </div>
                    <div class="history">
                        <a href="/history" class="link">История</a>
                    </div>
                    </form>
                </div>
                <div class="side results">
                    <h4 id="title">Решение</h4>
                    <div class="result-info">
                        <div class="value-result">
                            <p><b>D = {{ $D }}</b></p>
                        </div>
                        <div class="value-result">
                            <p><b>X<sub>1</sub> = {{ $X1 }}</b></p>
                        </div>
                        <div class="value-result">
                            <p><b>X<sub>2</sub> = {{ $X2 }}</b></p>
                        </div>
                    </div>
                    <div class="btn">
                        <button id="backButton" class="bttn">Назад</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
