<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtProductosInsumos
 *
 * @ORM\Table(name="mt_productos_insumos")
 * @ORM\Entity
 */
class MtProductosInsumos
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
     * @ORM\Column(name="id_pro", type="integer", nullable=false)
     */
    private $idPro;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ins", type="integer", nullable=false)
     */
    private $idIns;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
