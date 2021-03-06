<?php
/**
 * Created by www.vuecmf.com
 * User: 386196596@qq.com
 * Date: 2019/06/30
 * Time: 23:11
 */

namespace app\api\validate;

use think\Validate;

class AuthItem extends Validate
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