<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtSalidasDetalle
 *
 * @ORM\Table(name="pt_salidas_detalle", indexes={@ORM\Index(name="migrado", columns={"migrado"}), @ORM\Index(name="id_salida", columns={"id_salida"})})
 * @ORM\Entity
 */
class PtSalidasDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sal_det", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalDet;

    /**
     * @var int
     *
     * @ORM\Column(name="id_salida", type="integer", nullable=false)
     */
    private $idSalida;

    /**
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_req", type="integer", nullable=false)
     */
    private $idReq;

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

    /**
     * @var float
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=6, scale=3, nullable=false)
     */
    private $tipoCambio;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_salida", type="float", precision=10, scale=4, nullable=false)
     */
    private $cantSalida;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_extorno", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantExtorno = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="migrado", type="integer", nullable=false, options={"comment"="// SI MIGRO EL PRECIO DEL INSUMO"})
     */
    private $migrado = '0';


}
