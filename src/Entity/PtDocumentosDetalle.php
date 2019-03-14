<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtDocumentosDetalle
 *
 * @ORM\Table(name="pt_documentos_detalle", indexes={@ORM\Index(name="id_doc", columns={"id_doc"}), @ORM\Index(name="id_insumo", columns={"id_insumo"}), @ORM\Index(name="id_orden", columns={"id_orden"})})
 * @ORM\Entity
 */
class PtDocumentosDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetalle;

    /**
     * @var int
     *
     * @ORM\Column(name="id_doc", type="integer", nullable=false)
     */
    private $idDoc;

    /**
     * @var int
     *
     * @ORM\Column(name="id_req", type="integer", nullable=false)
     */
    private $idReq;

    /**
     * @var int
     *
     * @ORM\Column(name="id_orden", type="integer", nullable=false)
     */
    private $idOrden;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=true)
     */
    private $ordenId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="area_id", type="integer", nullable=true)
     */
    private $areaId;

    /**
     * @var string
     *
     * @ORM\Column(name="glosa", type="string", length=100, nullable=false)
     */
    private $glosa = '';

    /**
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cuenta", type="integer", nullable=false)
     */
    private $idCuenta;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=4, nullable=true)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=11, scale=5, nullable=false, options={"default"="0.00000"})
     */
    private $precio = '0.00000';

    /**
     * @var float
     *
     * @ORM\Column(name="igv", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $igv = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="anulado", type="integer", nullable=false)
     */
    private $anulado = '0';


}
