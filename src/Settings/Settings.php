<?php

declare(strict_types=1);

namespace FireHead996\Core\Settings;

interface Settings
{
    public function get(string $key = ''): mixed;
}