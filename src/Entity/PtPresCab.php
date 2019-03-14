<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresCab
 *
 * @ORM\Table(name="pt_pres_cab")
 * @ORM\Entity
 */
class PtPresCab
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pres", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPres;

    /**
     * @var int
     *
     * @ORM\Column(name="id_proyecto", type="integer", nullable=false)
     */
    private $idProyecto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=4, scale=2, nullable=true)
     */
    private $tipoCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=0, nullable=false, options={"default"="PRO","comment"="PRO => PROCESO
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
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="desarrollo", type="integer", nullable=false, options={"comment"="0 => NO FUE A DESARROLLO
1 => SI FUE A DESARROLLO"})
     */
    private $desarrollo = '0';


}
