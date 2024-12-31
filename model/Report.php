<?php

namespace addons\bbs\model;

use think\Model;

class Report extends Model
{
    protected $name = 'bbs_report';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';

    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    public function user()
    {
        return $this->belongsTo(\app\common\model\User::class, 'user_id', 'id');
    }


}