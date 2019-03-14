<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentRevisions
 *
 * @ORM\Table(name="document_revisions", indexes={@ORM\Index(name="documentrevision_mimetype", columns={"file_mime_type"})})
 * @ORM\Entity
 */
class DocumentRevisions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="change_log", type="string", length=255, nullable=true)
     */
    private $changeLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="document_id", type="string", length=36, nullable=true)
     */
    private $documentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc_id", type="string", length=100, nullable=true)
     */
    private $docId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc_type", type="string", length=100, nullable=true)
     */
    private $docType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc_url", type="string", length=255, nullable=true)
     */
    private $docUrl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_ext", type="string", length=100, nullable=true)
     */
    private $fileExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_mime_type", type="string", length=100, nullable=true)
     */
    private $fileMimeType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="revision", type="string", length=100, nullable=true)
     */
    private $revision;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;


}
