<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtCuentas
 *
 * @ORM\Table(name="mt_cuentas", indexes={@ORM\Index(name="id_cli_pro", columns={"id_cli_pro"})})
 * @ORM\Entity
 */
class MtCuentas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cli_pro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliPro;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social_fis", type="string", length=100, nullable=false)
     */
    private $razonSocialFis = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="razon_social_com", type="string", length=100, nullable=true)
     */
    private $razonSocialCom;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_prov", type="string", length=2, nullable=false, options={"comment"="C: CLIENTE P: PROVEEDOR A: AMBOS"})
     */
    private $cliProv = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ruc_dni", type="string", length=20, nullable=false, options={"comment"="DNI -> 8 RUC -> 11"})
     */
    private $rucDni = '';

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_fis", type="string", length=150, nullable=false)
     */
    private $direccionFis = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono", type="string", length=50, nullable=true)
     */
    private $fono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fono_alter", type="string", length=50, nullable=true)
     */
    private $fonoAlter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web", type="string", length=150, nullable=true)
     */
    private $web;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email1", type="string", length=150, nullable=true)
     */
    private $email1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email2", type="string", length=150, nullable=true)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=0, nullable=false, options={"default"="N","comment"="N => NORMAL M => MOROSO C => CONFIABLE"})
     */
    private $estado = 'N';

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion_factu", type="string", length=150, nullable=true)
     */
    private $direccionFactu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_pago_pro", type="string", length=100, nullable=true)
     */
    private $formaPagoPro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_pago_cli", type="string", length=100, nullable=true)
     */
    private $formaPagoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_update", type="datetime", nullable=true)
     */
    private $fUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_registro", type="datetime", nullable=false)
     */
    private $fRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="bloqueado", type="integer", nullable=false)
     */
    private $bloqueado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Contacto_Cli", type="string", length=50, nullable=true)
     */
    private $contactoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Girar_Cheque_Cli", type="string", length=50, nullable=true)
     */
    private $girarChequeCli;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Dias_Entrega", type="boolean", nullable=true)
     */
    private $diasEntrega;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gasto", type="integer", nullable=false, options={"comment"="// SI SUS DOCUMENTOS INGRESADOS SERAN CONSIDERADOS COMO GASTOS"})
     */
    private $gasto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="creado_por", type="integer", nullable=false)
     */
    private $creadoPor = '0';


}
