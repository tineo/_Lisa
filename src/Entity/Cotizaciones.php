<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotizaciones
 *
 * @ORM\Table(name="cotizaciones")
 * @ORM\Entity
 */
class Cotizaciones
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
     * @var string|null
     *
     * @ORM\Column(name="codigo", type="string", length=16, nullable=true)
     */
    private $codigo;

    /**
     * @var int
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="version", type="integer", nullable=true)
     */
    private $version;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tiempo_de_entrega", type="integer", nullable=true)
     */
    private $tiempoDeEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_de_pago", type="string", length=255, nullable=true)
     */
    private $formaDePago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $moneda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas", type="text", length=65535, nullable=true)
     */
    private $notas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="incluir_gran_total", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $incluirGranTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="especificar_detalles", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $especificarDetalles;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marked", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $marked = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adicional", type="text", length=65535, nullable=true)
     */
    private $adicional;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contacto", type="string", length=255, nullable=true)
     */
    private $contacto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="validez_de_oferta", type="integer", nullable=true)
     */
    private $validezDeOferta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mostrar_nombres", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $mostrarNombres;


}
