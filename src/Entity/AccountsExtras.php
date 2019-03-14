<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountsExtras
 *
 * @ORM\Table(name="accounts_extras")
 * @ORM\Entity
 */
class AccountsExtras
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $accountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_direccion", type="text", length=65535, nullable=true)
     */
    private $facturaDireccion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dias_plazo", type="integer", nullable=true)
     */
    private $diasPlazo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="factura_direccion_fiscal", type="text", length=65535, nullable=true)
     */
    private $facturaDireccionFiscal;


}
