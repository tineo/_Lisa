<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesModules
 *
 * @ORM\Table(name="roles_modules", indexes={@ORM\Index(name="idx_module_id", columns={"module_id"}), @ORM\Index(name="idx_role_id", columns={"role_id"})})
 * @ORM\Entity
 */
class RolesModules
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
     * @ORM\Column(name="module_id", type="string", length=36, nullable=true)
     */
    private $moduleId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allow", type="boolean", nullable=true)
     */
    private $allow = '0';

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
