<?php

                                    // CRUD
const CREATE_PERMISSION = 1 << 3;   // 1000
const READ_PERMISSION = 1 << 2;     // 0100
const UPDATE_PERMISSION = 1 << 1;   // 0010
const DELETE_PERMISSION = 1 << 0;   // 0001
const ALL_PERMISSIONS = CREATE_PERMISSION | READ_PERMISSION | UPDATE_PERMISSION | DELETE_PERMISSION;


echo "<pre>";
var_dump(decbin(DELETE_PERMISSION));
echo "</pre>";
exit();