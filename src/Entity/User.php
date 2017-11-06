<?php
/**
 * Created by PhpStorm.
 * User: hadrienchatelet
 * Date: 06/11/2017
 * Time: 15:43
 */

namespace App\Entity;

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


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getGitHub(): string
    {
        return $this->gitHub;
    }

    /**
     * @param string $gitHub
     */
    public function setGitHub(string $gitHub)
    {
        $this->gitHub = $gitHub;
    }

    /**
     * @return string
     */
    public function getDiscord(): string
    {
        return $this->discord;
    }

    /**
     * @param string $discord
     */
    public function setDiscord(string $discord)
    {
        $this->discord = $discord;
    }
}