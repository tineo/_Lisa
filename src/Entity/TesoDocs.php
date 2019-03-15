<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoDocs
 *
 * @ORM\Table(name="teso_docs")
 * @ORM\Entity
 */
class TesoDocs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_docs", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocs;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pago", type="integer", nullable=false)
     */
    private $idPago;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $codigo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="a_cuenta", type="integer", nullable=false)
     */
    private $aCuenta = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float", precision=10, scale=4, nullable=false)
     */
    private $importe;

    /**
     * @var float
     *
     * @ORM\Column(name="detraccion", type="float", precision=10, scale=4, nullable=false)
     */
    private $detraccion;

    /**
     * @var float
     *
     * @ORM\Column(name="percepcion", type="float", precision=10, scale=4, nullable=false)
     */
    private $percepcion;


}
