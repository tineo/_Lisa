<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidoTransito
 *
 * @ORM\Table(name="pedido_transito", indexes={@ORM\Index(name="id_pedi_trans", columns={"id_pedi_trans"})})
 * @ORM\Entity
 */
class PedidoTransito
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedi_trans", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPediTrans;

    /**
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_pedido", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $fPedido = '0000-00-00 00:00:00';

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado = '0';


}
