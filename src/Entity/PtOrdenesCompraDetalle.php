<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtOrdenesCompraDetalle
 *
 * @ORM\Table(name="pt_ordenes_compra_detalle", indexes={@ORM\Index(name="id_orden_compra", columns={"id_orden_compra"}), @ORM\Index(name="id_detalle", columns={"id_detalle"}), @ORM\Index(name="id_req", columns={"id_req"})})
 * @ORM\Entity
 */
class PtOrdenesCompraDetalle
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
     * @ORM\Column(name="id_orden_compra", type="integer", nullable=false)
     */
    private $idOrdenCompra;

    /**
     * @var int
     *
     * @ORM\Column(name="id_req", type="integer", nullable=false)
     */
    private $idReq;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_compra", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantCompra = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_ingresada", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="//CANTIDAD INGRESADA ALMACEN"})
     */
    private $cantIngresada = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_documento", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="//CANTIDAD AMARRADA CON DOCUMENTOS"})
     */
    private $cantDocumento = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=11, scale=5, nullable=false, options={"default"="0.00000","comment"="//PRECIO INCLUYE IGV"})
     */
    private $precio = '0.00000';

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anulado", type="integer", nullable=true)
     */
    private $anulado = '0';


}
