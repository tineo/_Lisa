<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="documents", indexes={@ORM\Index(name="idx_doc_cat", columns={"category_id", "subcategory_id"})})
 * @ORM\Entity
 */
class Documents
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $modifiedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="document_name", type="string", length=255, nullable=true)
     */
    private $documentName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc_id", type="string", length=100, nullable=true)
     */
    private $docId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc_type", type="string", length=100, nullable=true, options={"default"="Sugar"})
     */
    private $docType = 'Sugar';

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc_url", type="string", length=255, nullable=true)
     */
    private $docUrl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="active_date", type="date", nullable=true)
     */
    private $activeDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="exp_date", type="date", nullable=true)
     */
    private $expDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_id", type="string", length=100, nullable=true)
     */
    private $categoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subcategory_id", type="string", length=100, nullable=true)
     */
    private $subcategoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_id", type="string", length=100, nullable=true)
     */
    private $statusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="document_revision_id", type="string", length=36, nullable=true)
     */
    private $documentRevisionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_doc_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $relatedDocId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_doc_rev_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $relatedDocRevId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_template", type="boolean", nullable=true)
     */
    private $isTemplate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_type", type="string", length=100, nullable=true)
     */
    private $templateType;


}
