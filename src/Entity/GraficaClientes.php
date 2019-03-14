<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraficaClientes
 *
 * @ORM\Table(name="grafica_clientes")
 * @ORM\Entity
 */
class GraficaClientes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruc_dni", type="string", length=12, nullable=true)
     */
    private $rucDni;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=80, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=120, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contacto", type="string", length=100, nullable=true)
     */
    private $contacto;

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
