<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BugsAudit
 *
 * @ORM\Table(name="bugs_audit")
 * @ORM\Entity
 */
class BugsAudit
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     */
    private $id = '';

    /**
     * @var string
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=false)
     */
    private $parentId = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_name", type="string", length=100, nullable=true)
     */
    private $fieldName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data_type", type="string", length=100, nullable=true)
     */
    private $dataType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="before_value_string", type="string", length=255, nullable=true)
     */
    private $beforeValueString;

    /**
     * @var string|null
     *
     * @ORM\Column(name="after_value_string", type="string", length=255, nullable=true)
     */
    private $afterValueString;

    /**
     * @var string|null
     *
     * @ORM\Column(name="before_value_text", type="text", length=65535, nullable=true)
     */
    private $beforeValueText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="after_value_text", type="text", length=65535, nullable=true)
     */
    private $afterValueText;


}
