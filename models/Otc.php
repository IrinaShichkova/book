<?php
namespace app\models;

class Otc extends _otc
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
            'o_val' => 'Отчество',
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