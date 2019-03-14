<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclRolesActions
 *
 * @ORM\Table(name="acl_roles_actions", indexes={@ORM\Index(name="idx_acl_role_id", columns={"role_id"}), @ORM\Index(name="idx_aclrole_action", columns={"role_id", "action_id"}), @ORM\Index(name="idx_acl_action_id", columns={"action_id"})})
 * @ORM\Entity
 */
class AclRolesActions
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
     * @ORM\Column(name="action_id", type="string", length=36, nullable=true)
     */
    private $actionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="access_override", type="integer", nullable=true)
     */
    private $accessOverride;

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
