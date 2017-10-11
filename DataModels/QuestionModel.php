<?php
/**
 * User: wanglongyan
 * Date: 2017/10/9
 * Time: 下午5:25
 */

class QuestionModel
{
    /**
     * @var 问卷问题的类型
     */
    public $type;
    const typeSingleSelect = 0; // 单选
    const typeMultiSelect = 1; // 多选
    const typeInputOptional = 2; // 输入 可空
    const typeInputRequired = 3; // 输入 必填
    const typeEnum = 4; // 枚举


    /**
     * @var 显示的顺序，数字越小，位置越靠前
     */
    public $order;

    /**
     * @var 问题的描述
     */
    public $description;

    /**
     * @var 数组，问题的选项(如果有)
     */
    public $options;

    private function __construct() {
        $this->type = $this::typeSingleSelect;
    }

}