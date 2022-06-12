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

    'accepted' => ': 属性必须被接受。',
    'accepted_if' => '当 :other 是 :value 时必须接受 :attribute。',
    'active_url' => ':attribute 不是有效的 URL。',
    'after' => ':attribute 必须是 :date 之后的日期。',
    'after_or_equal' => ':attribute 必须是晚于或等于 :date 的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 只能包含字母和数字。',
    'array' => ':attribute 必须是一个数组。',
    'before' => ':attribute 必须是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必须是早于或等于 :date 的日期。',
    'between' => [
        'array' => ':attribute 必须介于 :min 和 :max 项之间。',
        'file' => ':attribute 必须介于 :min 和 :max 千字节之间。',
        'numeric' => ':attribute 必须介于 :min 和 :max 之间。',
        'string' => ':attribute 必须介于 :min 和 :max 个字符之间。',
    ],
    'boolean' => ':attribute 字段必须为真或假。',
    'confirmed' => ':attribute 确认不匹配。',
    'current_password' => '密码不正确',
    'date' => ':attribute 不是一个有效的日期。',
    'date_equals' => ':attribute 必须是等于 :date 的日期。',
    'date_format' => ':attribute 与格式 :format 不匹配。',
    'declined' => ': 属性必须被拒绝。',
    'declined_if' => '当 :other 为 :value 时，必须拒绝 :attribute。',
    'different' => ':attribute 和 :other 必须不同。',
    'digits' => ': 属性必须是 :digits 数字。',
    'digits_between' => ': 属性必须介于 :min 和 :max 位数之间。',
    'dimensions' => ':attribute 的图像尺寸无效。',
    'distinct' => ':attribute 字段有重复值。',
    'email' => ':attribute 必须是有效的电子邮件地址。',
    'ends_with' => ':attribute 必须以下列之一结尾: :values.',
    'enum' => '选择的:属性无效。',
    'exists' => '选中的:属性无效。',
    'file' => ':attribute 必须是一个文件。',
    'filled' => ':attribute 字段必须有值。',
    'gt' => [
        'array' => ':attribute 必须有多个 :value 项。',
        'file' => ':attribute 必须大于 :value 千字节。',
        'numeric' => ':attribute 必须大于 :value.',
        'string' => ':attribute 必须大于 :value 个字符。',
    ],
    'gte' => [
        'array' => ':attribute 必须有 :value 项或更多。',
        'file' => ':attribute 必须大于或等于 :value 千字节。',
        'numeric' => ':attribute 必须大于等于 :value.',
        'string' => ':attribute 必须大于等于 :value 个字符。',
    ],
    'image' => ':attribute 必须是图像。',
    'in' => '选择的:属性无效。',
    'in_array' => ':other 中不存在 :attribute 字段。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必须是有效的 IP 地址。',
    'ipv4' => ':attribute 必须是有效的 IPv4 地址。',
    'ipv6' => ':attribute 必须是有效的 IPv6 地址。',
    'json' => ':attribute 必须是有效的 JSON 字符串。',
    'lt' => [
        'array' => ':attribute 必须有小于 :value 的项。',
        'file' => ':attribute 必须小于 :value 千字节。',
        'numeric' => ':attribute 必须小于 :value.',
        'string' => ':attribute 必须小于 :value 个字符。',
    ],
    'lte' => [
        'array' => ':attribute 不能有超过 :value 的项。',
        'file' => ':attribute 必须小于或等于 :value 千字节。',
        'numeric' => ':attribute 必须小于或等于 :value.',
        'string' => ':attribute 必须小于等于 :value 个字符。',
    ],
    'mac_address' => ':attribute 必须是有效的 MAC 地址。',
    'max' => [
        'array' => ': 属性不能超过 :max 项。',
        'file' => ':attribute 不能大于 :max 千字节。',
        'numeric' => ':attribute 不能大于 :max.',
        'string' => ':attribute 不能大于 :max 个字符。',
    ],
    'mimes' => ':attribute 必须是文件类型: :values.',
    'mimetypes' => ':attribute 必须是文件类型: :values.',
    'min' => [
        'array' => ':attribute 必须至少有 :min 个项目。',
        'file' => ':attribute 必须至少为 :min 千字节。',
        'numeric' => ':attribute 必须至少为 :min.',
        'string' => ':attribute 必须至少为 :min 个字符。',
    ],
    'multiple_of' => ':attribute 必须是 :value 的倍数。',
    'not_in' => '选择的:属性无效',
    'not_regex' => ':attribute 格式无效。',
    'numeric' => ':attribute 必须是数字。',
    'present' => ':attribute 字段必须存在。',
    'prohibited' => ':attribute 字段被禁止。',
    'prohibited_if' => '当 :other 为 :value 时，禁止 :attribute 字段。',
    'prohibited_unless' => '禁止使用 :attribute 字段，除非 :other 在 :values 中。',
    'prohibits' => ':attribute 字段禁止 :other 出现。',
    'regex' => ':attribute 格式无效。',
    'required' => ':attribute 字段是必需的。',
    'required_array_keys' => ':attribute 字段必须包含: :values 的条目。',
    'required_if' => '当 :other 是 :value 时需要 :attribute 字段。',
    'required_unless' => ':attribute 字段是必需的，除非 :other 在 :values 中。',
    'required_with' => '当存在 :values 时需要 :attribute 字段。',
    'required_with_all' => '当 :values 存在时 :attribute 字段是必需的。',
    'required_without' => '当 :values 不存在时 :attribute 字段是必需的。',
    'required_without_all' => '当不存在任何 :value 时，需要 :attribute 字段。',
    'same' => ':attribute 和 :other 必须匹配。',
    'size' => [
        'array' => ':attribute 必须包含 :size 项。',
        'file' => ':attribute 必须是 :size 千字节。',
        'numeric' => ':attribute 必须是 :size.',
        'string' => ':attribute 必须是 :size 个字符。',
    ],
    'starts_with' => ':attribute 必须以下列之一开头: :values.',
    'string' => ':attribute 必须是字符串。',
    'timezone' => ':attribute 必须是有效的时区。',
    'unique' => ':attribute 已经被占用。',
    'uploaded' => ':attribute 上传失败。',
    'url' => ':attribute 必须是有效的 URL。',
    'uuid' => ':attribute 必须是有效的 UUID。',

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
