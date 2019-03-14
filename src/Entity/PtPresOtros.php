<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresOtros
 *
 * @ORM\Table(name="pt_pres_otros")
 * @ORM\Entity
 */
class PtPresOtros
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
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=true)
     */
    private $tipo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=2, nullable=true)
     */
    private $valor;


}
