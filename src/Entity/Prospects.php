<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prospects
 *
 * @ORM\Table(name="prospects", indexes={@ORM\Index(name="idx_prospects_last_first", columns={"last_name", "first_name", "deleted"}), @ORM\Index(name="prospect_auto_tracker_key", columns={"tracker_key"}), @ORM\Index(name="idx_prospecs_del_last", columns={"last_name", "deleted"})})
 * @ORM\Entity
 */
class Prospects
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
     * @var int
     *
     * @ORM\Column(name="tracker_key", type="integer", nullable=false)
     */
    private $trackerKey;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

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
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=25, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=255, nullable=true)
     */
    private $department;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

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
     * @ORM\Column(name="assistant", type="string", length=75, nullable=true)
     */
    private $assistant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assistant_phone", type="string", length=25, nullable=true)
     */
    private $assistantPhone;

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
     * @var bool|null
     *
     * @ORM\Column(name="invalid_email", type="boolean", nullable=true)
     */
    private $invalidEmail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lead_id", type="string", length=36, nullable=true)
     */
    private $leadId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_name", type="string", length=150, nullable=true)
     */
    private $accountName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;


}
