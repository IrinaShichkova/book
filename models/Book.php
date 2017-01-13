<?php
namespace app\models;

class Book extends _book
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
            [['fam_id', 'nam_id', 'otc_id', 'str_id', 'n_home', 'tel'], 'integer'],
            [['n_home', 'tel'], 'required'],
            [['corp'], 'string'],
            [['tel'], 'integer', 'min' => '10000000000', 'max'=> '99999999999'],
            ['tel', 'unique'],
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
            'fam_id' => 'Фамилия',
            'nam_id' => 'Имя',
            'otc_id' => 'Отчество',
            'str_id' => 'Улица',
            'n_home' => 'Номер дома',
            'corp' => 'Корпус',
            'tel' => 'Телефон',
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
    public function getName()
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
    public function getStreet()
    {
        return $this->hasOne(Street::className(), ['s_id' => 'str_id']);
    }
}
