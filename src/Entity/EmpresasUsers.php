<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpresasUsers
 *
 * @ORM\Table(name="empresas_users")
 * @ORM\Entity
 */
class EmpresasUsers
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
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empresa_id", type="bigint", nullable=true)
     */
    private $empresaId;


}
