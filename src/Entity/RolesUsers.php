<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesUsers
 *
 * @ORM\Table(name="roles_users", indexes={@ORM\Index(name="idx_ru_user_id", columns={"user_id"}), @ORM\Index(name="idx_ru_role_id", columns={"role_id"})})
 * @ORM\Entity
 */
class RolesUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="role_id", type="string", length=36, nullable=true)
     */
    private $roleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
