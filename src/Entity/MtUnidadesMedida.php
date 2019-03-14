<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtUnidadesMedida
 *
 * @ORM\Table(name="mt_unidades_medida")
 * @ORM\Entity
 */
class MtUnidadesMedida
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_unidad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUnidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dsc_larga", type="string", length=50, nullable=true)
     */
    private $dscLarga;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dsc_corta", type="string", length=5, nullable=true)
     */
    private $dscCorta;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
