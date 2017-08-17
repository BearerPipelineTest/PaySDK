<?php
namespace Yurun\PaySDK\AlipayFTF\Params;

use \Yurun\PaySDK\Traits\JSONParams;

class ExtendParams
{
	use JSONParams;

	/**
	 * 系统商编号，该参数作为系统商返佣数据提取的依据，请填写系统商签约协议的PID
	 * @var string
	 */
	public $sys_service_provider_id;

	public function toString()
	{
		if(null === $this->sys_service_provider_id)
		{
			return null;
		}
		return parent::toString();
	}
}