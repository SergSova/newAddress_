<?php

    namespace common\models;

    use Yii;
    use yii\db\ActiveRecord;

    /**
     * This is the model class for table "{{%realty}}".
     *
     * @property integer     $id
     * @property integer     $realty_type_id
     * @property integer     $service_type_id
     * @property integer     $district_id
     * @property integer     $price
     * @property string      $address
     * @property string      $map_coord
     * @property string      $description
     * @property string      $status
     *
     * @property Apartment   $apartment
     * @property House       $house
     * @property RealtyType  $realtyType
     * @property ServiceType $serviceType
     * @property District    $district
     */
    class Realty extends ActiveRecord{
        /**
         * @inheritdoc
         */
        public static function tableName(){
            return '{{%realty}}';
        }

        /**
         * @inheritdoc
         */
        public function rules(){
            return [
                [
                    [
                        'realty_type_id',
                        'service_type_id',
                        'district_id',
                        'price'
                    ],
                    'integer'
                ],
                [
                    [
                        'realty_type_id',
                        'service_type_id',
                        'district_id',
                        'price',
                        'address',
                        'map_coord',
                        'description'
                    ],
                    'required'
                ],
                [
                    [
                        'description',
                        'status'
                    ],
                    'string'
                ],
                [
                    [
                        'address',
                        'map_coord'
                    ],
                    'string',
                    'max' => 255
                ],
                [
                    ['realty_type_id'],
                    'exist',
                    'skipOnError' => true,
                    'targetClass' => RealtyType::className(),
                    'targetAttribute' => ['realty_type_id' => 'id']
                ],
                [
                    ['service_type_id'],
                    'exist',
                    'skipOnError' => true,
                    'targetClass' => ServiceType::className(),
                    'targetAttribute' => ['service_type_id' => 'id']
                ],
                [
                    ['district_id'],
                    'exist',
                    'skipOnError' => true,
                    'targetClass' => District::className(),
                    'targetAttribute' => ['district_id' => 'id']
                ],
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels(){
            return [
                'id' => 'ID',
                'realty_type_id' => 'Realty Type ID',
                'service_type_id' => 'Тип услуги',
                'district_id' => 'Район/направление',
                'price' => 'Цена',
                'address' => 'Адрес',
                'map_coord' => 'Map Coord',
                'description' => 'Описание',
                'status' => 'Статус',
            ];
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getApartment(){
            return $this->hasOne(Apartment::className(), ['realty_id' => 'id']);
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getHouse(){
            return $this->hasOne(House::className(), ['realty_id' => 'id']);
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getRealtyType(){
            return $this->hasOne(RealtyType::className(), ['id' => 'realty_type_id']);
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getServiceType(){
            return $this->hasOne(ServiceType::className(), ['id' => 'service_type_id']);
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getDistrict(){
            return $this->hasOne(District::className(), ['id' => 'district_id']);
        }

        public function afterFind(){
            $this->description = nl2br($this->description);
        }
    }