<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-08-17 23:35:18
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-08-18 01:07:41
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $tasks = [
        'created_at',
        'updated_at',
        'deleted_at',
        'expired_at',
    ];
}
