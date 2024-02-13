<?php

namespace Models\User;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $phone
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Phone extends Model
{
    protected $table = 'phones';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
