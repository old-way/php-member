<?php
/**
 * This file is part of Notadd.
 *
 * @author        Qiyueshiyi <qiyueshiyi@outlook.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime      2017-02-15 11:29
 */


namespace Notadd\Member\Models;

use Notadd\Foundation\Member\Permission as BasePermission;

class Permission extends BasePermission
{
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_permission', 'permission_id', 'group_id');
    }
}
