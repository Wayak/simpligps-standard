<?php


interface GeofenceInterface
{
    public static function find(string $id): GeofenceInterface;

    public function getId(): string;

    public function getName(): string;

    public function getDescription(): string;
}
