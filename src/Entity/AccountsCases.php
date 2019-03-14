<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountsCases
 *
 * @ORM\Table(name="accounts_cases", indexes={@ORM\Index(name="idx_acc_case_acc", columns={"account_id"}), @ORM\Index(name="idx_acc_acc_case", columns={"case_id"})})
 * @ORM\Entity
 */
class AccountsCases
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
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="case_id", type="string", length=36, nullable=true)
     */
    private $caseId;

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
