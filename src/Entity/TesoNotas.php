<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoNotas
 *
 * @ORM\Table(name="teso_notas")
 * @ORM\Entity
 */
class TesoNotas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNota;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tipo_doc", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $idTipoDoc = '';

    /**
     * @var int
     *
     * @ORM\Column(name="id_proveedor", type="integer", nullable=false)
     */
    private $idProveedor;

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pago", type="integer", nullable=false)
     */
    private $idPago;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pago_cuenta", type="integer", nullable=false)
     */
    private $idPagoCuenta = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_documento", type="date", nullable=false)
     */
    private $fDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="num_doc", type="string", length=20, nullable=false)
     */
    private $numDoc = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_doc", type="integer", nullable=true, options={"comment"="codigo de documento padre"})
     */
    private $idDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_doc_superior", type="string", length=20, nullable=true)
     */
    private $numDocSuperior;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=0, nullable=false)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="tipo_cambio", type="float", precision=10, scale=4, nullable=false)
     */
    private $tipoCambio;

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float", precision=10, scale=4, nullable=false)
     */
    private $importe;

    /**
     * @var float
     *
     * @ORM\Column(name="igv", type="float", precision=10, scale=4, nullable=false)
     */
    private $igv;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=250, nullable=false)
     */
    private $detalle = '';

    /**
     * @var int
     *
     * @ORM\Column(name="usado", type="integer", nullable=false)
     */
    private $usado;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_sistema", type="datetime", nullable=false)
     */
    private $fSistema;


}
