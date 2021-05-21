<?php

namespace App\Http\Requests;


trait WithHtmlAttributes
{
    public function htmlAttributes()
    {
        return (object) $this->formatRules()->toArray();
    }

    public function formatRules()
    {
        $htmlAttributes = collect($this->rules())->map(function ($field) {
            $rules = explode('|', $field);

            return array_map(function ($rule) {
                $ruleArray = explode(':', $rule);

                $ruleName = $ruleArray[0];
                $ruleValue = array_key_exists(1, $ruleArray) ? $ruleArray[1] : null;

                if (method_exists($this, $ruleName)) {
                    return $this->$ruleName($ruleValue);
                }
            }, $rules);
        });

        return $htmlAttributes;
    }

    public function required($param)
    {
        $param = "required";

        return "required={$param}";
    }

    public function min($param)
    {
        return "min={$param}";
    }
}
