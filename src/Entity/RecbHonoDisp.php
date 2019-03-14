<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecbHonoDisp
 *
 * @ORM\Table(name="recb_hono_disp")
 * @ORM\Entity
 */
class RecbHonoDisp
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="codigo", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false)
     */
    private $tipo;


}
