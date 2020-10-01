<?php

namespace Espl\UserModel\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class User extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('users_data', 'id');
    }
}