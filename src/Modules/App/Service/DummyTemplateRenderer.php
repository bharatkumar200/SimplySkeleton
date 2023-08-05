<?php

namespace App\Service;

use SimplyDi\Skeleton\Interface\TemplateRendererInterface;

/**
 * This is for demonstration only
 * Remove or replace with your own
 * e.g., TwigRenderer or PlatesRenderer
 */
class DummyTemplateRenderer implements TemplateRendererInterface
{

    public function render(string $template, array $data = []): string
    {
        // it just returns the contents of the template passed
        extract($data);

        return file_get_contents(VIEWS_PATH . $template);
    }
}