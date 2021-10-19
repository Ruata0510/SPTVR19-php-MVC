<?php

class Cmodel {
    public function GetData() {
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site',
            'DATE' => '22.06.2020',
            'AUTHOR' => 'VolDeMort',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Etiam vel facilisis metus, eget semper neque. Nulla facilisi. Praesent posuere sagittis nisi, at volutpat neque finibus eu.',
        );
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site New',
            'DATE' => '21.10.2021',
            'AUTHOR' => 'Igor',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Vestibulum quis bibendum velit, eget iaculis odio. Ut cursus ipsum velit, ultricies accumsan magna varius tempus.',
        );
        return $arrayResult;
    }
}