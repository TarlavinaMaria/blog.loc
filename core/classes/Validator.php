<?php

class Validator
{
    protected $errors = [];
    protected $rules_list = ['required', 'min', 'max'];
    protected $messages = [];

    public function validate($data = [], $rules = [])
    {
        foreach ($data as $field_name => $field_value) {
            if (in_array($field_name, array_keys($rules))) {
                // Проверяем правила валидации
                dump($field_name);
            }
        }
        return $this;
    }
}
?>