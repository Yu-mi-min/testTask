<?php

function includeTemplate(string $templatePath, array $data = []): void
{
    extract($data);

    include dirname(__DIR__) . '/src/' . ltrim($templatePath, '/');
}
