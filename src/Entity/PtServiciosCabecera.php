<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtServiciosCabecera
 *
 * @ORM\Table(name="pt_Servicios_Cabecera")
 * @ORM\Entity
 */
class PtServiciosCabecera
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Servicio", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Prov", type="string", length=10, nullable=true)
     */
    private $codProv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Registro", type="datetime", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Servicio", type="datetime", nullable=true)
     */
    private $fechaServicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Entrega", type="datetime", nullable=true)
     */
    private $fechaEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lugar_Entrega", type="string", length=100, nullable=true)
     */
    private $lugarEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Atencion_Servicio", type="string", length=60, nullable=true)
     */
    private $atencionServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Trab", type="string", length=10, nullable=true)
     */
    private $codTrab;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Tipo_Cambio", type="float", precision=10, scale=0, nullable=true)
     */
    private $tipoCambio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Asegura_Servicio", type="string", length=2, nullable=true)
     */
    private $aseguraServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Anula_Servicio", type="string", length=2, nullable=true)
     */
    private $anulaServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Servicio", type="string", length=20, nullable=true)
     */
    private $tipoServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dsc_Servicio", type="string", length=40, nullable=true)
     */
    private $dscServicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Forma_pago", type="string", length=100, nullable=true)
     */
    private $formaPago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Recepcion_Servicio", type="string", length=2, nullable=true)
     */
    private $recepcionServicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Recepcion", type="datetime", nullable=true)
     */
    private $fechaRecepcion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Doc_Prov", type="datetime", nullable=true)
     */
    private $fechaDocProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Doc_Prov", type="string", length=22, nullable=true)
     */
    private $numDocProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_TipoDoc", type="string", length=6, nullable=true)
     */
    private $codTipodoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUC", type="string", length=22, nullable=true)
     */
    private $ruc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Detraccion", type="string", length=2, nullable=true)
     */
    private $detraccion;


}
