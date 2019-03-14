<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TasksCstm
 *
 * @ORM\Table(name="tasks_cstm")
 * @ORM\Entity
 */
class TasksCstm
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_c", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;


}
