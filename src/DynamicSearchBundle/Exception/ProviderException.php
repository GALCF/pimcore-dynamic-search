<?php

namespace DynamicSearchBundle\Exception;

use Exception;
use Throwable;

final class ProviderException extends Exception
{
    public function __construct(string $message, ?string $providerName = null, ?Throwable $previous = null)
    {
        $providerName = is_null($providerName) ? '' : sprintf(' (%s)', $providerName);

        parent::__construct(sprintf('Provider Error %s: %s', $providerName, $message), 0, $previous);
    }
}
