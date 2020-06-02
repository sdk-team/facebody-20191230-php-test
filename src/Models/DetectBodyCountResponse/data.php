<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\facebody\V20191230\Models\DetectBodyCountResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'personNumber' => 'PersonNumber',
    ];
    public function validate() {
        Model::validateRequired('personNumber', $this->personNumber, true);
    }
    public function toMap() {
        $res = [];
        $res['PersonNumber'] = $this->personNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PersonNumber'])){
            $model->personNumber = $map['PersonNumber'];
        }
        return $model;
    }
    /**
     * @description personNumber
     * @var integer
     */
    public $personNumber;

}
