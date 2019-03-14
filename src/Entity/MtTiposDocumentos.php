<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtTiposDocumentos
 *
 * @ORM\Table(name="mt_tipos_documentos", indexes={@ORM\Index(name="id_tipo_doc", columns={"id_tipo_doc"})})
 * @ORM\Entity
 */
class MtTiposDocumentos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_doc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=false)
     */
    private $descripcion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="afecto", type="string", length=0, nullable=false)
     */
    private $afecto;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_liquidacion", type="integer", nullable=false, options={"default"="99"})
     */
    private $ordenLiquidacion = '99';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
