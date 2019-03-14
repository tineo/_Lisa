<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CajasChicasVales
 *
 * @ORM\Table(name="____cajas_chicas_vales")
 * @ORM\Entity
 */
class CajasChicasVales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vale", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVale;

    /**
     * @var int
     *
     * @ORM\Column(name="id_caja", type="integer", nullable=false)
     */
    private $idCaja;

    /**
     * @var int
     *
     * @ORM\Column(name="id_trabajador", type="integer", nullable=false)
     */
    private $idTrabajador;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_vale", type="string", length=50, nullable=true)
     */
    private $numVale;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_asignado", type="float", precision=10, scale=2, nullable=false)
     */
    private $montoAsignado;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_canjeado", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $montoCanjeado = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="monto_devuelto", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $montoDevuelto = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="rendido", type="integer", nullable=false)
     */
    private $rendido = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_vale", type="date", nullable=false)
     */
    private $fVale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
