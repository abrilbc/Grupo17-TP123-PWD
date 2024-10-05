<?php

class Templates
{
    private $mostacho;

    public function __construct()
    {
        $this->mostacho = (new \Mustache_Engine( // crear el formato
            ['partials_loader' => new \Mustache_Loader_FilesystemLoader('view/partials')]
        ));
    }

    public function getMostacho()
    {
        return $this->mostacho;
    }

    public function setMostacho($mostacho)
    {
        $this->mostacho = $mostacho;
    }

    public function render($template, $data)
    {
        // echo $template;
        // $template = @file_get_contents('view/' . $template . '.mustache');
        $templatePath = 'view/' . $template . '.mustache';
        $template = @file_get_contents($templatePath);

        if ($template === false) {
            $template = file_get_contents('view/404.mustache'); // 404 page not found
        }

        return $this->getMostacho()->render($template, $data);
    }

    public function getPageURL()
    {
        // var_dump($_SERVER['REQUEST_URI']);
        $url = str_replace('/Grupo17-tp123-pwd/TPLibs/', '', $_SERVER['REQUEST_URI']);
        $link = ($url === '/' || $url === '') ? '/home' : $url;

        return $link;
    }

    public function data($page)
    {
        switch ($page) {
            case '/home':
                $data = [
                    'titulo' => 'Inicio',
                    'encabezado' => 'Probando render',
                    'contenido' => 'Lorem impsum',
                    'btn_txt' => 'Enviar',
                    'btn_url' => 'https://www.youtube.com'
                ];
                break;
            default:
                $data = [
                    'titulo' => '404 Page not Found',
                    'encabezado' => 'Error 404 pagina no encontrada',
                    'contenido' => 'Asegurate de poner una url correcta',
                ];
                break;
        }
        return $data;
    }
}
