<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use frontend\models\User;
/**
 * This is the model class for table "article".
 *
 * @property string $code
 * @property string $name
 * @property integer $population
 */
class Article extends ActiveRecord
{   
   
   /**
     * @возвращает строку с названием таблицы, связанной
     * с данным ActiveRecord class.
     */
    public static function tableName()
    {
        return 'articles';
    }
    
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id'])->asArray();
    }

}
