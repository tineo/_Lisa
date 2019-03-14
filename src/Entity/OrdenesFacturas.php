<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenesFacturas
 *
 * @ORM\Table(name="ordenes_facturas")
 * @ORM\Entity
 */
class OrdenesFacturas
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
     * @var int
     *
     * @ORM\Column(name="proyecto_id", type="bigint", nullable=false)
     */
    private $proyectoId;

    /**
     * @var int
     *
     * @ORM\Column(name="factura_id", type="bigint", nullable=false)
     */
    private $facturaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto_odt", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $montoOdt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda_odt", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $monedaOdt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adelanto", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $adelanto = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto_credito", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoCredito = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="monto_activo", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $montoActivo = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ignorar_descuento", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $ignorarDescuento = '0';


}
