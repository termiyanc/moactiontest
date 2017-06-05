<?php namespace Termiyanc\Moactiontest\App\Models;

use Illuminate\Database\Eloquent\Model;
use Termiyanc\Moactiontest\App\Models as MoactiontestModels;

/**
 * Пользователи
 */
class Users extends Model
{
    protected $table = 'termiyanc_moactiontest_users';

    /**
     * Связь с подписками пользователя
     */
    public function subscriptionsToUser()
    {
        return $this->hasMany(MoactiontestModels\SubscriptionsToUser::class, 'user_id');
    }
}
