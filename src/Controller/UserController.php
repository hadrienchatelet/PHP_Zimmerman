<?php
/**
 * Created by PhpStorm.
 * User: hadrienchatelet
 * Date: 06/11/2017
 * Time: 16:08
 */

namespace App\Controller;

use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{

    public function create()
    {
        $user = new User();
        $user->setId(0);
        $user->setNom("Chatelet");
        $user->setPrenom("Hadrien");
        $user->setMail("h.chatelet@outlook.fr");
        $user->setGitHub("hadrienchatelet");

        return $this->render(
            'User/create.html.twig', ["prenom"=>$user->getPrenom(), "nom"=>$user->getNom()]
        );

        $user1 = new User();
        $user1->setId(1);
        $user1->setNom("Bigard");
        $user1->setPrenom("Samuel");
        $user1->setMail("samuelbigard@gmail.com");
        $user1->setGitHub("samuelbigard");

        $tabUser = [$user, $user1];

        return $tabUser;
    }

    public function showList()
    {

    }

}