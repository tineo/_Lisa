<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajes
 *
 * @ORM\Table(name="mensajes")
 * @ORM\Entity
 */
class Mensajes
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
     * @var int
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="area_id", type="integer", nullable=true)
     */
    private $areaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mensaje", type="text", length=65535, nullable=true)
     */
    private $mensaje;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false)
     */
    private $userId = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;


}
