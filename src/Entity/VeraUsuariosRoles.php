<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VeraUsuariosRoles
 *
 * @ORM\Table(name="vera_usuarios_roles")
 * @ORM\Entity
 */
class VeraUsuariosRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rol_id", type="bigint", nullable=true)
     */
    private $rolId;


}
