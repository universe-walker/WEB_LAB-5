<?php

$comment_rules = [
    "text" => [
        "required"  => true,
        "maxLength" => 5000,
    ],
    "post_id" => [
        "required"   => true,
        "isParseInt" => true,
    ]
];

$comment_messages = [
    "text" => [
        "required" => "Комментарий обязателен",
        "maxLength" => "Комментарий не может быть длинее 5000 символов",
    ],
    "post_id" => [
        "required"  => "Внутренняя ошибка 1",
        "isParseInt" => "Внутренняя ошибка 2",
    ]
];
