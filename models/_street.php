<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "street".
 *
 * @property integer $s_id
 * @property string $s_val
 *
 * @property Book[] $books
 */
class _street extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'street';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_val'], 'required'],
            [['s_val'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_val' => 'S Val',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['str_id' => 's_id']);
    }
}
