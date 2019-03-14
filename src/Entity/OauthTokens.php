<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthTokens
 *
 * @ORM\Table(name="oauth_tokens", indexes={@ORM\Index(name="oauth_state_ts", columns={"tstate", "token_ts"}), @ORM\Index(name="constoken_key", columns={"consumer"})})
 * @ORM\Entity
 */
class OauthTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deleted = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="secret", type="string", length=32, nullable=true)
     */
    private $secret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tstate", type="string", length=1, nullable=true)
     */
    private $tstate;

    /**
     * @var string
     *
     * @ORM\Column(name="consumer", type="string", length=36, nullable=false, options={"fixed"=true})
     */
    private $consumer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="token_ts", type="bigint", nullable=true)
     */
    private $tokenTs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verify", type="string", length=32, nullable=true)
     */
    private $verify;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callback_url", type="string", length=255, nullable=true)
     */
    private $callbackUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true, options={"fixed"=true})
     */
    private $assignedUserId;


}
