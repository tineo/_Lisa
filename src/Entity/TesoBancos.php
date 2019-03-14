<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TesoBancos
 *
 * @ORM\Table(name="teso_bancos")
 * @ORM\Entity
 */
class TesoBancos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_banco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';


}
