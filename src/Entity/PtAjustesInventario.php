<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtAjustesInventario
 *
 * @ORM\Table(name="pt_ajustes_inventario")
 * @ORM\Entity
 */
class PtAjustesInventario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ajuste", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAjuste;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_insumo", type="integer", nullable=false)
     */
    private $idInsumo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=true)
     */
    private $ordenId;

    /**
     * @var string
     *
     * @ORM\Column(name="falta_sobra", type="string", length=0, nullable=false)
     */
    private $faltaSobra;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=8, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=true)
     */
    private $moneda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=true)
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_ajuste", type="datetime", nullable=false)
     */
    private $fAjuste;


}
