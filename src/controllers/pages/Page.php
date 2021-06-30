<?php

include_once('src/utils/View.php');

class Page{

    private static function getHeader(){
        return View::renderizarView('pages/header');
    }

    private static function getFooter(){
        return View::renderizarView('pages/footer');
    }


    public static function getPage($title, $content){
        return View::renderizarView('pages/page', [
            'title' => $title,
            'content' => $content,
            'header' => self::getHeader(),
            'footer' => self::getFooter()

        ]);
    }
}