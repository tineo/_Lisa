<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraficaInsumosConsumos
 *
 * @ORM\Table(name="grafica_insumos_consumos")
 * @ORM\Entity
 */
class GraficaInsumosConsumos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_consumo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsumo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ingreso", type="integer", nullable=false)
     */
    private $idIngreso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var float
     *
     * @ORM\Column(name="consumo_ancho", type="float", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $consumoAncho = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="consumo_largo", type="float", precision=8, scale=2, nullable=false)
     */
    private $consumoLargo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_consumo", type="datetime", nullable=false)
     */
    private $fConsumo;


}
