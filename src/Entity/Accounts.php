<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts", indexes={@ORM\Index(name="idx_accnt_name_del", columns={"name", "deleted"}), @ORM\Index(name="idx_accnt_id_del", columns={"id", "deleted"}), @ORM\Index(name="idx_accnt_assigned_del", columns={"deleted", "assigned_user_id"}), @ORM\Index(name="idx_accnt_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class Accounts
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
     * @var string
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $modifiedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $parentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_type", type="string", length=50, nullable=true)
     */
    private $accountType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="industry", type="string", length=50, nullable=true)
     */
    private $industry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="annual_revenue", type="string", length=100, nullable=true)
     */
    private $annualRevenue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_fax", type="string", length=100, nullable=true)
     */
    private $phoneFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billing_address_street", type="string", length=150, nullable=true)
     */
    private $billingAddressStreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billing_address_city", type="string", length=100, nullable=true)
     */
    private $billingAddressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billing_address_state", type="string", length=100, nullable=true)
     */
    private $billingAddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billing_address_postalcode", type="string", length=20, nullable=true)
     */
    private $billingAddressPostalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billing_address_country", type="string", length=255, nullable=true)
     */
    private $billingAddressCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rating", type="string", length=100, nullable=true)
     */
    private $rating;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_office", type="string", length=100, nullable=true)
     */
    private $phoneOffice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_alternate", type="string", length=100, nullable=true)
     */
    private $phoneAlternate;

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
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ownership", type="string", length=100, nullable=true)
     */
    private $ownership;

    /**
     * @var string|null
     *
     * @ORM\Column(name="employees", type="string", length=10, nullable=true)
     */
    private $employees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sic_code", type="string", length=11, nullable=true)
     */
    private $sicCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ticker_symbol", type="string", length=10, nullable=true)
     */
    private $tickerSymbol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_address_street", type="string", length=150, nullable=true)
     */
    private $shippingAddressStreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_address_city", type="string", length=100, nullable=true)
     */
    private $shippingAddressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_address_state", type="string", length=100, nullable=true)
     */
    private $shippingAddressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_address_postalcode", type="string", length=20, nullable=true)
     */
    private $shippingAddressPostalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_address_country", type="string", length=255, nullable=true)
     */
    private $shippingAddressCountry;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $campaignId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blocked", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $blocked = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cobranza_larga", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $cobranzaLarga = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cliente_top", type="integer", nullable=false)
     */
    private $clienteTop = '0';


}
