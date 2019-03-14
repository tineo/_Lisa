<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProspectListsProspects
 *
 * @ORM\Table(name="prospect_lists_prospects", indexes={@ORM\Index(name="idx_plp_pro_id", columns={"prospect_list_id"}), @ORM\Index(name="idx_plp_rel_id", columns={"related_id", "related_type", "prospect_list_id"})})
 * @ORM\Entity
 */
class ProspectListsProspects
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
     * @ORM\Column(name="prospect_list_id", type="string", length=36, nullable=true)
     */
    private $prospectListId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_id", type="string", length=36, nullable=true)
     */
    private $relatedId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_type", type="string", length=25, nullable=true)
     */
    private $relatedType;

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
