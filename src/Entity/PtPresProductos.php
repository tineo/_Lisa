<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresProductos
 *
 * @ORM\Table(name="pt_pres_productos")
 * @ORM\Entity
 */
class PtPresProductos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pres", type="integer", nullable=false)
     * @ORM\Id
     */
    private $idPres;

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
