<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leads
 *
 * @ORM\Table(name="leads", indexes={@ORM\Index(name="idx_leads_acct_del", columns={"account_id", "deleted"}), @ORM\Index(name="idx_lead_email1", columns={"email1", "deleted"}), @ORM\Index(name="idx_lead_email2", columns={"email2", "deleted"}), @ORM\Index(name="idx_lead_del_stat", columns={"last_name", "status", "deleted", "first_name"}), @ORM\Index(name="idx_lead_assigned", columns={"assigned_user_id"}), @ORM\Index(name="idx_lead_opp_del", columns={"opportunity_id", "deleted"}), @ORM\Index(name="idx_lead_last_first", columns={"last_name", "first_name", "deleted"}), @ORM\Index(name="idx_lead_contact", columns={"contact_id"})})
 * @ORM\Entity
 */
class Leads
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
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="converted", type="boolean", nullable=false)
     */
    private $converted = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateEntered = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModified = '0000-00-00 00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salutation", type="string", length=5, nullable=true)
     */
    private $salutation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=25, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=25, nullable=true)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="refered_by", type="string", length=100, nullable=true)
     */
    private $referedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lead_source", type="string", length=100, nullable=true)
     */
    private $leadSource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lead_source_description", type="text", length=65535, nullable=true)
     */
    private $leadSourceDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_description", type="text", length=65535, nullable=true)
     */
    private $statusDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=100, nullable=true)
     */
    private $department;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reports_to_id", type="string", length=36, nullable=true)
     */
    private $reportsToId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="do_not_call", type="string", length=3, nullable=true)
     */
    private $doNotCall = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_home", type="string", length=25, nullable=true)
     */
    private $phoneHome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_mobile", type="string", length=25, nullable=true)
     */
    private $phoneMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_work", type="string", length=25, nullable=true)
     */
    private $phoneWork;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_other", type="string", length=25, nullable=true)
     */
    private $phoneOther;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_fax", type="string", length=25, nullable=true)
     */
    private $phoneFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email1", type="string", length=100, nullable=true)
     */
    private $email1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email2", type="string", length=100, nullable=true)
     */
    private $email2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_opt_out", type="string", length=3, nullable=true)
     */
    private $emailOptOut = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="primary_address_street", type="string", length=150, nullable=true)
     */
    private $primaryAddressStreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primary_address_city", type="string", length=100, nullable=true)
     */
    private $primaryAddressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primary_address_state", type="string", length=100, nullable=true)
     */
    private $primaryAddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primary_address_postalcode", type="string", length=20, nullable=true)
     */
    private $primaryAddressPostalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primary_address_country", type="string", length=100, nullable=true)
     */
    private $primaryAddressCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alt_address_street", type="string", length=150, nullable=true)
     */
    private $altAddressStreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alt_address_city", type="string", length=100, nullable=true)
     */
    private $altAddressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alt_address_state", type="string", length=100, nullable=true)
     */
    private $altAddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alt_address_postalcode", type="string", length=20, nullable=true)
     */
    private $altAddressPostalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alt_address_country", type="string", length=100, nullable=true)
     */
    private $altAddressCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_name", type="string", length=150, nullable=true)
     */
    private $accountName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_description", type="text", length=65535, nullable=true)
     */
    private $accountDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=true)
     */
    private $opportunityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opportunity_name", type="string", length=255, nullable=true)
     */
    private $opportunityName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opportunity_amount", type="string", length=50, nullable=true)
     */
    private $opportunityAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portal_name", type="string", length=255, nullable=true)
     */
    private $portalName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portal_app", type="string", length=255, nullable=true)
     */
    private $portalApp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invalid_email", type="boolean", nullable=true)
     */
    private $invalidEmail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="assistant", type="string", length=75, nullable=true)
     */
    private $assistant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assistant_phone", type="string", length=100, nullable=true)
     */
    private $assistantPhone;


}
