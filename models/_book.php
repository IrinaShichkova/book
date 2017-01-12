<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $b_id
 * @property integer $fam_id
 * @property integer $nam_id
 * @property integer $otc_id
 * @property integer $str_id
 * @property integer $n_home
 * @property string $corp
 * @property string $tel
 *
 * @property Fam $fam
 * @property Name $nam
 * @property Otc $otc
 * @property Street $str
 */
class _book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fam_id', 'nam_id', 'otc_id', 'str_id', 'n_home'], 'integer'],
            [['n_home', 'tel'], 'required'],
            [['corp', 'tel'], 'string'],
            [['fam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fam::className(), 'targetAttribute' => ['fam_id' => 'f_id']],
            [['nam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Name::className(), 'targetAttribute' => ['nam_id' => 'n_id']],
            [['otc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Otc::className(), 'targetAttribute' => ['otc_id' => 'o_id']],
            [['str_id'], 'exist', 'skipOnError' => true, 'targetClass' => Street::className(), 'targetAttribute' => ['str_id' => 's_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'b_id' => 'B ID',
            'fam_id' => 'Fam ID',
            'nam_id' => 'Nam ID',
            'otc_id' => 'Otc ID',
            'str_id' => 'Str ID',
            'n_home' => 'N Home',
            'corp' => 'Corp',
            'tel' => 'Tel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFam()
    {
        return $this->hasOne(Fam::className(), ['f_id' => 'fam_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNam()
    {
        return $this->hasOne(Name::className(), ['n_id' => 'nam_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOtc()
    {
        return $this->hasOne(Otc::className(), ['o_id' => 'otc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStr()
    {
        return $this->hasOne(Street::className(), ['s_id' => 'str_id']);
    }
}
