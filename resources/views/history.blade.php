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
        <div class="back">
            <a href="/" class="link">Назад</a>
        </div>
        <h4 id="title">История</h4>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>a</th>
                        <th>b</th>
                        <th>c</th>
                        <th>D</th>
                        <th>X<sub>1</sub></th>
                        <th>X<sub>2</sub></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                    <tr>
                        <td>{{ $result->a }}</td>
                        <td>{{ $result->b }}</td>
                        <td>{{ $result->c }}</td>
                        <td>{{ $result->D }}</td>
                        <td>{{ $result->X1 }}</td>
                        <td>{{ $result->X2 }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
