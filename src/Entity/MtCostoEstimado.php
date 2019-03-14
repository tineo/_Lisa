<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtCostoEstimado
 *
 * @ORM\Table(name="mt_costo_estimado")
 * @ORM\Entity
 */
class MtCostoEstimado
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_costo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCosto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=true)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_tipo", type="string", length=0, nullable=false, options={"default"="V"})
     */
    private $valorTipo = 'V';

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
