<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuiasDeRemisiones
 *
 * @ORM\Table(name="guias_de_remisiones")
 * @ORM\Entity
 */
class GuiasDeRemisiones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empresa", type="integer", nullable=true)
     */
    private $empresa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="serie", type="integer", nullable=true)
     */
    private $serie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var int|null
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=true)
     */
    private $proyectoId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_emision", type="date", nullable=true)
     */
    private $fechaEmision;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_despacho", type="date", nullable=true)
     */
    private $fechaDespacho;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_retorno", type="date", nullable=true)
     */
    private $fechaRetorno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="responsable", type="string", length=255, nullable=true)
     */
    private $responsable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lugar_de_entrega", type="text", length=65535, nullable=true)
     */
    private $lugarDeEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localidad", type="string", length=255, nullable=true)
     */
    private $localidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anulada", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $anulada = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ultima_guia", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $ultimaGuia;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_blanco", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $enBlanco = '0';


}
