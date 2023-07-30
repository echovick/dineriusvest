<?php

namespace App\Helpers;

use Ramsey\Uuid\Uuid;

class Helper
{
    /**
     * Generate a unique wallet ID.
     *
     * @return string
     */
    function generateWalletId()
    {
        return Uuid::uuid4()->toString();
    }
}
