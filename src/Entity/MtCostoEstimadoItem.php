<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtCostoEstimadoItem
 *
 * @ORM\Table(name="mt_costo_estimado_item")
 * @ORM\Entity
 */
class MtCostoEstimadoItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false, options={"comment"="'INS 1, SERV 2, MOD 3,MOI 4, INST 5, DIST 6, OTROS 0'"})
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=7, nullable=false)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $costo = '0.00';

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo_valor", type="boolean", nullable=false, options={"comment"="Monetario 1 Porcentual 2"})
     */
    private $tipoValor;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $moneda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_creacion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecCreacion = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fec_modificacion", type="datetime", nullable=true)
     */
    private $fecModificacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
