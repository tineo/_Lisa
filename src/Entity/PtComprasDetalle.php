<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtComprasDetalle
 *
 * @ORM\Table(name="pt_Compras_Detalle")
 * @ORM\Entity
 */
class PtComprasDetalle
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
     * @ORM\Column(name="Cod_Ins", type="string", length=10, nullable=true)
     */
    private $codIns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_OT", type="string", length=10, nullable=true)
     */
    private $codOt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cant_Deta", type="float", precision=10, scale=0, nullable=true)
     */
    private $cantDeta;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio_Deta", type="float", precision=10, scale=0, nullable=true)
     */
    private $precioDeta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Afecta_Disponible", type="string", length=2, nullable=true)
     */
    private $afectaDisponible;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Responsable", type="string", length=60, nullable=true)
     */
    private $responsable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_lote", type="string", length=10, nullable=true)
     */
    private $codLote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ni_item_deta", type="string", length=20, nullable=true)
     */
    private $niItemDeta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Insumo_Libre", type="string", length=2, nullable=true)
     */
    private $insumoLibre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_requerida", type="string", length=14, nullable=true)
     */
    private $codRequerida;


}
