<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Article;
use yii\data\Pagination;
use yii\db\ActiveQuery;

/*
 * Контроллер ArticlesController
 * для управления разделом публикаций 
 */
class ArticleController extends Controller
{
    /*
     * Метод для вывода стартовой страницы 
     * со списком статей
     */
    
    public function actionIndex()
    {
        // Создание объекта Article
        $articles = Article::find();
        
        // Создание объекта пагинатора
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $articles->count(),
        ]);
        
        // Получение списка статей с именами авторов
        $list = $articles->joinWith([ 
            'author'=> function($query){
                $query->select(['username', 'id']);
            }
        ])->orderBy(['created_at' => SORT_DESC])
                         ->offset($pagination->offset)
                         ->limit($pagination->limit)
                         ->all();
        
        // Генерация вида
        return $this->render('index', ['articles' => $list,
                                       'pagination' => $pagination,
                            ]);
    }
}
