<?php

namespace Termiyanc\Moactiontest\App\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Termiyanc\Moactiontest\App\Models as MoactiontestModels;

/**
 * Работа с пользователями
 */
class Users extends Controller
{
    /**
     * Метод выводит интерфейс для работы с подписками пользователя
     */
    public function subscriptions()
    {
        $dataForView = [];
        //  Определяю одного пользователя
        if ($user = MoactiontestModels\Users::first()) {
            $dataForView['user'] = [
                'id' => $user->id,
                'name' => $user->name,
                'subscriptionsToUser' => []
            ];
            //  Определяю подписки пользователя
            foreach ($user->subscriptionsToUser as $subscriptionToUser) {
                $dataForView['user']['subscriptionsToUser'][] = $subscriptionToUser->subscription_id;
            }
            //  Определяю все подписки
            $dataForView['subscriptions'] = MoactiontestModels\Subscriptions::all();
        }
        //  Вывожу интерфейс
        $this->render('users/subscriptions.twig', ['data' => $dataForView]);
    }

    /**
     * Метод добавляет подписку пользователю
     * @param $userId
     * @param $subscriptionId
     */
    public function addSubscription($userId, $subscriptionId)
    {
        //  Добавляю подписку пользователю, если такой подписки не существует
        if (!MoactiontestModels\SubscriptionsToUser::where(['user_id' => $userId, 'subscription_id' => $subscriptionId])->count()) {
            $subscriptionToUser = new MoactiontestModels\SubscriptionsToUser;
            $subscriptionToUser->user_id = $userId;
            $subscriptionToUser->subscription_id = $subscriptionId;
            $subscriptionToUser->save();
        }
    }

    /**
     * Метод удаляет подписку у пользователя
     * @param $userId
     * @param $subscriptionId
     */
    public function removeSubscription($userId, $subscriptionId)
    {
        MoactiontestModels\SubscriptionsToUser::where(['user_id' => $userId, 'subscription_id' => $subscriptionId])->delete();
    }
}
