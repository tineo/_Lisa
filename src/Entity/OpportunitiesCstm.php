<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpportunitiesCstm
 *
 * @ORM\Table(name="opportunities_cstm")
 * @ORM\Entity
 */
class OpportunitiesCstm
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_c", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="f_cliente_ok_c", type="date", nullable=true)
     */
    private $fClienteOkC;


}
