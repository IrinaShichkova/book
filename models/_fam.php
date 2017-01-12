<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fam".
 *
 * @property integer $f_id
 * @property string $f_val
 *
 * @property Book[] $books
 */
class _fam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_val'], 'required'],
            [['f_val'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_id' => 'F ID',
            'f_val' => 'F Val',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['fam_id' => 'f_id']);
    }
}
