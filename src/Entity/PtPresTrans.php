<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresTrans
 *
 * @ORM\Table(name="pt_pres_trans")
 * @ORM\Entity
 */
class PtPresTrans
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pres", type="integer", nullable=false)
     */
    private $idPres;

    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer", nullable=false)
     */
    private $idProducto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_trans", type="integer", nullable=false)
     */
    private $idTrans;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=2, nullable=false)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=2, nullable=false)
     */
    private $precio;


}
