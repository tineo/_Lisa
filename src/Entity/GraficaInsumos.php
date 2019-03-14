<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraficaInsumos
 *
 * @ORM\Table(name="grafica_insumos")
 * @ORM\Entity
 */
class GraficaInsumos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ingreso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIngreso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_salida", type="integer", nullable=false)
     */
    private $idSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="insumo", type="string", length=150, nullable=false)
     */
    private $insumo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="insumo_id", type="string", length=5, nullable=false)
     */
    private $insumoId = '';

    /**
     * @var float
     *
     * @ORM\Column(name="precio_m2", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00","comment"="// Precio Incluye IGV"})
     */
    private $precioM2 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=true)
     */
    private $moneda;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=5, scale=2, nullable=true)
     */
    private $tipoCambio;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad_m2", type="float", precision=8, scale=2, nullable=false)
     */
    private $cantidadM2;

    /**
     * @var float
     *
     * @ORM\Column(name="consumo_m2", type="float", precision=8, scale=2, nullable=false)
     */
    private $consumoM2;

    /**
     * @var float
     *
     * @ORM\Column(name="merma_m2", type="float", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $mermaM2 = '0.00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_salida", type="date", nullable=true)
     */
    private $fSalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_operacion", type="datetime", nullable=false)
     */
    private $fOperacion;


}
