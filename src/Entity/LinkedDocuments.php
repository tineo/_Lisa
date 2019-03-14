<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinkedDocuments
 *
 * @ORM\Table(name="linked_documents")
 * @ORM\Entity
 */
class LinkedDocuments
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
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true)
     */
    private $parentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_type", type="string", length=25, nullable=true)
     */
    private $parentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="document_id", type="string", length=36, nullable=true)
     */
    private $documentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="document_revision_id", type="string", length=36, nullable=true)
     */
    private $documentRevisionId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';


}
