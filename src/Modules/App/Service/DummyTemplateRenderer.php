<?php

namespace App\Service;

use SimplyDi\Skeleton\Interface\TemplateRendererInterface;

class DummyTemplateRenderer implements TemplateRendererInterface
{

    public function render(string $template, array $data = []): string
    {
        // it just returns the contents of the template passed
        extract($data);

        return file_get_contents(VIEWS_PATH . $template);
    }
}