<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtSalidasCabecera
 *
 * @ORM\Table(name="pt_Salidas_Cabecera")
 * @ORM\Entity
 */
class PtSalidasCabecera
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Sal", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codSal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Trab", type="string", length=10, nullable=true)
     */
    private $codTrab;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Usu", type="string", length=10, nullable=true)
     */
    private $codUsu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Sal", type="datetime", nullable=true)
     */
    private $fechaSal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Inicio_Pedido", type="datetime", nullable=true)
     */
    private $horaInicioPedido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Final_Pedido", type="datetime", nullable=true)
     */
    private $horaFinalPedido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Asegura_Sal", type="string", length=2, nullable=true)
     */
    private $aseguraSal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Tiempo_Sal", type="datetime", nullable=true)
     */
    private $tiempoSal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comentario", type="string", length=510, nullable=true)
     */
    private $comentario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Requerimiento", type="string", length=20, nullable=true)
     */
    private $requerimiento;


}
