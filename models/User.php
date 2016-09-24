<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use frontend\models\Article;

/**
 * This is the model class for table "user".
 *
 * @property string $code
 * @property string $name
 * @property integer $population
 */
class User extends ActiveRecord
{   

    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['author_id' => 'id']);
    }
    
}
