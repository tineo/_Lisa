<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MtMotivosReq
 *
 * @ORM\Table(name="mt_motivos_req")
 * @ORM\Entity
 */
class MtMotivosReq
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_motivo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMotivo;

    /**
     * @var string
     *
     * @ORM\Column(name="dsc_motivo", type="string", length=50, nullable=false)
     */
    private $dscMotivo = '';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
