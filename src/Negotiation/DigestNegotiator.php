<?php declare(strict_types=1);

namespace Jasny\HttpDigest\Negotiation;

use Negotiation\AbstractNegotiator;

/**
 * Content negotiation for `Want-Digest` header.
 */
class DigestNegotiator extends AbstractNegotiator
{
    /**
     * @param string $accept
     * @return WantDigest
     */
    protected function acceptFactory($accept)
    {
        return new WantDigest($accept);
    }
}
