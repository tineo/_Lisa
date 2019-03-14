<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Folders
 *
 * @ORM\Table(name="folders", indexes={@ORM\Index(name="idx_parent_folder", columns={"parent_folder"})})
 * @ORM\Entity
 */
class Folders
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="folder_type", type="string", length=25, nullable=true)
     */
    private $folderType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_folder", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $parentFolder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_child", type="boolean", nullable=true)
     */
    private $hasChild = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_group", type="boolean", nullable=true)
     */
    private $isGroup = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=true)
     */
    private $isDynamic = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dynamic_query", type="text", length=65535, nullable=true)
     */
    private $dynamicQuery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assign_to_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignToId;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_by", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $modifiedBy;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
