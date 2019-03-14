<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoldersRel
 *
 * @ORM\Table(name="folders_rel", indexes={@ORM\Index(name="idx_poly_module_poly_id", columns={"polymorphic_module", "polymorphic_id"}), @ORM\Index(name="idx_fr_id_deleted_poly", columns={"folder_id", "deleted", "polymorphic_id"})})
 * @ORM\Entity
 */
class FoldersRel
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
     * @var string
     *
     * @ORM\Column(name="folder_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $folderId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="polymorphic_module", type="string", length=25, nullable=true)
     */
    private $polymorphicModule;

    /**
     * @var string
     *
     * @ORM\Column(name="polymorphic_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $polymorphicId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';


}
