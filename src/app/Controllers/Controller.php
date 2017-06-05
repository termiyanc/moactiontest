<?php namespace Termiyanc\Moactiontest\App\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //  Twig
    protected $twig;

    /**
     * Метод-конструктор. Подключает Twig
     */
    public function __construct()
    {
        //  Инициализирую Twig
        $this->twig = new \Twig_Environment(
            new \Twig_Loader_Filesystem([config('termiyanc_moaction_test.twig_templates_path')])
        );
        //  Добавляю в Tqig переменную с указанием пути до подключаемых файлов (стили, скрипты)
        $this->twig->addGlobal('assets', config('termiyanc_moaction_test.assets_url_path'));
    }

    /**
     * Метод формирует Twig-представления и выводит их по умолчанию
     * @param $file
     * @param array $vars
     * @param bool $echo
     * @return void|string
     */
    public function render($file, $vars = [], $echo = true)
    {
        if ($echo) {
            echo $this->twig->render($file, $vars);
        } else {
            return $this->twig->render($file, $vars);
        }
    }

}
