<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $age
 * @property string $address
 * @property string $phone
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'address', 'phone'], 'required'],
            [['last_name', 'first_name', 'address'], 'string', 'max' => 100],
            [['age'], 'string', 'max' => 99],
            [['phone'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'age' => 'Age',
            'address' => 'Address',
            'phone' => 'Phone',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['persons_id' => 'id']);
    }
}
