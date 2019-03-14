<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoLiquidacion
 *
 * @ORM\Table(name="teso_liquidacion", indexes={@ORM\Index(name="id_pago", columns={"id_pago"})})
 * @ORM\Entity
 */
class TesoLiquidacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_caja", type="integer", nullable=false)
     */
    private $idCaja;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_rendicion", type="integer", nullable=false)
     */
    private $idUsuarioRendicion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_liquidacion", type="integer", nullable=false)
     */
    private $idLiquidacion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pago", type="integer", nullable=false)
     */
    private $idPago = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="monto_adelanto", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $montoAdelanto = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="detraccion", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $detraccion = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="percepcion", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percepcion = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false, options={"default"="C","comment"="C=> CAJA
R=> RENDICIONES"})
     */
    private $tipo = 'C';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=true)
     */
    private $fSistema;


}
