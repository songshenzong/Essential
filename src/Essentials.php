<?php

namespace Songshenzong\Essentials;

class Essentials
{

    /**
     * Parameters Validator.
     *
     * @param $payload
     * @param $rules
     *
     * @return mixed
     */
    public function validator($payload, $rules)
    {
        $validator = app('validator') -> make($payload, $rules);

        if ($validator -> fails()) {
            return app('ResponseJson') -> validationHttpException('Validation Exception', $validator -> errors());
        }
    }

    /**
     * Is Set and Not Empty.
     *
     * @param $value
     *
     * @return bool
     */
    public function isSetAndNotEmpty($value)
    {
        if (isset($value) && !empty($value)) {
            return true;
        }

        return false;
    }

    /**
     * Is Set and Not Empty and Not Null.
     *
     * @param $value
     *
     * @return bool
     */
    public function isSetAndNotEmptyAndNotNull($value)
    {
        if (isset($value) && !empty($value) && $value != 'null') {
            return true;
        }
        return false;
    }
}
