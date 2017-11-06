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

        $user1 = new User();
        $user1->setId(1);
        $user1->setNom("Bigard");
        $user1->setPrenom("Samuel");
        $user1->setMail("samuelbigard@gmail.com");
        $user1->setGitHub("samuelbigard");

        return $this->render(
            'User/create.html.twig', ["prenom1"=>$user->getPrenom(), "nom1"=>$user->getNom(),
                "prenom2"=>$user1->getPrenom(), "nom2"=>$user1->getNom()]
        );

        $tabUser = [$user, $user1];

        return $tabUser;
    }

    public function showList()
    {

    }

}