<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresProducto
 *
 * @ORM\Table(name="pt_pres_producto")
 * @ORM\Entity
 */
class PtPresProducto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_creacion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecCreacion = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fec_modificacion", type="datetime", nullable=true)
     */
    private $fecModificacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;


}
