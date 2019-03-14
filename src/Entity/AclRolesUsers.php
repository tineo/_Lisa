<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclRolesUsers
 *
 * @ORM\Table(name="acl_roles_users", indexes={@ORM\Index(name="idx_aclrole_id", columns={"role_id"}), @ORM\Index(name="idx_aclrole_user", columns={"role_id", "user_id"}), @ORM\Index(name="idx_acluser_id", columns={"user_id"})})
 * @ORM\Entity
 */
class AclRolesUsers
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
