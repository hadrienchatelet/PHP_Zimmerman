<?php
/**
 * Created by PhpStorm.
 * User: hadrienchatelet
 * Date: 06/11/2017
 * Time: 13:32
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function index()
    {
        return new Response(
            'Hello World !'
        );

    }
}