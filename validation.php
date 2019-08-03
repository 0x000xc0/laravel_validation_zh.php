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
    'dimensions'           => ':attribute是无效的图片尺寸。',
    'distinct'             => ':attribute字段有重复的值。',
    'email'                => ':attribute必须是一个合法的电子邮件地址。',
    'ends_with'            => ':attribute必须是以:values结尾。',
    'exists'               => '选定的:attribute是无效的。',
    'file'                 => ':attribute必须是一个文件。',
    'filled'               => ':attribute字段是必填的。',
    'gt' => [
        'numeric' => ':attribute必须大于:value。',
        'file'    => ':attribute文件的大小必须大于:valueKB。',
        'string'  => ':attribute字符串的长度必须大于:value。',
        'array'   => ':attribute数组的元素个数必须大于:value个。',
    ],
    'gte' => [
        'numeric' => ':attribute必须大于或等于:value。',
        'file'    => ':attribute文件的大小必须大于或等于:valueKB。',
        'string'  => ':attribute字符串的长度必须大于或等于:value。',
        'array'   => ':attribute数组的元素个数必须大于或等于:value个。',
    ],
    'image'                => ':attribute必须是一个图片(jpeg, png, bmp 或者 gif)。',
    'in'                   => '选定的:attribute是无效的。',
    'in_array'             => ':attribute字段不在:other中。',
    'integer'              => ':attribute必须是个整数。',
    'ip'                   => ':attribute必须是一个合法的IP地址。',
    'ipv4'                 => ':attribute必须是一个有效的IPv4地址。',
    'ipv6'                 => ':attribute必须是一个有效的IPv6地址。',
    'json'                 => ':attribute必须是一个有效的JSON字符串。',
    'lt' => [
        'numeric' => ':attribute必须小于:value。',
        'file'    => ':attribute文件的大小必须小于:valueKB。',
        'string'  => ':attribute字符串的长度必须小于:value。',
        'array'   => ':attribute数组的元素个数必须小于:value。',
    ],
    'lte' => [
        'numeric' => ':attribute必须小于或等于:value。',
        'file'    => ':attribute文件的大小必须小于或等于:valueKB。',
        'string'  => ':attribute字符串的长度必须大于或等于:value。',
        'array'   => ':attribute数组的元素个数必须小于或等于:value个',
    ],
    'max' => [
        'numeric' => ':attribute最大为:max。',
        'file'    => ':attribute文件的大小最大为:max。',
        'string'  => ':attribute字符串的最大长度为:max。',
        'array'   => ':attribute数组的元素最大个数为:max个。',
    ],
    'mimes'                => ':attribute的文件类型必须是:values。',
    'mimetypes'            => ':attribute必须是一个::values类型的文件。',
    'min' => [
        'numeric' => ':attribute最小为:min。',
        'file'    => ':attribute文件的大小最少为:minKB。',
        'string'  => ':attribute字符串的最小长度为:min。',
        'array'   => ':attribute数组的元素个数最少为:min个。',
    ],
    'not_in'               => '选定的 :attribute 是无效的。',
    'not_regex'            => ':attribute正则匹配失败。',
    'numeric'              => ':attribute必须是数字。',
    'present'              => ':attribute字段必须出现在输入的数据中。',
    'regex'                => ':attribute正则匹配失败。',
    'required'             => ':attribute字段必须填写。',
    'required_if'          => '当:other字段是:value时，:attribute字段是必须的。',
    'required_unless'      => '除非:other字段是:values，否则:attribute字段是必须的。',
    'required_with'        => '当:values字段任一存在时，:attribute字段是必须的。',
    'required_with_all'    => '当:values字段都存在时，:attribute字段是必须的。',
    'required_without'     => '当:values字段任一不存在时，:attribute字段是必须的。',
    'required_without_all' => '当:values字段都不存在时，:attribute字段是必须的。',
    'same'                 => ':attribute和:other必须匹配。',
    'size' => [
        'numeric' => ':attribute必须是:size。',
        'file'    => ':attribute的文件大小必须为:sizeKB。',
        'string'  => ':attribute字段串的长度必须为:size。',
        'array'   => ':attribute数组元素个数必须为:size个。',
    ],
    'starts_with'          => ':attribute必须以:values开头。',
    'string'               => ':attribute必须是一个字符串。',
    'timezone'             => ':attribute必须是一个个有效的时区。',
    'unique'               => ':attribute已存在。',
    'uploaded'             => ':attribute已上传。',
    'url'                  => ':attribute无效的URL格式。',
    'uuid'                 => ':attribute必须是一个有效的UUID。',

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
