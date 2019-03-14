<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtNotasIngreso
 *
 * @ORM\Table(name="pt_notas_ingreso", indexes={@ORM\Index(name="id_ingreso", columns={"id_ingreso"})})
 * @ORM\Entity
 */
class PtNotasIngreso
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
     * @var int|null
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_proveedor", type="integer", nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="num_guia", type="string", length=25, nullable=false)
     */
    private $numGuia = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=true)
     */
    private $comentario;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_ingreso", type="datetime", nullable=true)
     */
    private $fIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=false)
     */
    private $fSistema;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
