<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtInsumosProveedores
 *
 * @ORM\Table(name="mt_Insumos_Proveedores")
 * @ORM\Entity
 */
class MtInsumosProveedores
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Prov", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Ins", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codIns;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio_Ins", type="float", precision=10, scale=0, nullable=true)
     */
    private $precioIns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Moneda_Ins", type="string", length=2, nullable=true)
     */
    private $monedaIns;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Compra", type="datetime", nullable=true)
     */
    private $fechaCompra;


}
