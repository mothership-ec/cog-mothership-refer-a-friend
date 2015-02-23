<?php

namespace Message\Mothership\ReferAFriend\Bootstrap;

use Message\Cog\Bootstrap\RoutesInterface;

class Routes implements RoutesInterface
{
	public function registerRoutes($router)
	{
		$router['ms.cp.refer_a_friend']->setParent('ms.cp')->setPrefix('/refer-a-friend');
		$router['ms.cp.refer_a_friend']->add('ms.cp.refer_a_friend.dashboard', '/', 'Message:Mothership:ReferAFriend::Controller:Dashboard#index');
		$router['ms.cp.refer_a_friend']->add('ms.cp.refer_a_friend.createAction', '/create', 'Message:Mothership:ReferAFriend::Controller:Create#createAction')
			->setMethod('POST')
		;
		$router['ms.cp.refer_a_friend']->add('ms.cp.refer_a_friend.create', '/create', 'Message:Mothership:ReferAFriend::Controller:Create#create');
		$router['ms.cp.refer_a_friend']->add('ms.cp.refer_a_friend.setOptionsAction', '/options/{type}', 'Message:Mothership:ReferAFriend::Controller:Create#setOptionsAction')
			->setRequirement('type', '[a-z0-9\-_\/]+')
			->setMethod('POST')
		;
		$router['ms.cp.refer_a_friend']->add('ms.cp.refer_a_friend.setOptions', '/options/{type}', 'Message:Mothership:ReferAFriend::Controller:Create#setOptions')
			->setRequirement('type', '[a-z0-9\-_\/]+')
			->setMethod('GET')
		;
	}
}