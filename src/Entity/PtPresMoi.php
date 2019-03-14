<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresMoi
 *
 * @ORM\Table(name="pt_pres_moi")
 * @ORM\Entity
 */
class PtPresMoi
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
     * @ORM\Column(name="id_moi", type="integer", nullable=false)
     */
    private $idMoi;

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
