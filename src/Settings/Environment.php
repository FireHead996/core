<?php

declare(strict_types=1);

namespace FireHead996\Core\Settings;

enum Environment: string
{
    case DEVELOPMENT = 'dev';
    case UAT = 'uat';
    case PRODUCTION = 'prd';
}