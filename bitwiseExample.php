<?php


class Dich
{
                                               // CRUD
    public const CREATE_PERMISSION = 1 << 3;   // 1000
    public const READ_PERMISSION = 1 << 2;     // 0100
    public const UPDATE_PERMISSION = 1 << 1;   // 0010
    public const DELETE_PERMISSION = 1 << 0;   // 0001
    public const ALL_PERMISSIONS = self::CREATE_PERMISSION | self::READ_PERMISSION | self::UPDATE_PERMISSION | self::DELETE_PERMISSION;

    private $userPermissions = self::ALL_PERMISSIONS;

    public function getUserPermissions()
    {
        return $this->userPermissions;
    }

    public function addPermission(int $permission)
    {
        $this->userPermissions |= $permission;

        return $this->userPermissions;
    }

    public function removePermission(int $permission)
    {
        $this->userPermissions = $this->userPermissions & ~ $permission;

        return $this->userPermissions;
    }

    public function userHasPermission(int $permission): bool
    {
        return (bool)($this->userPermissions & $permission);
    }
}


$x = new Dich();
echo decbin($x->removePermission(Dich::DELETE_PERMISSION)) . nl2br(PHP_EOL);
echo decbin($x->addPermission(Dich::DELETE_PERMISSION)) . nl2br(PHP_EOL);
echo decbin($x->removePermission(Dich::UPDATE_PERMISSION)) . nl2br(PHP_EOL);

if ($x->userHasPermission(Dich::UPDATE_PERMISSION) === false) {
    echo 'users doesnt have permission';
}
