<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresCosto
 *
 * @ORM\Table(name="pt_pres_costo")
 * @ORM\Entity
 */
class PtPresCosto
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
     * @ORM\Column(name="id_costo", type="integer", nullable=false)
     */
    private $idCosto;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;


}
