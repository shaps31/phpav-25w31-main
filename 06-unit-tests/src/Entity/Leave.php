<?php

class Leave
{
    private ?int $id = null;
    private DateTimeImmutable $from;
    private DateTimeImmutable $to;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFrom(): DateTimeImmutable
    {
        return $this->from;
    }

    public function setFrom(DateTimeImmutable $from): void
    {
        $this->from = $from;
    }

    public function getTo(): DateTimeImmutable
    {
        return $this->to;
    }

    public function setTo(DateTimeImmutable $to): void
    {
        $this->to = $to;
    }
}