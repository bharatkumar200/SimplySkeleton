<?php

namespace App\Controller;

use SimplyDi\Skeleton\Interface\TemplateRendererInterface;

class HomeController
{

    public function __construct(
        private TemplateRendererInterface $renderer
    )
    {
    }

    public function index(): string
    {
        return $this->renderer->render('home.php', []);
    }

}