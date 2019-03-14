<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoOrdenes
 *
 * @ORM\Table(name="____teso_ordenes")
 * @ORM\Entity
 */
class TesoOrdenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_orden", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=true, options={"fixed"=true})
     */
    private $codigo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="detraccion", type="float", precision=10, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $detraccion = '0.0000';

    /**
     * @var float
     *
     * @ORM\Column(name="adelantos", type="float", precision=10, scale=4, nullable=false)
     */
    private $adelantos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc_md5", type="string", length=32, nullable=true)
     */
    private $docMd5;

    /**
     * @var int
     *
     * @ORM\Column(name="terminado", type="integer", nullable=false, options={"comment"="SI ES QUE SE PAGO TODO COMO ADELANTO Y AUN NO ESTA EL DOCUMENTO"})
     */
    private $terminado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="procesado", type="integer", nullable=false, options={"comment"="CUANDO PASAN TODOS SUS PAGOS AL DOCUMENTO"})
     */
    private $procesado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_proceso", type="datetime", nullable=true)
     */
    private $fechaProceso;


}
