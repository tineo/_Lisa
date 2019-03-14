<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VeraPermisos
 *
 * @ORM\Table(name="vera_permisos")
 * @ORM\Entity
 */
class VeraPermisos
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
     * @var int|null
     *
     * @ORM\Column(name="rol_id", type="bigint", nullable=true)
     */
    private $rolId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permiso", type="string", length=255, nullable=true)
     */
    private $permiso;


}
