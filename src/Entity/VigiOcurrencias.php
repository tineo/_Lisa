<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VigiOcurrencias
 *
 * @ORM\Table(name="vigi_ocurrencias")
 * @ORM\Entity
 */
class VigiOcurrencias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_ingreso", type="datetime", nullable=false)
     */
    private $fIngreso;


}
