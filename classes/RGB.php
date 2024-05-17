<?php

class RGB
{
    private int $red = 0;
    private int $green = 0;
    private int $blue = 0;

    static public RGB $RGB;

    // Methods for $red
    public function setRed(int $red): void
    {
        if($red < 0 || $red > 255)
            die("Cannot create object of class Colors. Red number must bee between 0 and 255");
        $this->red = $red;
    }

    public function getRed(): int
    {
        return $this->red;
    }

    // Methods for $green
    public function setGreen(int $green): void
    {
        if($green < 0 || $green > 255)
            die("Cannot create object of class Colors. Green number must bee between 0 and 255");

        $this->green = $green;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    // Methods for $blue
    public function setBlue(int $blue): void
    {
        if($blue < 0 || $blue > 255)
            die("Cannot create object of class Colors. Blue number must bee between 0 and 255");

        $this->blue= $blue;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    // Constructor
    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRGB(): string
    {
        return "RGB(".$this->getRed().", ".$this->getGreen().", ".$this->getBlue().")";
    }

    public static function random(): RGB
    {
        self::$RGB = new RGB(rand(0,255), rand(0,255), rand(0,255));
        return self::$RGB;
    }
}
