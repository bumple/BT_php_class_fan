<?php

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private  $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = 'blue';
    }


    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }


    public function getColor(): string
    {
        return $this->color;
    }


    public function getRadius(): int
    {
        return $this->radius;
    }


    public function getSpeed(): int
    {
        return $this->speed;
    }


    public function isOn(): bool
    {
        return $this->on;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setOn(bool $on): void
    {
        $this->on = $on;
    }


    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function toString(){
        echo 'color: '.$this->color.'<br>';
        echo 'trang thai: '.$this->on.'<br>';
        echo 'radius: '.$this->radius.'<br>';
        echo 'speed: '.$this->speed.'<br>';
    }

}