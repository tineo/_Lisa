<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountsBugs
 *
 * @ORM\Table(name="accounts_bugs", indexes={@ORM\Index(name="idx_acc_bug_bug", columns={"bug_id"}), @ORM\Index(name="idx_acc_bug_acc", columns={"account_id"}), @ORM\Index(name="idx_account_bug", columns={"account_id", "bug_id"})})
 * @ORM\Entity
 */
class AccountsBugs
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
     * @ORM\Column(name="bug_id", type="string", length=36, nullable=true)
     */
    private $bugId;

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
