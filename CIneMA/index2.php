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
        img{
            width:150px;
            
        }
       
    </style>
</head>
<body>
<a href="index.php">f</a>
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
    <h1></h1>
        <table>
            <tr>
            <th>N</th>
            <th>Страна</th>
            </tr>

            <?php
            $result = m_join5 ();
            foreach ($result as $item ) {
                ?>
                <tr>
                    <td><?= $item['id_country'] ?></td>
                    <td><?= $item['name_country'] ?></td> 
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        // $result = $pdo->query("SELECT * FROM m_join ");
        // $rows = $result->fetchAll();
    ?>
    <table border='2px' width=900>
    <h1></h1>
        <table>
            <tr>
            <th>N</th>
            <th>Страна</th>
            </tr>

            <?php
            $result = m_join6 ();
            foreach ($result as $item ) {
                ?>
                <tr>
                    <td><?= $item['id_genre'] ?></td>
                    <td><?= $item['name_genre'] ?></td> 
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        // $result = $pdo->query("SELECT * FROM m_join ");
        // $rows = $result->fetchAll();
    ?>
    <table border='2px' width=900>
    <h1></h1>
        <table>
            <tr>
            <th>N</th>
            <th>Страна</th>
            </tr>

            <?php
            $result = m_join7 ();
            foreach ($result as $item ) {
                ?>
                <tr>
                    <td><?= $item['id_actor'] ?></td>
                    <td><?= $item['name_actor'] ?></td> 
                    <td > <img src="<?= $item['foto'] ?>" alt=""><?= $item[''] ?></td> 
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        // $result = $pdo->query("SELECT * FROM m_join ");
        // $rows = $result->fetchAll();
    ?>
    <table border='2px' width=900>
    <h1></h1>
        <table>
            <tr>
            <th>жанр</th>
            <th>Количество</th>
            </tr>

            <?php
            $result = m_join8 ();
            foreach ($result as $item ) {
                ?>
                <tr>
                    <td><?= $item['name_genre'] ?></td>
                    <td><?= $item['rb'] ?></td> 
                    
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        // $result = $pdo->query("SELECT * FROM m_join ");
        // $rows = $result->fetchAll();
    ?>
    <table border='2px' width=900>
    <h1></h1>
        <table>
            <tr>
            <th>жанр</th>
            <th>Количество</th>
            </tr>

            <?php
            $result = m_join9 ();
            foreach ($result as $item ) {
                ?>
                <tr>
                    <td><?= $item['name_country'] ?></td>
                    <td><?= $item['rs'] ?></td> 
                    
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        // $result = $pdo->query("SELECT * FROM m_join ");
        // $rows = $result->fetchAll();
    ?>
    <table border='2px' width=900>
    <h1></h1>
        <table>
            <tr>
            <th>жанр</th>
            <th>Количество</th>
            </tr>

            <?php
            $result = m_join10 ();
            foreach ($result as $item ) {
                ?>
                <tr>
                    <td><?= $item['name_actor'] ?></td>
                    <td><?= $item['rb'] ?></td> 
                    
                </tr>
                <?php
            }
            ?>
        </table>
        <h1>Список фильмов с актёрами</h1>
            <?php 
                    $rezult = $pdo -> query("SELECT * FROM movies");
                    $rowss = $rezult -> fetchall();
                    foreach($rowss as $arrys){?>
                                                <h3><?=$arrys['name'] ?></h3>
                    <?php
                        $result = $pdo -> query("SELECT id, name_actor, name, foto
                        FROM actor_movie 
                        INNER JOIN movies ON actor_movie.id_movie = movies.id_movie
                        INNER JOIN actors ON actor_movie.id_actor = actors.id_actor
                        WHERE actor_movie.id_movie = ". $arrys['id_movie'] . ""
                        );
                        $rows = $result -> fetchall();
                        foreach( $rows as $arry ){
                            ?>
                            <?=$arry['name_actor'] ?>
                            <img src="img/<?=$arry['name_actor'] ?>.jpg" alt="riw">
                            <?php 
                        }?> <?
                    }

                ?>
                <?php
                 
                $rezult = $pdo->query("SELECT * FROM movies INNER JOIN genre ON movies.id_genre=genre.id_genre
                INNER JOIN countries ON movies.id_country=countries.id_country");
                $rows = $rezult ->fetchall();
                 
                foreach($rows as $row) { ?> 
                <div style="height:480px;width:650px;
                border:1px solid teal;
                padding:10px; margin:20px;
                background:tan">

                <img src="<?row['poster'] ?>" alt="рисунок" style="width:300px;floar:right">
                <h3> №: <?=$row['id_movie']?>. <?=$row['name'] ?> </h3>
                <p> <b>Страна: </b>  <?=$row['name_country']?></p>
                <p> <b>режиссер: </b>  <?=$row['director']?></p>
                <p> <b>Время: </b>  <?=$row['time']?></p>
                <p> <b>Жанр: </b>  <?=$row['name_genre']?></p>
                <p> <b>Бюджет: </b>  <?=$row['budget']?></p>
                <p> <b>Год: </b>  <?=$row['year']?></p>
                <p> <b>Актеры: </b>          </p>
                <p><b>Содержание: </b><br> <?=$row['content'] ?>       </p>
                </div>
                <?} ?>
        
           
       
       
       
</body>
</html>