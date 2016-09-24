<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;

/*
 * Контроллер UserContorller
 * Для управления информацией о пользователе 
 */
class UserController extends Controller
{
    /*
     * Метод для выводы домашней страницы пользователя
     */

    public function actionView($id)
    {   
        // Получение информации об юзере
        $info = User::findOne($id);
        
        // Получения списка статей автора
        $articles = $info->getArticles()->select(['title', 'id'])->all();        
        
        // Генерация вида
        return $this->render('view', ['name' => $info->username,
                                      'email' => $info->email,
                                      'my_interests' => $info->my_interests,
                                      'birth_date' => $info->birth_date,
                                      'work_place' => $info->work_place,
                                      'id' => $id,
                                      'articles' => $articles]);
    }

}
