<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KardexHistorico
 *
 * @ORM\Table(name="kardex_historico", uniqueConstraints={@ORM\UniqueConstraint(name="cod_insumo", columns={"cod_insumo"})})
 * @ORM\Entity
 */
class KardexHistorico
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_insumo", type="string", length=5, nullable=false, options={"fixed"=true})
     * @ORM\Id
     */
    private $codInsumo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="insumo", type="string", length=150, nullable=false)
     */
    private $insumo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="familia", type="string", length=150, nullable=false)
     */
    private $familia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cod_familia", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $codFamilia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="medida", type="string", length=20, nullable=false)
     */
    private $medida = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clasificacion", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $clasificacion = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultima_entrada", type="datetime", nullable=false)
     */
    private $ultimaEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultima_salida", type="datetime", nullable=false)
     */
    private $ultimaSalida;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_entrada", type="float", precision=10, scale=2, nullable=false)
     */
    private $cantEntrada;

    /**
     * @var float
     *
     * @ORM\Column(name="cant_salida", type="float", precision=10, scale=2, nullable=false)
     */
    private $cantSalida;

    /**
     * @var float
     *
     * @ORM\Column(name="stock_min", type="float", precision=10, scale=2, nullable=false)
     */
    private $stockMin;

    /**
     * @var float
     *
     * @ORM\Column(name="stock_max", type="float", precision=10, scale=2, nullable=false)
     */
    private $stockMax;

    /**
     * @var float
     *
     * @ORM\Column(name="stock_final", type="float", precision=10, scale=2, nullable=false)
     */
    private $stockFinal;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_unitario", type="float", precision=10, scale=2, nullable=false)
     */
    private $precioUnitario;


}
