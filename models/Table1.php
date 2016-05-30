<?php

namespace app\models;

use app\models\Country;
use app\models\Gender;


use Yii;

/**
 * This is the model class for table "table1".
 *
 * @property string $name
 * @property integer $age
 * @property integer $gender
 * @property integer $blood_id
 * @property string $place
 * @property string $mobile
 * @property string $last_donation_on
 */
class Table1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'gender', 'blood_id', 'place', 'mobile', 'last_donation_on'], 'required'],
            [['age', 'gender', 'blood_id'], 'integer'],
            [['last_donation_on'], 'safe'],
            [['name'], 'string', 'max' => 30],
            [['place'], 'string', 'max' => 20],
            [['mobile'], 'string', 'max' => 10],
        ];
    }

  public function getBlood() {



return $this->hasOne(Blood::className(),['id'=>'blood_id']);

}


  public function getGender() {



return $this->hasOne(Gender::className(),['id'=>'gender']);

}
 





    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'age' => 'Age',
            'gender' => 'Gender',
            'blood_id' => 'Blood ID',
            'place' => 'Place',
            'mobile' => 'Mobile',
            'last_donation_on' => 'Last Donation On',
        ];
    }
}
