<?php
return array(   //公共配置
	//设置可访问目录
    'MODULE_ALLOW_LIST'=>array('Home','Admin'),     //允许访问的模块，这里意义是禁止访问Common模块
    //设置默认目录
    'DEFAULT_MODULE'=>'Home',       //在路径中不加入Home也能访问Home模块
    //设置模板后缀
    'TMPL_TEMPLATE_SUFFIX'=>'.tpl',     //View视图模块后缀
    //设置默认主题目录
    'DEFAULT_THEME'=>'Default',     //默认的主题目录，在View文件下的子目录

);