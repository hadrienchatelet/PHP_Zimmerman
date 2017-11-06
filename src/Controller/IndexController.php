<?php
/**
 * Created by PhpStorm.
 * User: hadrienchatelet
 * Date: 06/11/2017
 * Time: 14:23
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     *  @Route("/helloworld", name="app_index_displayhelloworld")
     */
    public function displayHelloWorld()
    {
        /*
        return new Response(
            'Hello World !'
        );
        */
        return $this->render(
            'Index/index.html.twig',[]
        );
    }
}