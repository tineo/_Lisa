<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersPasswordLink
 *
 * @ORM\Table(name="users_password_link", indexes={@ORM\Index(name="idx_username", columns={"username"})})
 * @ORM\Entity
 */
class UsersPasswordLink
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=36, nullable=true)
     */
    private $username;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_generated", type="datetime", nullable=true)
     */
    private $dateGenerated;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;


}
