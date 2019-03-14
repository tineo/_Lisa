<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificaciones
 *
 * @ORM\Table(name="notificaciones")
 * @ORM\Entity
 */
class Notificaciones
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
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=true)
     */
    private $proyectoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=128, nullable=true)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="metadata", type="text", length=65535, nullable=true)
     */
    private $metadata;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;


}
