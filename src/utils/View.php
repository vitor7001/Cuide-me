<?php



class View{

    private static function buscarConteudoView($view){
        $file = __DIR__.'/../views/'.$view.'.html';
        //return "ESSE E O PATH ==>>".$file;
        return file_exists($file) ? file_get_contents($file) : '';
    }

    public static function renderizarView($view, $vars = []){
        $conteudoDaView = self::buscarConteudoView($view);


        $keys = array_keys($vars);

        $keys = array_map(function($item){
            return  '{{'.$item.'}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $conteudoDaView);
    }

}