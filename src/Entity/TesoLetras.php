<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoLetras
 *
 * @ORM\Table(name="teso_letras")
 * @ORM\Entity
 */
class TesoLetras
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_letra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLetra;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pago", type="integer", nullable=false, options={"comment"="//ID_PAGO DEL DOCUMENTO QUE GENERO LA LETRA"})
     */
    private $idPago;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pago_letra", type="integer", nullable=false, options={"comment"="//ID_PAGO DEL PAGO DE LA LETRA"})
     */
    private $idPagoLetra;

    /**
     * @var int
     *
     * @ORM\Column(name="aceptante", type="integer", nullable=false)
     */
    private $aceptante;

    /**
     * @var string
     *
     * @ORM\Column(name="num_letra", type="string", length=100, nullable=false)
     */
    private $numLetra = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_emision", type="datetime", nullable=false)
     */
    private $fEmision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_vencimiento", type="date", nullable=false)
     */
    private $fVencimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="d_plazo", type="integer", nullable=false)
     */
    private $dPlazo;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float", precision=10, scale=4, nullable=false)
     */
    private $importe;

    /**
     * @var float
     *
     * @ORM\Column(name="importe_renovado", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importeRenovado = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=150, nullable=false)
     */
    private $ubicacion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="numero_unico", type="string", length=100, nullable=false)
     */
    private $numeroUnico = '';

    /**
     * @var int
     *
     * @ORM\Column(name="pagado", type="integer", nullable=false)
     */
    private $pagado;

    /**
     * @var int
     *
     * @ORM\Column(name="renovada", type="integer", nullable=false)
     */
    private $renovada = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_letra_renovada", type="integer", nullable=false, options={"comment"="//ID DEL PAGO DE RENOVACION"})
     */
    private $idLetraRenovada = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=true)
     */
    private $fSistema;

    /**
     * @var int
     *
     * @ORM\Column(name="anulado", type="integer", nullable=false)
     */
    private $anulado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_anulado", type="datetime", nullable=true)
     */
    private $fAnulado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="string", length=200, nullable=true)
     */
    private $comentario;


}
