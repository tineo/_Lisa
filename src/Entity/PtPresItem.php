<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresItem
 *
 * @ORM\Table(name="pt_pres_item")
 * @ORM\Entity
 */
class PtPresItem
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
     * @ORM\Column(name="id_pres", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPres;

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
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="num_dias", type="decimal", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $numDias = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="num_personas", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $numPersonas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="unidad", type="boolean", nullable=false)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $costo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tiempo", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $tiempo;

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
