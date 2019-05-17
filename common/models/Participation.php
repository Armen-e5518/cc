<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "participation".
 *
 * @property int $id
 * @property string $grille
 * @property double $coeff
 * @property int $uniteBase
 * @property int $flash true or false
 * @property int $numParty
 * @property string $idRemote
 * @property string $date
 * @property string $numCollector
 * @property int $status
 * @property string $state
 * @property string $idHost
 * @property int $dateSession
 * @property int $session
 * @property int $amount
 * @property int $party
 * @property string $nature
 */
class Participation extends \yii\db\ActiveRecord
{
    const NATURE = 'real';

    const FLASH_IS_ACTIVE = 1;
    const FLASH_IS_NOT_ACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'participation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['coeff'], 'number'],
            [['uniteBase', 'flash', 'numParty', 'status', 'dateSession', 'session', 'amount', 'party'], 'integer'],
            [['date'], 'safe'],
            [['grille', 'idRemote', 'numCollector', 'state', 'idHost', 'nature'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grille' => 'Grille',
            'coeff' => 'Coeff',
            'uniteBase' => 'Unite Base',
            'flash' => 'Flash',
            'numParty' => 'Num Party',
            'idRemote' => 'Id Remote',
            'date' => 'Date',
            'numCollector' => 'Num Collector',
            'status' => 'Status',
            'state' => 'State',
            'idHost' => 'Id Host',
            'dateSession' => 'Date Session',
            'session' => 'Session',
            'amount' => 'Amount',
            'party' => 'Party',
            'nature' => 'Nature',
        ];
    }
}
