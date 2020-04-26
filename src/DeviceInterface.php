<?php


interface DeviceInterface
{

    public static function find(string $id): DeviceInterface;

    public function getName(): string;

    public function getId(): string;

    /**
     * Destroy a Device resource from its origin
     * @return string
     */
    public static function destroy(): string;
}
