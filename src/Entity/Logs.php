<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 *
 * @ORM\Table(name="logs")
 * @ORM\Entity
 */
class Logs
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
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="operacion", type="string", length=0, nullable=false)
     */
    private $operacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="consulta", type="text", length=65535, nullable=true)
     */
    private $consulta;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_url", type="text", length=65535, nullable=false)
     */
    private $parentUrl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=true)
     */
    private $fSistema;


}
