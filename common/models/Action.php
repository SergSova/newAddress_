<?php

    namespace common\models;

    use Yii;
    use yii\behaviors\TimestampBehavior;
    use yii\caching\DbDependency;
    use yii\db\Expression;
    use yii\debug\models\search\Db;
    use yii\helpers\ArrayHelper;
    use yii\web\UploadedFile;

    /**
     * This is the model class for table "nad_action".
     *
     * @property integer $id
     * @property string $title
     * @property string $name
     * @property string $icon
     * @property integer $date_start
     * @property integer $date_end
     * @property string $value
     * @property string $status
     * @property integer $create_at
     * @property integer $update_at
     *
     * @property ActionModel[] $actionModels
     * @property Realty[] $models
     */
    class Action extends \yii\db\ActiveRecord{
        public $dateS;
        public $dateE;

        /**
         * @inheritdoc
         */
        public static function tableName(){
            return 'nad_action';
        }

        public function behaviors(){
            return [
                [
                    'class' => TimestampBehavior::className(),
                    'createdAtAttribute' => 'create_at',
                    'updatedAtAttribute' => 'update_at',
                    'value' => time(),
                ],
            ];
        }


        /**
         * @inheritdoc
         */
        public function rules(){
            return [
                [
                    [
                        'title',
                        'name',
                        'value',
                    ],
                    'required'
                ],
                [
                    [
                        'status'
                    ],
                    'string'
                ],
                [
                    'status',
                    'default',
                    'value' => 'active'
                ],
                [
                    [
                        'date_start',
                        'date_end'
                    ],
                    'integer'
                ],
                [
                    ['title'],
                    'string',
                    'max' => 150
                ],
                [
                    ['name'],
                    'string',
                    'max' => 50
                ],
                [
                    [
                        'icon',
                        'value',
                        'dateS',
                        'dateE',

                    ],
                    'string',
                    'max' => 255
                ],
                [
                    [
                        'dateS',
                    ],
                    'default',
                    'value' => date(DATE_ATOM, 0)
                ],
                [
                    [
                        'dateE',
                    ],
                    'default',
                    'value' => date(DATE_ATOM, strtotime('12-12-2036'))
                ],
                [
                    ['title'],
                    'unique'
                ],
            ];
        }

        public function scenarios(){
            return [
                'default' => [
                    'title',
                    'name',
                    'status',
                    'dateS',
                    'dateE',
                    'value'
                ]
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels(){
            return [
                'id' => 'ID',
                'title' => 'Название',
                'name' => 'Name',
                'icon' => 'Иконка',
                'date_start' => 'Дата начала',
                'date_end' => 'Дата окончания',
                'dateS' => 'Дата начала',
                'dateE' => 'Дата окончания',
                'value' => 'Значение',
                'status' => 'Статус',
                'imgPath' => 'Иконка',
            ];
        }


        /**
         * @return \yii\db\ActiveQuery
         */
        public function getActionModels(){
            return $this->hasMany(ActionModel::className(), ['action_id' => 'id']);
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getModels(){
            return $this->hasMany(Realty::className(), ['id' => 'model_id'])
                        ->viaTable('nad_action_model', ['action_id' => 'id']);
        }

        public function afterFind(){
            $this->dateS = date('m/d/Y', $this->date_start);
            $this->dateE = date('m/d/Y', $this->date_end);

            if($this->date_end <= time() && $this->status == 'active'){
                $this->status = 'inactive';
                if($this->save(false)){
                    Yii::$app->session->addFlash('info', 'акция '.$this->title.' закончилась');
                }
            }
        }

        public function beforeSave($insert){
            $this->date_start = strtotime($this->dateS);
            $this->date_end = strtotime($this->dateE);

            if(!empty($_FILES) && $file = UploadedFile::getInstance($this, 'icon')){
                $basePath = Yii::getAlias('@wwwRoot');
                $fileName = 'img/'.$file->name;
                if(!file_exists($basePath.DIRECTORY_SEPARATOR.$fileName)){
                    $file->saveAs($basePath.DIRECTORY_SEPARATOR.$fileName);
                }
                $this->icon = $fileName;
            }

            return parent::beforeSave($insert);
        }

        /**
         * @return string generate full URL path to icon
         */
        public function getImgPath(){
            return Yii::getAlias('@wwwUrl').DIRECTORY_SEPARATOR.$this->icon;
        }

        /**
         * @return mixed Return caching data
         */
        public static function getAll(){
            return self::getDb()
                       ->cache(function(){
                           return self::find()
                                      ->all();
                       }, 3600 * 24 * 30, new DbDependency(['sql' => 'SELECT MAX(update_at) FROM '.self::tableName()]));
        }
    }
