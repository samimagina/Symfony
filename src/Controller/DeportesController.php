<?php
/**
 * Created by PhpStorm.
 * User: samue
 * Date: 12/03/2018
 * Time: 12:34
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class DeportesController
{
    /**
     * @Route("/deportes")*/

    public function inicio(){
        return new Response('Deportes');
    }

    /**
     * @Route("/deportes/primer-articulo")
     */
    public function mostrar(){
        return new Response ('Mi primer artículo');

    }
}