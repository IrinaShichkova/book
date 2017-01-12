<?php
namespace app\models;

class Fam extends _fam
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
            'f_val' => 'Фамилия',
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