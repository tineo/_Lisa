<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresInsta
 *
 * @ORM\Table(name="pt_pres_insta")
 * @ORM\Entity
 */
class PtPresInsta
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
     * @ORM\Column(name="id_insta", type="integer", nullable=false)
     */
    private $idInsta;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var int
     *
     * @ORM\Column(name="personas", type="integer", nullable=false)
     */
    private $personas;

    /**
     * @var float|null
     *
     * @ORM\Column(name="horas", type="float", precision=4, scale=2, nullable=true)
     */
    private $horas;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=4, nullable=false)
     */
    private $precio;


}
