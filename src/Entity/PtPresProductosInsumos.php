<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresProductosInsumos
 *
 * @ORM\Table(name="pt_pres_productos_insumos")
 * @ORM\Entity
 */
class PtPresProductosInsumos
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
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=true)
     */
    private $moneda;


}
