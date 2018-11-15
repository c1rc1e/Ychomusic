<?php

/** */
$rootPath = get_document_root();

return [
    // 应用调试模式
    'view_replace_str'  =>  [
        '__PUBLIC__'=> $rootPath . '/public',
        '__STATIC__'=> $rootPath . '/public/static',
        '__LIBS__'  => $rootPath . '/public/static/libs',
    ],
];
