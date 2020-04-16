<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "state_data".
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $state
 * @property string|null $fips
 * @property string|null $cases
 * @property string|null $deaths
 */
class StateData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'state_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'string', 'max' => 10],
            [['state'], 'string', 'max' => 24],
            [['fips'], 'string', 'max' => 4],
            [['cases'], 'string', 'max' => 5],
            [['deaths'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'state' => 'State',
            'fips' => 'Fips',
            'cases' => 'Cases',
            'deaths' => 'Deaths',
        ];
    }
}
