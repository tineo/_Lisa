<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtDesaProductos
 *
 * @ORM\Table(name="pt_desa_productos")
 * @ORM\Entity
 */
class PtDesaProductos
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_desa", type="integer", nullable=false)
     */
    private $idDesa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false)
     */
    private $idProducto;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=2, nullable=false)
     */
    private $cantidad;


}
