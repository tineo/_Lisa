<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtDesaProductosInsumos
 *
 * @ORM\Table(name="pt_desa_productos_insumos")
 * @ORM\Entity
 */
class PtDesaProductosInsumos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_desa_pro_ins", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDesaProIns;

    /**
     * @var int
     *
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_limite", type="date", nullable=true)
     */
    private $fLimite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="string", length=250, nullable=true)
     */
    private $comentario;


}
