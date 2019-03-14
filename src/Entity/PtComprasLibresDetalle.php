<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtComprasLibresDetalle
 *
 * @ORM\Table(name="pt_Compras_Libres_Detalle")
 * @ORM\Entity
 */
class PtComprasLibresDetalle
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Compra", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codCompra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Item_Deta", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $itemDeta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cuenta", type="string", length=18, nullable=true)
     */
    private $codCuenta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dsc_Cuenta", type="string", length=200, nullable=true)
     */
    private $dscCuenta;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Sub_Total", type="float", precision=10, scale=0, nullable=true)
     */
    private $subTotal;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IGV", type="float", precision=10, scale=0, nullable=true)
     */
    private $igv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Afecto", type="string", length=2, nullable=true)
     */
    private $afecto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_OT", type="string", length=10, nullable=true)
     */
    private $codOt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Compra", type="string", length=2, nullable=true)
     */
    private $tipoCompra;


}
