<?php

namespace Config;

use SimplyDi\SimplyConfig\Config as SimplyConfig;

class Config
{
    private SimplyConfig $config;

    private string $configFile = SRC_PATH . 'Config' . DS . 'Config.yaml';

    public function __construct()
    {
        $this->config = new SimplyConfig($this->configFile);
    }

    public function get(string $key)
    {
        return $this->config->get($key);
    }

}