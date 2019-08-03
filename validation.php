<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute是被接受的。',
    'active_url'           => ':attribute必须是一个合法的URL。',
    'after'                => ':attribute必须是:date之后的一个日期。',
    'after_or_equal'       => ':attribute必须是等于:date或在此之后的一个日期。',
    'alpha'                => ':attribute必须全部由字母字符构成。',
    'alpha_dash'           => ':attribute必须全部由字母、数字、中划线或下划线字符构成。',
    'alpha_num'            => ':attribute必须全部由字母和数字构成。',
    'array'                => ':attribute必须是个数组。',
    'before'               => ':attribute必须是:date之前的一个日期。',
    'before_or_equal'      => ':attribute必须是等于:date或在此之前的一个日期。',
    'between' => [
        'numeric' => ':attribute必须在:min到:max之间。',
        'file'    => ':attribute必须在:min到:maxKB之间。',
        'string'  => ':attribute必须在:min到:max个字符之间。',
        'array'   => ':attribute必须在:min到:max项之间。',
    ],
    'boolean'              => ':attribute字符必须是true或false。',
    'confirmed'            => ':attribute二次确认不匹配。',
    'date'                 => ':attribute必须是一个合法的日期。',
    'date_equals'          => ':attribute必须是等于:date的一个日期。',
    'date_format'          => ':attribute与给定的格式:format不符合。',
    'different'            => ':attribute必须不同于:other。',
    'digits'               => ':attribute必须是:digits位。',
    'digits_between'       => ':attribute必须在:min和:max位之间。',
    'dimensions'           => ':attribute是无效的图片尺寸。.',
    'distinct'             => ':attribute字段有重复的值。',
    'email'                => ':attribute必须是一个合法的电子邮件地址。',
    'ends_with'            => ':attribute必须是以:values结尾。',
    'exists'               => '选定的:attribute是无效的。',
    'file'                 => ':attribute必须是一个文件。',
    'filled'               => ':attribute字段是必填的。',
    'gt' => [
        'numeric' => ':attribute必须大于:value.',
        'file' => ':attribute文件必须大于:valueKB',
        'string' => ':attribute字符串必须大于:value',
        'array' => ':attribute数组必须有:value项',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image'                => ':attribute 必须是一个图片 (jpeg, png, bmp 或者 gif)',
    'in'                   => '选定的 :attribute 是无效的',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute 必须是个整数',
    'ip'                   => ':attribute 必须是一个合法的 IP 地址。',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute 的最大长度为 :max 位',
        'file'    => ':attribute 的最大为 :max',
        'string'  => ':attribute 的最大长度为 :max 字符',
        'array'   => ':attribute 的最大个数为 :max 个',
    ],
    'mimes'                => ':attribute 的文件类型必须是:values',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute 的最小长度为 :min 位',
        'string'  => ':attribute 的最小长度为 :min 字符',
        'file'    => ':attribute 大小至少为:min KB',
        'array'   => ':attribute 至少有 :min 项',
    ],
    'not_in'               => '选定的 :attribute 是无效的',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric'              => ':attribute 必须是数字',
    'present' => 'The :attribute field must be present.',
    'regex'                => ':attribute 格式是无效的',
    'required'             => ':attribute 字段必须填写',
    'required_if'          => ':attribute 字段是必须的当 :other 是 :value',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute 字段是必须的当 :values 是存在的',
    'required_with_all'    => ':attribute 字段是必须的当 :values 是存在的',
    'required_without'     => ':attribute 字段是必须的当 :values 是不存在的',
    'required_without_all' => ':attribute 字段是必须的当 没有一个 :values 是存在的',
    'same'                 => ':attribute 和 :other 必须匹配',
    'size' => [
        'numeric' => ':attribute 必须是 :size 位',
        'file'    => ':attribute 必须是 :size KB',
        'string'  => ':attribute 必须是 :size 个字符',
        'array'   => ':attribute 必须包括 :size 项',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone'             => ':attribute 必须个有效的时区',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url'                  => ':attribute 无效的格式',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
