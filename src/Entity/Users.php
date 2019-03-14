<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="user_name_idx", columns={"user_name"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="user_name", type="string", length=60, nullable=true)
     */
    private $userName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_hash", type="string", length=32, nullable=true)
     */
    private $userHash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="authenticate_id", type="string", length=100, nullable=true)
     */
    private $authenticateId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sugar_login", type="boolean", nullable=true, options={"default"="1"})
     */
    private $sugarLogin = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=30, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=30, nullable=true)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reports_to_id", type="string", length=36, nullable=true)
     */
    private $reportsToId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=true)
     */
    private $isAdmin = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="receive_notifications", type="boolean", nullable=true, options={"default"="1"})
     */
    private $receiveNotifications = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=50, nullable=true)
     */
    private $department;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_home", type="string", length=50, nullable=true)
     */
    private $phoneHome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_mobile", type="string", length=50, nullable=true)
     */
    private $phoneMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_work", type="string", length=50, nullable=true)
     */
    private $phoneWork;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_other", type="string", length=50, nullable=true)
     */
    private $phoneOther;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_fax", type="string", length=50, nullable=true)
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
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_street", type="string", length=150, nullable=true)
     */
    private $addressStreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_city", type="string", length=100, nullable=true)
     */
    private $addressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_state", type="string", length=100, nullable=true)
     */
    private $addressState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_country", type="string", length=25, nullable=true)
     */
    private $addressCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_postalcode", type="string", length=9, nullable=true)
     */
    private $addressPostalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_preferences", type="text", length=65535, nullable=true)
     */
    private $userPreferences;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="portal_only", type="boolean", nullable=true)
     */
    private $portalOnly = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_status", type="string", length=25, nullable=true)
     */
    private $employeeStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="messenger_id", type="string", length=25, nullable=true)
     */
    private $messengerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="messenger_type", type="string", length=25, nullable=true)
     */
    private $messengerType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_group", type="boolean", nullable=true)
     */
    private $isGroup = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_vera_admin", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $isVeraAdmin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_vera_supervisor", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $isVeraSupervisor = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="has_external_access", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $hasExternalAccess = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_ip", type="string", length=32, nullable=true)
     */
    private $lastIp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_request", type="datetime", nullable=true)
     */
    private $lastRequest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logged_in", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $loggedIn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_on_employees", type="boolean", nullable=true, options={"default"="1"})
     */
    private $showOnEmployees = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="external_auth_only", type="boolean", nullable=true)
     */
    private $externalAuthOnly = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="system_generated_password", type="boolean", nullable=true)
     */
    private $systemGeneratedPassword = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pwd_last_changed", type="datetime", nullable=true)
     */
    private $pwdLastChanged;


}
