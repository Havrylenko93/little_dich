<?php

class Door
{
    protected static $doorType = 'basic';

    static public function getDoorType()
    {
        return static::$doorType;
    }
}

class MagneticDoor extends Door
{
    protected static $doorType = 'Magnetic';
}

class MechanicalDoor extends Door
{
    protected static $doorType = 'Mechanical';
}

/**
 *  if we will change getDoorType method to return self::$doorType - always will be "basic"
 */

echo MagneticDoor::getDoorType(); // Magnetic
echo MechanicalDoor::getDoorType(); // Mechanical