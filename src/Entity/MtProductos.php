<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtProductos
 *
 * @ORM\Table(name="mt_productos")
 * @ORM\Entity
 */
class MtProductos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPro;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="string", length=100, nullable=true)
     */
    private $imagen = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="deleted", type="integer", nullable=true)
     */
    private $deleted = '0';


}
