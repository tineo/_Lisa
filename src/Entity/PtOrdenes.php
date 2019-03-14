<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtOrdenes
 *
 * @ORM\Table(name="pt_ordenes", uniqueConstraints={@ORM\UniqueConstraint(name="orden_id", columns={"orden_id"})})
 * @ORM\Entity
 */
class PtOrdenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $ordenId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tipo_proyecto", type="integer", nullable=true)
     */
    private $tipoProyecto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empresa_vendedora", type="integer", nullable=true)
     */
    private $empresaVendedora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado_desa", type="string", length=0, nullable=true, options={"comment"="E => Enviado a Desarrollo
S => Salida de Desarrollo"})
     */
    private $estadoDesa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_ent_desa", type="datetime", nullable=true)
     */
    private $fEntDesa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_sal_desa", type="datetime", nullable=true)
     */
    private $fSalDesa;

    /**
     * @var int
     *
     * @ORM\Column(name="estado_planta", type="integer", nullable=false, options={"comment"="0 => NO ESTA EN PLANTA
1 => SE ENVIO A PLANTA"})
     */
    private $estadoPlanta = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_ent_planta", type="datetime", nullable=true)
     */
    private $fEntPlanta;

    /**
     * @var int
     *
     * @ORM\Column(name="estado_almacen", type="integer", nullable=false)
     */
    private $estadoAlmacen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="estado_despacho", type="integer", nullable=false)
     */
    private $estadoDespacho = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_ent_despacho", type="datetime", nullable=true)
     */
    private $fEntDespacho;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_insumos", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $costoInsumos = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="costo_servicios", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $costoServicios = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="costo_compras", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $costoCompras = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="orden_cerrada", type="integer", nullable=false)
     */
    private $ordenCerrada = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_cierre", type="datetime", nullable=true)
     */
    private $fCierre;


}
