<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecbClientes
 *
 * @ORM\Table(name="recb_clientes")
 * @ORM\Entity
 */
class RecbClientes
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
     * @var string
     *
     * @ORM\Column(name="cod_cliente", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $codCliente;


}
