<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GastosManuales
 *
 * @ORM\Table(name="gastos_manuales")
 * @ORM\Entity
 */
class GastosManuales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gasto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGasto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     */
    private $idGrupo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cuenta", type="integer", nullable=false)
     */
    private $idCuenta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_ingreso_desde", type="datetime", nullable=true)
     */
    private $fechaIngresoDesde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_ingreso_hasta", type="datetime", nullable=true)
     */
    private $fechaIngresoHasta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_documento_desde", type="datetime", nullable=true)
     */
    private $fechaDocumentoDesde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_documento_hasta", type="datetime", nullable=true)
     */
    private $fechaDocumentoHasta;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="gasto_91", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $gasto91 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="gasto_93", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $gasto93 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="gasto_94", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $gasto94 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="gasto_95", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $gasto95 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="igv_91", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $igv91 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="igv_93", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $igv93 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="igv_94", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $igv94 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="igv_95", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $igv95 = '0.00';


}
