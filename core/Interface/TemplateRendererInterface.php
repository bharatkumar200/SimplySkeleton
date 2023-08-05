<?php

namespace SimplyDi\Skeleton\Interface;

interface TemplateRendererInterface
{
    public function render(string $template, array $data = []): string;
}