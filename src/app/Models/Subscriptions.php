<?php namespace Termiyanc\Moactiontest\App\Models;

use Illuminate\Database\Eloquent\Model;
use Termiyanc\Moactiontest\App\Models as MoactiontestModels;

/**
 * Подписки
 */
class Subscriptions extends Model
{

    protected $table = 'termiyanc_moactiontest_subscriptions';

    /**
     * Связь с подписками пользователя
     */
    public function SubscriptionsToUsers()
    {
        return $this->hasMany(MoactiontestModels\SubscriptionsToUser::class, 'subscription_id');
    }
}
