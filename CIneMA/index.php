<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запрос 1</title>
    <style>
        *{
            color: white;
        }
        body{
            background-color: #343434;
        }
        h1{
            text-align: center;
        }
        table{
            margin: auto;
        }
        th{
            padding-right:70px ;
        }
        
       
    </style>
</head>
<body>
    <a href="index2.php">ddd</a>
    <?php
        require_once 'database.php';
        $connect = connect('CIneMA')
    ?>
    <h1></h1>
    <?php
        // $result = $pdo->query("SELECT * FROM m_join ");
        // $rows = $result->fetchAll();
    ?>
    <table border='2px' width=900>
    <h1>Таблица фильмов</h1>
        <table>
            <tr>
            <th>номер</th>
            <th>Фильм</th>
            <th>Страна</th>
            <th>режисер</th>
            <th>актеры</th>
            <th>время</th>
            <th>жанр</th>
            <th>год</th>
            </tr>

            <?php
            $result = m_join ();
            foreach ($result as $item ) {
                ?>
                <tr>
                    <td><?= $item['id_movie'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['name_country'] ?></td>
                    <td><?= $item['director'] ?></td>
                    <td><?= $item['name_actor'] ?></td>
                    <td><?= $item['time'] ?></td>
                    <td><?= $item['name_genre'] ?></td>
                    <td><?= $item['year'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h1>Таблица фильмов</h1>
        <table>
            <tr>
            <th>номер</th>
            <th>Фильм</th>
            <th>Страна</th>
            <th>режисер</th>
            <th>актеры</th>
            <th>время</th>
            <th>жанр</th>
            <th>год</th>
            </tr>

            <?php
            $result = m_join2 ('name_genre = "комедия"');
            foreach ($result as $item) {
                ?>
                <tr>
                    <td><?= $item['id_movie'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['name_country'] ?></td>
                    <td><?= $item['director'] ?></td>
                    <td><?= $item['name_actor'] ?></td>
                    <td><?= $item['time'] ?></td>
                    <td><?= $item['name_genre'] ?></td>
                    <td><?= $item['year'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h1>Таблица фильмов</h1>
        <table>
            <tr>
            <th>номер</th>
            <th>Фильм</th>
            <th>Страна</th>
            <th>режисер</th>
            <th>актеры</th>
            <th>время</th>
            <th>жанр</th>
            <th>год</th>
            </tr>

            <?php
            $result = m_join2 ('name_genre = "боевик" and name_country = "Россия"');
            foreach ($result as $item) {
                ?>
                <tr>
                    <td><?= $item['id_movie'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['name_country'] ?></td>
                    <td><?= $item['director'] ?></td>
                    <td><?= $item['name_actor'] ?></td>
                    <td><?= $item['time'] ?></td>
                    <td><?= $item['name_genre'] ?></td>
                    <td><?= $item['year'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h1>Таблица фильмов</h1>
        <table>
            <tr>
            <th>номер</th>
            <th>Фильм</th>
            <th>Страна</th>
            <th>режисер</th>
            <th>актеры</th>
            <th>время</th>
            <th>жанр</th>
            <th>год</th>
            </tr>

            <?php
            $result = m_join2 ('name_genre = "комедия" and name_country = "Франция"');
            foreach ($result as $item) {
                ?>
                <tr>
                    <td><?= $item['id_movie'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['name_country'] ?></td>
                    <td><?= $item['director'] ?></td>
                    <td><?= $item['name_actor'] ?></td>
                    <td><?= $item['time'] ?></td>
                    <td><?= $item['name_genre'] ?></td>
                    <td><?= $item['year'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h1>Таблица фильмов</h1>
        <table>
            <tr>
            <th>номер</th>
            <th>Фильм</th>
            <th>Страна</th>
            <th>режисер</th>
            <th>актеры</th>
            <th>время</th>
            <th>жанр</th>
            <th>год</th>
            </tr>

            <?php
            $result = m_join3 ('year >= 1995 and year <= 2005','year');
            foreach ($result as $item) {
                ?>
                <tr>
                    <td><?= $item['id_movie'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['name_country'] ?></td>
                    <td><?= $item['director'] ?></td>
                    <td><?= $item['name_actor'] ?></td>
                    <td><?= $item['time'] ?></td>
                    <td><?= $item['name_genre'] ?></td>
                    <td><?= $item['year'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h1>Таблица фильмов</h1>
        <table>
            <tr>
            <th>номер</th>
            <th>Фильм</th>
            <th>Страна</th>
            <th>режисер</th>
            <th>актеры</th>
            <th>время</th>
            <th>жанр</th>
            <th>год</th>
            </tr>

            <?php
            $result = m_join3 ('time <= 100','time');
            foreach ($result as $item) {
                ?>
                <tr>
                    <td><?= $item['id_movie'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['name_country'] ?></td>
                    <td><?= $item['director'] ?></td>
                    <td><?= $item['name_actor'] ?></td>
                    <td><?= $item['time'] ?></td>
                    <td><?= $item['name_genre'] ?></td>
                    <td><?= $item['year'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        
</body>
</html>