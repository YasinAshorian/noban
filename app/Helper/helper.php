<?php


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * template generator method
 * @param $template
 * @param array $data
 * @return void
 * @throws \Twig\Error\LoaderError
 * @throws \Twig\Error\RuntimeError
 * @throws \Twig\Error\SyntaxError
 */
function view($template, array $data = [])
{
    session_start();

    $loader = new FilesystemLoader(__DIR__ . "/../../resources/views");
    $twig = new Environment($loader);

    echo $twig->render($template, $data);

}


/**
 *  var_dump() & die()
 * @param $data
 * @return void
 */
function dd($data) {
    var_dump($data);die();
}
