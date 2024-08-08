<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteOrgServiceAssign请求参数结构体
 *
 * @method integer getServiceId() 获取集团服务ID。可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
 * @method void setServiceId(integer $ServiceId) 设置集团服务ID。可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
 * @method integer getMemberUin() 获取委派管理员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置委派管理员Uin。
 */
class DeleteOrgServiceAssignRequest extends AbstractModel
{
    /**
     * @var integer 集团服务ID。可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
     */
    public $ServiceId;

    /**
     * @var integer 委派管理员Uin。
     */
    public $MemberUin;

    /**
     * @param integer $ServiceId 集团服务ID。可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
     * @param integer $MemberUin 委派管理员Uin。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }
    }
}
