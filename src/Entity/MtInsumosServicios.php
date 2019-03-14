<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtInsumosServicios
 *
 * @ORM\Table(name="mt_insumos_servicios", indexes={@ORM\Index(name="id_unidad", columns={"id_unidad"})})
 * @ORM\Entity
 */
class MtInsumosServicios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ins_serv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInsServ;

    /**
     * @var int
     *
     * @ORM\Column(name="id_unidad", type="integer", nullable=false)
     */
    private $idUnidad;

    /**
     * @var int
     *
     * @ORM\Column(name="id_familia", type="integer", nullable=false)
     */
    private $idFamilia;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Area", type="string", length=5, nullable=true)
     */
    private $codArea;

    /**
     * @var float
     *
     * @ORM\Column(name="St_Min", type="float", precision=10, scale=0, nullable=false)
     */
    private $stMin = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="St_Max", type="float", precision=10, scale=0, nullable=false)
     */
    private $stMax = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="St_Actual", type="float", precision=10, scale=0, nullable=false)
     */
    private $stActual = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="St_Inicial", type="float", precision=10, scale=0, nullable=false)
     */
    private $stInicial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="St_Disponible", type="float", precision=10, scale=0, nullable=false)
     */
    private $stDisponible = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="st_Reposicion", type="float", precision=10, scale=0, nullable=false)
     */
    private $stReposicion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Ins", type="string", length=1, nullable=true, options={"comment"="R=> reposicion S=> estandarE=> especial"})
     */
    private $tipoIns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Compra", type="string", length=1, nullable=true)
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
     * @ORM\Column(name="Activo", type="string", length=1, nullable=true)
     */
    private $activo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ratio", type="float", precision=10, scale=0, nullable=true)
     */
    private $ratio;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_serv", type="string", length=0, nullable=false, options={"default"="I","comment"="I => Insumos S => Servicios"})
     */
    private $insServ = 'I';

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// PRECIO DE LA ULTIMA COMPRA"})
     */
    private $precio = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false, options={"comment"="// MONEDA DE LA ULTIMA COMPRA"})
     */
    private $moneda;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_ultima_compra", type="date", nullable=true, options={"comment"="// FECHA ULTIMA COMPRA"})
     */
    private $fUltimaCompra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_update", type="datetime", nullable=false)
     */
    private $fUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="enviado_comprar", type="integer", nullable=false)
     */
    private $enviadoComprar = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="id_empresa", type="boolean", nullable=false, options={"default"="1"})
     */
    private $idEmpresa = '1';


}
