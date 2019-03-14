<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPreItem
 *
 * @ORM\Table(name="pt_pre_item")
 * @ORM\Entity
 */
class PtPreItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_item", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idItem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_presupuesto", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPresupuesto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProducto = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo_item", type="boolean", nullable=false, options={"comment"="INS 1, SERV 2, MOD 3,MOI 4, INST 5, DIST 6, OTROS 0 "})
     */
    private $tipoItem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ref", type="integer", nullable=false, options={"unsigned"=true,"comment"="id de referencia dependiendo el tipo de item"})
     */
    private $idRef;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $cantidad = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $valor;

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
