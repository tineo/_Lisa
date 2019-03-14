<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectRelation
 *
 * @ORM\Table(name="project_relation")
 * @ORM\Entity
 */
class ProjectRelation
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
     * @var string
     *
     * @ORM\Column(name="project_id", type="string", length=36, nullable=false)
     */
    private $projectId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="relation_id", type="string", length=36, nullable=false)
     */
    private $relationId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="relation_type", type="string", length=255, nullable=false)
     */
    private $relationType = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModified = '0000-00-00 00:00:00';


}
