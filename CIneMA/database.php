<?php
    $host = 'localhost';
    $db = 'cinema';
    $user = 'root';
    $pass ='';
    $charset = 'utf8';

    $dsn = "mysql:host=$host; port=3306; dbname=$db; charset=$charset;";

    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    try {
        $pdo = new PDO($dsn,$user,$pass,$opt);
    } catch (PDOException $e) {
        die('Подключение не удалось: '.$e->getMessage());
        exit;
    };
    function connect () {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $connect = new mysqli ('localhost', 'root', '', 'cinema', '3306');
        $connect -> set_charset('utf8');
        return $connect;
    }
    
    
    function m_join () {
        $result = connect() -> query("SELECT movies.*, countries.name_country, genre.name_genre, actors.name_actor, GROUP_CONCAT(actors.name_actor SEPARATOR'. ') FROM actors,actor_movie, countries, genre, movies WHERE movies.id_country = countries.id_country and movies.id_movie = actor_movie.id_movie and actor_movie.id_actor = actors.id_actor and movies.id_genre = genre.id_genre GROUP BY movies.id_movie;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join2 ($genre) {
        $result = connect() -> query("SELECT movies.*, countries.name_country, genre.name_genre, actors.name_actor, GROUP_CONCAT(actors.name_actor SEPARATOR'. ') FROM actors,actor_movie, countries, genre, movies WHERE $genre and movies.id_country = countries.id_country and movies.id_movie = actor_movie.id_movie and actor_movie.id_actor = actors.id_actor and movies.id_genre = genre.id_genre GROUP BY movies.id_movie;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join3 ($time, $group) {
        $result = connect() -> query("SELECT movies.*, countries.name_country, genre.name_genre, actors.name_actor, GROUP_CONCAT(actors.name_actor SEPARATOR'. ') FROM actors,actor_movie, countries, genre, movies WHERE movies.id_country = countries.id_country and movies.id_movie = actor_movie.id_movie and actor_movie.id_actor = actors.id_actor and movies.id_genre = genre.id_genre and $time GROUP BY movies.id_movie ORDER BY $group;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join4 ($time, $group) {
        $result = connect() -> query("SELECT movies.*, countries.name_country, genre.name_genre, actors.name_actor, GROUP_CONCAT(actors.name_actor SEPARATOR'. ') FROM actors,actor_movie, countries, genre, movies WHERE movies.id_country = countries.id_country and movies.id_movie = actor_movie.id_movie and actor_movie.id_actor = actors.id_actor and movies.id_genre = genre.id_genre and $time GROUP BY movies.time ORDER BY $group;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join5 () {
        $result = connect() -> query("SELECT * FROM countries");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join6 () {
        $result = connect() -> query("SELECT * FROM genre");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join7 () {
        $result = connect() -> query("SELECT * FROM actors");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join8 () {
        $result = connect() -> query("SELECT TAB.*,COUNT(name_genre) as rb FROM (SELECT movies.*,genre.name_genre, GROUP_CONCAT(actors.name_actor SEPARATOR ', ') as name_actors FROM movies JOIN countries ON movies.id_country = countries.id_country JOIN actor_movie ON movies.id_movie = actor_movie.id_movie JOIN actors ON actor_movie.id_actor= actors.id_actor JOIN genre ON movies.id_genre = genre.id_genre GROUP BY movies.id_movie) AS TAB GROUP BY name_genre;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join9 () {
        $result = connect() -> query("SELECT TAB.*,COUNT(name_country) as rs FROM (SELECT movies.*,countries.name_country, GROUP_CONCAT(actors.name_actor SEPARATOR ', ') as name_actors FROM movies JOIN countries ON movies.id_country = countries.id_country JOIN actor_movie ON movies.id_movie = actor_movie.id_movie JOIN actors ON actor_movie.id_actor= actors.id_actor JOIN genre ON movies.id_genre = genre.id_genre GROUP BY movies.id_movie) AS TAB GROUP BY name_country;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join10 () {
        $result = connect() -> query("SELECT TAB.*,COUNT(name_actor) as rb FROM (SELECT movies.*,actors.name_actor, GROUP_CONCAT(actors.name_actor SEPARATOR ', ') as name_actors FROM movies JOIN countries ON movies.id_country = countries.id_country JOIN actor_movie ON movies.id_movie = actor_movie.id_movie JOIN actors ON actor_movie.id_actor= actors.id_actor JOIN genre ON movies.id_genre = genre.id_genre GROUP BY movies.id_movie) AS TAB GROUP BY name_actor;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join11 () {
           $result = connect() -> query("SELECT movies.*, countries.name_country, genre.name_genre, actors.name_actor, GROUP_CONCAT(actors.name_actor SEPARATOR'. ') FROM actors,actor_movie, countries, genre, movies WHERE movies.id_country = countries.id_country and movies.id_movie = actor_movie.id_movie and actor_movie.id_actor = actors.id_actor and movies.id_genre = genre.id_genre GROUP BY movies.id_movie;");
        $result = $result -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    function m_join12 () {
        $result = connect() -> query("SELECT * FROM movies;");
     $result = $result -> fetch_all(MYSQLI_ASSOC);
     return $result;
 }
 function m_join13 () {
    $result = connect() -> query("SELECT id, name_actor, name, foto
    FROM actor_movie 
    INNER JOIN movies ON actor_movie.id_movie = movies.id_movie
    INNER JOIN actors ON actor_movie.id_actor = actors.id_actor
    WHERE actor_movie.id_movie = actor_movie.id_actor");
 $result = $result -> fetch_all(MYSQLI_ASSOC);
 return $result;
}

   
?>