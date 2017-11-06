<?php
/**
 * Created by PhpStorm.
 * User: hadrienchatelet
 * Date: 06/11/2017
 * Time: 16:08
 */

namespace App\Entity;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function create()
    {
        $user = new User();
        $user->setNom("Chatelet");
        $user->setPrenom("Hadrien");
        $user->setMail("h.chatelet@outlook.fr");
        $user->setGitHub("hadrienchatelet");

        return $this->render(
            'User/create.html.twig', ["prenom"=>$user->getPrenom(), "nom"=>$user->getNom()]
        );
    }

    public function show()
    {

    }

}