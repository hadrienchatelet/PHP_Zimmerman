<?php
/**
 * Created by PhpStorm.
 * User: hadrienchatelet
 * Date: 06/11/2017
 * Time: 15:43
 */

namespace TPZ1\Entity;

use Doctrine\ORM\Mapping as ORM;

class User
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string", length=40)
     */
    private $nom;
    /**
     * @var string
     * @ORM\Column(type="string", length=40)
     */
    private $prenom;
    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $mail;
    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $gitHub;
    /**
     * @var string
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $discord;


}