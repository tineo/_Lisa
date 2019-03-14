<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountsOpportunities
 *
 * @ORM\Table(name="accounts_opportunities", indexes={@ORM\Index(name="idx_acc_opp_opp", columns={"opportunity_id"}), @ORM\Index(name="idx_account_opportunity", columns={"account_id", "opportunity_id"}), @ORM\Index(name="idx_acc_opp_acc", columns={"account_id"}), @ORM\Index(name="idx_a_o_opp_acc_del", columns={"opportunity_id", "account_id", "deleted"})})
 * @ORM\Entity
 */
class AccountsOpportunities
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
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=true)
     */
    private $opportunityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

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
