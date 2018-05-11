<?php
return array(   //Home配置

    /**
     * --设置模板替换变量
     * __ROOT__ :是系统常量，也是模板替换，但__PUBLIC__只是模板变量，所以不能用__PUBLIC__
     * __ROOT__ :系统目录，如果是weibo目录，则显示 /weibo
     * MODULE_NAME :模板名，如果是Home模板则显示Home，Admin模板则显示Admin……
     * __CSS__ :返回路径/weibo/Public/Home/css
     * __JS__  :返回路径/weibo/Public/Home/js
     * __IMG__ :返回路径/weibo/Public/Home/img
     */
    'TMPL_PARSE_STRING'=>array(     //用于引导文件路径
        '__CSS__'=>__ROOT__.'/Public/'.MODULE_NAME.'/css',  //用于引导CSS文件路径
        '__JS__'=>__ROOT__.'/Public/'.MODULE_NAME.'/js',    //用于引导 JS文件路径
        '__IMG__'=>__ROOT__.'/Public/'.MODULE_NAME.'/img',  //用于引导IMG文件路径
    ),

);