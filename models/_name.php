<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "name".
 *
 * @property integer $n_id
 * @property string $n_val
 *
 * @property Book[] $books
 */
class _name extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'name';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['n_val'], 'required'],
            [['n_val'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'n_id' => 'N ID',
            'n_val' => 'N Val',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['nam_id' => 'n_id']);
    }
}
