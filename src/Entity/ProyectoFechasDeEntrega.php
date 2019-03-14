<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoFechasDeEntrega
 *
 * @ORM\Table(name="proyecto_fechas_de_entrega")
 * @ORM\Entity
 */
class ProyectoFechasDeEntrega
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
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=true)
     */
    private $proyectoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;


}
