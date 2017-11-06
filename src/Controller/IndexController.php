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
     *  @Route("/", name="hello_world")
     */
    public function index()
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