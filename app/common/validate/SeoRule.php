<?php
/**
 * JYmusic音乐管理系统
 *
 * @version     2.0
 * @author      战神~~巴蒂 [jyuucn@163.com]
 * @license     http://jyuu.cn [未经授权严禁私自出售，否者承担法律责任]
 * @copyright   2014 - 2017 JYmusic
 */

namespace app\common\validate;

use think\Validate;

/**
 * 标签验证器
 * @package Channel
 */
class SeoRule extends Validate
{
    //验证规则
    protected $rule = [
        'title' => 'require|max:200|unique:SeoRule',
        'module' => 'require|max:18',
        'controller' => 'require|max:18',
        'action' => 'require|max:18',
        'title_rule'   => 'require|max:200',
        'keywords_rule' => 'require|max:300',
        'description_rule' => 'require|max:300',
    ];

    //提示信息
    protected $message  = [
        'title.require'  => '规则标题不能为空',
        'title.max'      => '规则标题最大长度200个字符',
        'title.unique'      => '规则标题已存在',
        'title_rule.require'   => '标题规则不能为空',
        'title_rule.max'   => '标题规则最大长度200个字符',
        'module.require'  => '所属模块不能为空',
        'module.max'      => '所属模块最大长度18个字符',
        'controller.require'  => '所属控制器不能为空',
        'controller.max'      => '所属控制器最大长度18个字符',
        'action.require'  => '所属操作不能为空',
        'action.max'      => '所属操作最大长度18个字符',
        'keywords_rule.require'   => '关键字规则不能为空',
        'keywords_rule.max'   => '关键字规则最大长度200个字符',
        'description_rule.require'   => '描述规则不能为空',
        'description_rule.max'   => '描述规则最大长度200个字符',
    ];

    protected $scene = [
        'edit'  =>  [
            'title'=>'require|max:200',
            'module' => 'require|max:18',
            'controller' => 'require|max:18',
            'action' => 'require|max:18',
            'title_rule'   => 'require|max:200',
            'keywords_rule' => 'require|max:300',
            'description_rule' => 'require|max:300',
        ]
    ];
}
