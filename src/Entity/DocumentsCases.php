<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsCases
 *
 * @ORM\Table(name="documents_cases", indexes={@ORM\Index(name="documents_cases_case_id", columns={"case_id", "document_id"}), @ORM\Index(name="documents_cases_document_id", columns={"document_id", "case_id"})})
 * @ORM\Entity
 */
class DocumentsCases
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

    /**
     * @var string|null
     *
     * @ORM\Column(name="document_id", type="string", length=36, nullable=true)
     */
    private $documentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="case_id", type="string", length=36, nullable=true)
     */
    private $caseId;


}
