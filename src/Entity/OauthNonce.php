<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthNonce
 *
 * @ORM\Table(name="oauth_nonce", indexes={@ORM\Index(name="oauth_nonce_keyts", columns={"conskey", "nonce_ts"})})
 * @ORM\Entity
 */
class OauthNonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="conskey", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conskey;

    /**
     * @var string
     *
     * @ORM\Column(name="nonce", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nonce;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nonce_ts", type="bigint", nullable=true)
     */
    private $nonceTs;


}
