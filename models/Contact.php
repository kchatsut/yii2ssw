<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $email
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['id','firstname', 'lastname', 'email'], 'required'], //ใส่ต้องการ field ไหนที่ไม่ให้เป็นช่องว่าง
            [['id'], 'integer'],
            [['address'], 'string'],
            [['firstname', 'lastname', 'email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'address' => 'ที่อยู่',
            'email' => 'Email',
        ];
    }
}
