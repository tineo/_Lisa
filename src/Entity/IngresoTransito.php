<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngresoTransito
 *
 * @ORM\Table(name="ingreso_transito", indexes={@ORM\Index(name="id_ing_trans", columns={"id_ing_trans"})})
 * @ORM\Entity
 */
class IngresoTransito
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ing_trans", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIngTrans;

    /**
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cant_ing_trans", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantIngTrans = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_ingreso", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $fIngreso = '0000-00-00 00:00:00';


}
