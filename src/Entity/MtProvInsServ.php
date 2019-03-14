<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtProvInsServ
 *
 * @ORM\Table(name="mt_prov_ins_serv", indexes={@ORM\Index(name="id_prov", columns={"id_prov"}), @ORM\Index(name="id_ins_serv", columns={"id_ins_serv"})})
 * @ORM\Entity
 */
class MtProvInsServ
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_prov", type="integer", nullable=false)
     */
    private $idProv;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ins_serv", type="integer", nullable=false)
     */
    private $idInsServ;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000","comment"="// ULTIMO PRECIO DEL PROVEEDOR// EL PRECIO DEL INSUMO DEBE INCLUIR EL IGV"})
     */
    private $precio = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_compra", type="date", nullable=false, options={"comment"="// FECHA DE ULTIMA COMPRA DEL PROVEEDOR"})
     */
    private $fCompra;

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
