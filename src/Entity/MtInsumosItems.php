<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtInsumosItems
 *
 * @ORM\Table(name="mt_Insumos_Items")
 * @ORM\Entity
 */
class MtInsumosItems
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Fam", type="string", length=10, nullable=true)
     */
    private $codFam;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Ins", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codIns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Unid", type="string", length=10, nullable=true)
     */
    private $codUnid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Area", type="string", length=10, nullable=true)
     */
    private $codArea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dsc_Ins", type="string", length=200, nullable=true)
     */
    private $dscIns;

    /**
     * @var float|null
     *
     * @ORM\Column(name="St_Min", type="float", precision=10, scale=0, nullable=true)
     */
    private $stMin;

    /**
     * @var float|null
     *
     * @ORM\Column(name="St_Max", type="float", precision=10, scale=0, nullable=true)
     */
    private $stMax;

    /**
     * @var float|null
     *
     * @ORM\Column(name="St_Actual", type="float", precision=10, scale=0, nullable=true)
     */
    private $stActual;

    /**
     * @var float|null
     *
     * @ORM\Column(name="St_Inicial", type="float", precision=10, scale=0, nullable=true)
     */
    private $stInicial;

    /**
     * @var float|null
     *
     * @ORM\Column(name="St_Disponible", type="float", precision=10, scale=0, nullable=true)
     */
    private $stDisponible;

    /**
     * @var float|null
     *
     * @ORM\Column(name="st_Reposicion", type="float", precision=10, scale=0, nullable=true)
     */
    private $stReposicion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Ins", type="string", length=2, nullable=true)
     */
    private $tipoIns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Anula_Ins", type="string", length=2, nullable=true)
     */
    private $anulaIns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Compra", type="string", length=2, nullable=true)
     */
    private $tipoCompra;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Salida", type="datetime", nullable=true)
     */
    private $fechaSalida;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activo", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $activo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ratio", type="string", length=200, nullable=true)
     */
    private $ratio;


}
