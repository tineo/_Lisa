<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PtPresFicheros
 *
 * @ORM\Table(name="pt_pres_ficheros")
 * @ORM\Entity
 */
class PtPresFicheros
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
     * @ORM\Column(name="id_pres", type="integer", nullable=false)
     */
    private $idPres;

    /**
     * @var string
     *
     * @ORM\Column(name="fichero", type="string", length=200, nullable=false)
     */
    private $fichero = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=true)
     */
    private $fRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
