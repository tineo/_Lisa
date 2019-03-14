<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtOtCabecera
 *
 * @ORM\Table(name="pt_OT_Cabecera")
 * @ORM\Entity
 */
class PtOtCabecera
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Pres", type="string", length=10, nullable=true)
     */
    private $codPres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_OT", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codOt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cli", type="string", length=10, nullable=true)
     */
    private $codCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Tip", type="string", length=10, nullable=true)
     */
    private $codTip;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Pres", type="datetime", nullable=true)
     */
    private $fechaPres;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Final", type="datetime", nullable=true)
     */
    private $fechaFinal;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio_Pres", type="float", precision=10, scale=0, nullable=true)
     */
    private $precioPres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Moneda_Pres", type="string", length=2, nullable=true)
     */
    private $monedaPres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion_Pres", type="string", length=100, nullable=true)
     */
    private $descripcionPres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comentario", type="text", length=65535, nullable=true)
     */
    private $comentario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Asegura_OT", type="string", length=2, nullable=true)
     */
    private $aseguraOt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cerrar_OT_inicial", type="string", length=2, nullable=true)
     */
    private $cerrarOtInicial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cerrar_OT_Final", type="string", length=2, nullable=true)
     */
    private $cerrarOtFinal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Factura", type="datetime", nullable=true)
     */
    private $fechaFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUC", type="string", length=22, nullable=true)
     */
    private $ruc;


}
