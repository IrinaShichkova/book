<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "otc".
 *
 * @property integer $o_id
 * @property string $o_val
 *
 * @property Book[] $books
 */
class _otc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['o_val'], 'required'],
            [['o_val'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'o_id' => 'O ID',
            'o_val' => 'O Val',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['otc_id' => 'o_id']);
    }
}
