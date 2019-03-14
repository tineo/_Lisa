<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eapm
 *
 * @ORM\Table(name="eapm", indexes={@ORM\Index(name="idx_app_active", columns={"assigned_user_id", "application", "validated"})})
 * @ORM\Entity
 */
class Eapm
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="application", type="string", length=100, nullable=true, options={"default"="webex"})
     */
    private $application = 'webex';

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_data", type="text", length=65535, nullable=true)
     */
    private $apiData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="consumer_key", type="string", length=255, nullable=true)
     */
    private $consumerKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="consumer_secret", type="string", length=255, nullable=true)
     */
    private $consumerSecret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="oauth_token", type="string", length=255, nullable=true)
     */
    private $oauthToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="oauth_secret", type="string", length=255, nullable=true)
     */
    private $oauthSecret;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="validated", type="boolean", nullable=true)
     */
    private $validated;


}
