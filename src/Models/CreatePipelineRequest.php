<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelineRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $pipeline;

    /**
     * @var string
     */
    public $userPk;
    protected $_name = [
        'orgId'    => 'OrgId',
        'pipeline' => 'Pipeline',
        'userPk'   => 'UserPk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->pipeline) {
            $res['Pipeline'] = $this->pipeline;
        }
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Pipeline'])) {
            $model->pipeline = $map['Pipeline'];
        }
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }

        return $model;
    }
}
