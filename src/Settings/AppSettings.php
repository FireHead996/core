<?php

declare(strict_types=1);

namespace FireHead996\Core\Settings;

class AppSettings implements Settings
{
    private array $settings;
    private Environment $environment;

    private function readSettings(): void
    {
        $path = sprintf(
            "%s/config/config.%s.php",
            $_ENV['basePath'],
            $this->environment->value
        );

        $this->settings = require $path;
    }

    public function __construct(Environment $environment = Environment::DEVELOPMENT)
    {
        $this->environment = $environment;
        $this->readSettings();
    }

    /**
     * @return mixed
     */
    public function get(string $key = '')
    {
        return (empty($key)) ? $this->settings : $this->settings[$key];
    }
}