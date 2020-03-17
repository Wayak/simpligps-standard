<?php


interface NotificationInterface
{
    public function getId(): string ;

    public function destroy(): bool ;
}