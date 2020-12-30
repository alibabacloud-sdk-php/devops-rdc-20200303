<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class ListServiceConnectionsRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $scType;

    /**
     * @var string
     */
    public $userPk;
    protected $_name = [
        'orgId'  => 'OrgId',
        'scType' => 'ScType',
        'userPk' => 'UserPk',
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
        if (null !== $this->scType) {
            $res['ScType'] = $this->scType;
        }
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['ScType'])) {
            $model->scType = $map['ScType'];
        }
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }

        return $model;
    }
}
