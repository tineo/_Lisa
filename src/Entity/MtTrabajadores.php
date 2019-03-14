<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtTrabajadores
 *
 * @ORM\Table(name="mt_trabajadores", indexes={@ORM\Index(name="id_trab", columns={"id_trab"})})
 * @ORM\Entity
 */
class MtTrabajadores
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_trab", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrab;

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_trab", type="string", length=100, nullable=false)
     */
    private $nombreTrab = '';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
