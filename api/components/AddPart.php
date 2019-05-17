<?php

namespace api\components;


use common\models\Participation;

/**
 * Extend Active Controller.  All controllers for the API should extend from here.
 */
class AddPart
{
    public static function NewPart(Participation $model)
    {
        $model->idHost = md5(microtime(true));
        $model->nature = Participation::NATURE;
    }

}