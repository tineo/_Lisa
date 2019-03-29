<?php
/**
 * Created by PhpStorm.
 * User: tineo
 * Date: 28/03/19
 * Time: 05:33 PM
 */

namespace App\Security\Encoder;

use Symfony\Component\Security\Core\Encoder\BasePasswordEncoder;


class MyCustomPasswordEncoder extends BasePasswordEncoder
{

    private $algorithm;
    private $encodeHashAsBase64;
    private $iterations;

    /**
     * @param string $algorithm The digest algorithm to use
     * @param bool $encodeHashAsBase64 Whether to base64 encode the password hash
     * @param int $iterations The number of iterations to use to stretch the password hash
     */
    public function __construct(string $algorithm = 'sha1', bool $encodeHashAsBase64 = false, int $iterations = 0)
    {
        $this->algorithm = $algorithm;
        $this->encodeHashAsBase64 = $encodeHashAsBase64;
        $this->iterations = $iterations;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword($raw, $salt)
    {
        if ($this->isPasswordTooLong($raw)) {
            throw new BadCredentialsException('Invalid password.');
        }

        if (!in_array($this->algorithm, hash_algos(), true)) {
            throw new \LogicException(sprintf('The algorithm "%s" is not supported.', $this->algorithm));
        }

        //$salted = $this->mergePasswordAndSalt($raw, $salt);
        $salted = $salt . $raw;
        $digest = hash($this->algorithm, $salted, true);

        // "stretch" hash
        for ($i = 1; $i < $this->iterations; ++$i) {
            $digest = hash($this->algorithm, $digest . $salted, true);
        }

        return $this->encodeHashAsBase64 ? base64_encode($digest) : bin2hex($digest);
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid($encoded, $raw, $salt)
    {
        return ($raw==$encoded);
        //return !$this->isPasswordTooLong($raw) && $this->comparePasswords($encoded, $this->encodePassword($raw, $salt));
    }
}