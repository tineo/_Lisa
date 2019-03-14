<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtDesaCab
 *
 * @ORM\Table(name="pt_desa_cab", uniqueConstraints={@ORM\UniqueConstraint(name="orden_id", columns={"orden_id"})})
 * @ORM\Entity
 */
class PtDesaCab
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_desa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDesa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_proyecto", type="integer", nullable=false)
     */
    private $idProyecto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pres", type="integer", nullable=false)
     */
    private $idPres;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_id", type="integer", nullable=false)
     */
    private $ordenId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=4, scale=2, nullable=true)
     */
    private $tipoCambio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado", type="string", length=0, nullable=true, options={"default"="PRO","comment"="PRO => PROCESO
TER => TERMINADO / SE PUEDE DEVOLVER
COM => COMPLETADO / CREADO ODT"})
     */
    private $estado = 'PRO';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_termino", type="datetime", nullable=true)
     */
    private $fTermino;

    /**
     * @var int|null
     *
     * @ORM\Column(name="deleted", type="integer", nullable=true)
     */
    private $deleted = '0';


}
