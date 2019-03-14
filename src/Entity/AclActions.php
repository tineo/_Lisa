<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclActions
 *
 * @ORM\Table(name="acl_actions", indexes={@ORM\Index(name="idx_aclaction_id_del", columns={"id", "deleted"})})
 * @ORM\Entity
 */
class AclActions
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateEntered = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModified = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=false)
     */
    private $modifiedUserId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=100, nullable=true)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acltype", type="string", length=100, nullable=true)
     */
    private $acltype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aclaccess", type="integer", nullable=true)
     */
    private $aclaccess;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
