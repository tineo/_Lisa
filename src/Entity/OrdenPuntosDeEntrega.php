<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenPuntosDeEntrega
 *
 * @ORM\Table(name="orden_puntos_de_entrega")
 * @ORM\Entity
 */
class OrdenPuntosDeEntrega
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
     * @ORM\Column(name="orden_id", type="bigint", nullable=true)
     */
    private $ordenId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="punto", type="text", length=65535, nullable=true)
     */
    private $punto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contacto", type="text", length=65535, nullable=true)
     */
    private $contacto;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="text", length=65535, nullable=true)
     */
    private $telefono;

    /**
     * @var int
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hora", type="text", length=65535, nullable=true)
     */
    private $hora;


}
