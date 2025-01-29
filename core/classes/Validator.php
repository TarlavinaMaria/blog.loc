<?php

class Validator
{
    protected $errors = [];
    protected $validators_list = ['required', 'min', 'max'];
    protected $messages = [
        'required' => 'The :fieldname field is required',
        'min' => 'The :fieldname field must be a minimum of :rule_value characters',
        'max' => 'The :fieldname field must be a maximum of :rule_value characters'
    ];

    public function validate($data = [], $rules = [])
    {
        foreach ($data as $field_name => $field_value) {
            // Проверяем наличие правил валидации. Нужно ли валидировать поле
            if (in_array($field_name, array_keys($rules))) {
                // Проверяем правила валидации
                $this->checkField([
                    'fieldname' => $field_name,
                    'value' => $field_value,
                    'rules' => $rules[$field_name]
                ]);
            }
        }
        // dump($this->errors);
        return $this;
    }
    protected function checkField($field)
    {
        foreach ($field['rules'] as $rule => $rule_value) {
            // Проверяем наличие правил валидации
            if (in_array($rule, $this->validators_list)) {
                // Проверяем правила валидации
                if (!call_user_func_array([$this, $rule], [$field['value'], $rule_value])) {
                    $err_str = str_replace(
                        // Функция str_replace() выполняет замену в строке
                        [':fieldname', ':rule_value'],
                        [$field['fieldname'], $rule_value],
                        $this->messages[$rule]
                    );
                    $this->addError($field['fieldname'], $err_str);
                }
            }
        }
    }
    protected function addError($fieldname, $error)
    {
        $this->errors[$fieldname][] = $error;
    }
    protected function required($value)
    {
        return !empty(trim($value));
    }
    protected function min($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') >= $rule_value;
    }
    protected function max($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') <= $rule_value;
    }
    public function hasErrors()
    {
        return !empty($this->errors);
    }
    public function listErrors($field_name)
    {
        $errors_list = '';
        if (isset($this->errors[$field_name])) {
            $errors_list .= '<div class="invalid-feedback d-block"><ul class="list-unstyled">';
            foreach ($this->errors[$field_name] as $err) {
                $errors_list .= "<li>{$err}</li>";
            }
            $errors_list .= '</ul></div>';
        }
        return $errors_list;
    }
}
?>