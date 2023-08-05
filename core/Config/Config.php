<?php

namespace SimplyDi\Skeleton\Config;

use SimplyDi\SimplyConfig\Config as SimplyConfig;
use Nette\Utils\Finder;

class Config
{
    private SimplyConfig $config;

    private string $configFolder;

    public function __construct(string $configFolder)
    {
        $this->config = new SimplyConfig($this->findConfigFiles());
    }

    private function findConfigFiles(): array
    {
        $files = Finder::findFiles("*.yaml")->in($this->configFolder);

        $configFiles = [];

        foreach ($files as $file) {
            $configFiles[] = $file->getRealPath();
        }

        return $configFiles;
    }

    public function getConfig(string $key)
    {
        return $this->config->get($key);
    }

}