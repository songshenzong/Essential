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
        if (is_array($payload)) {
            $validator = app('validator') -> make($payload, $rules);
        } else {
            $validator = app('validator') -> make($payload -> all(), $rules);
        }

        if ($validator -> fails()) {
            return app('ResponseJson') -> unprocessableEntityException(env('ESSENTIALS_VALIDATOR_MESSAGE', 'Unprocessable Entity'), $validator -> errors());
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
