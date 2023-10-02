<?php


function loadConfig(string $configName): array
{
    return include $_SERVER['DOCUMENT_ROOT'] . "/config/$configName.php" ?: [];
}