<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelatedAccounts
 *
 * @ORM\Table(name="related_accounts")
 * @ORM\Entity
 */
class RelatedAccounts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related_id", type="string", length=36, nullable=true)
     */
    private $relatedId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;


}
