<?php

namespace AE\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AEUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
