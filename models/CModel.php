<?php

class Cmodel {
    public function GetData() {
        
        //1 вариант-------------------------------------------
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Etiam vel facilisis metus, eget semper neque. Nulla facilisi. Praesent posuere sagittis nisi, at volutpat neque finibus eu.',
        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site New',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Vestibulum quis bibendum velit, eget iaculis odio. Ut cursus ipsum velit, ultricies accumsan magna varius tempus.',
        // );

        //2 вариант--------------------------------------------
        // $mysqli = new mysqli("localhost", "root", "", "sptvr19_php");
        // $result = $mysqli->query("SELECT * FROM blog_php");
        // $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        //3 вариант--------------------------------------------
        $host = '127.0.0.1';
        $db = 'sptvr19_php';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $result = $pdo->query('SELECT * FROM blog_php');
        $arrayResult = $result->fetchAll();

        return $arrayResult;
    }
}