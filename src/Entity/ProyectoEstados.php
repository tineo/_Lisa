<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoEstados
 *
 * @ORM\Table(name="proyecto_estados")
 * @ORM\Entity
 */
class ProyectoEstados
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
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $fecha = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false)
     */
    private $userId = '';


}
