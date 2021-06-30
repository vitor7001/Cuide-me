<?php

include_once('src/utils/View.php');
include_once('src/controllers/pages/Page.php');
include_once('src/models/entity/UserGeneric.php');

class Home extends Page{
    public static function getHome(){

        $user = new UserGeneric;

       $content = View::renderizarView('pages/home', [
            'name' => $user->name,
            'desc' => $user->email
        ]);
        return Page::getPage('Cuide-me', $content);
    }
}