<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtTiposCambio
 *
 * @ORM\Table(name="mt_tipos_cambio", indexes={@ORM\Index(name="Fecha_Tip", columns={"Fecha_Tip"})})
 * @ORM\Entity
 */
class MtTiposCambio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Tip", type="date", nullable=true)
     */
    private $fechaTip;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Compra_Tip", type="float", precision=10, scale=0, nullable=true)
     */
    private $compraTip;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Venta_Tip", type="float", precision=10, scale=0, nullable=true)
     */
    private $ventaTip;


}
