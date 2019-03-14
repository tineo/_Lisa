<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtClientes
 *
 * @ORM\Table(name="mt_Clientes")
 * @ORM\Entity
 */
class MtClientes
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cli", type="string", length=10, nullable=true)
     * @ORM\Id
     */
    private $codCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Cli", type="string", length=4, nullable=true)
     */
    private $tipoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dsc_Fis_Cli", type="string", length=100, nullable=true)
     */
    private $dscFisCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dsc_Com_Cli", type="string", length=100, nullable=true)
     */
    private $dscComCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir_Cli", type="string", length=200, nullable=true)
     */
    private $dirCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ruc_Cli", type="string", length=30, nullable=true)
     */
    private $rucCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fono_Cli", type="string", length=60, nullable=true)
     */
    private $fonoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax_Cli", type="string", length=40, nullable=true)
     */
    private $faxCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Web_Cli", type="string", length=200, nullable=true)
     */
    private $webCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mail_Cli", type="string", length=100, nullable=true)
     */
    private $mailCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Contacto_Cli", type="string", length=100, nullable=true)
     */
    private $contactoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Forma_Pago_Cli", type="string", length=100, nullable=true)
     */
    private $formaPagoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Girar_Cheque_Cli", type="string", length=100, nullable=true)
     */
    private $girarChequeCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Anula_Cli", type="string", length=2, nullable=true)
     */
    private $anulaCli;


}
