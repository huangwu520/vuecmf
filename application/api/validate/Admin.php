<?php
/**
 * Created by www.vuecmf.com
 * User: 386196596@qq.com
 * Date: 2019/1/6
 * Time: 22:02
 */
namespace app\api\validate;

use think\Validate;

class Admin extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [];
}