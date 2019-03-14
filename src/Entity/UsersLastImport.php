<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersLastImport
 *
 * @ORM\Table(name="users_last_import", indexes={@ORM\Index(name="idx_user_id", columns={"assigned_user_id"})})
 * @ORM\Entity
 */
class UsersLastImport
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
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bean_type", type="string", length=36, nullable=true)
     */
    private $beanType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=true)
     */
    private $beanId;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
