<?php

/*
 * ╔══╗╔══╗╔╗──╔╗╔═══╗╔══╗╔╗─╔╗╔╗╔╗──╔╗╔══╗╔══╗╔══╗
 * ║╔═╝║╔╗║║║──║║║╔═╗║║╔╗║║╚═╝║║║║║─╔╝║╚═╗║║╔═╝╚═╗║
 * ║║──║║║║║╚╗╔╝║║╚═╝║║╚╝║║╔╗─║║╚╝║─╚╗║╔═╝║║╚═╗──║║
 * ║║──║║║║║╔╗╔╗║║╔══╝║╔╗║║║╚╗║╚═╗║──║║╚═╗║║╔╗║──║║
 * ║╚═╗║╚╝║║║╚╝║║║║───║║║║║║─║║─╔╝║──║║╔═╝║║╚╝║──║║
 * ╚══╝╚══╝╚╝──╚╝╚╝───╚╝╚╝╚╝─╚╝─╚═╝──╚╝╚══╝╚══╝──╚╝
 *
 * @author Tsvira Yaroslav <https://github.com/Yaro2709>
 * @info ***
 * @link https://github.com/Yaro2709/New-Star
 * @Basis 2Moons: XG-Project v2.8.0
 * @Basis New-Star: 2Moons v1.8.0
 */

require 'includes/libs/OpenID/openid.php';

class OpenIDAuth implements externalAuth
{
	private $oidObj	= NULL;

	public function __construct()
	{
		$this->oidObj	= new LightOpenID(PROTOCOL.HTTP_HOST);
		if(!$this->oidObj->mode)
		{
			if(isset($_REQUEST['openid_identifier']))
			{
				$this->oidObj->identity = $_REQUEST['openid_identifier'];
				$this->oidObj->required = array('namePerson/friendly', 'contact/email', 'pref/language');
				$this->oidObj->optional = array('namePerson');

				HTTP::sendHeader('Location', $this->oidObj->authUrl());
				exit;
			} else {
				HTTP::redirectTo('index.php?code=4');
			}
		}
	}

	public function isActiveMode()
	{
		return false;
	}

	public function isValid()
	{
		return $this->oidObj->mode && $this->oidObj->mode != 'cancel';
	}

	public function getAccount()
	{
		$user	= $this->oidObj->getAttributes();
		
		if(!empty($user['contact/email']))
		{
			return $user['contact/email'];
		}
		
		if(!empty($user['namePerson/friendly']))
		{
			return $user['namePerson/friendly'];
		}
		
		if(!empty($user['namePerson']))
		{
			return $user['namePerson'];
		}		
		
		HTTP::redirectTo('index.php?code=4');

		return false;
	}
	
	public function register()
	{
		$uid	= $this->getAccount();
		$user	= $this->oidObj->getAttributes();
		
		if(empty($user['contact/email']))
		{
			HTTP::redirectTo('index.php?code=4');
		}

		$sql	= 'SELECT validationID, validationKey FROM %%USERS_VALID%%
		WHERE universe = :universe AND email = :email;';

		$registerData	= Database::get()->selectSingle($sql, array(
			':universe'	=> Universe::current(),
			':email'	=> $user['contact/email']
		));

		if(!empty($registerData))
		{
			$url	= sprintf('index.php?uni=%s&page=reg&action=valid&i=%s&validationKey=%s',
				Universe::current(), $registerData['validationID'], $registerData['validationKey']);

			HTTP::redirectTo($url);
		}

		$sql	= 'INSERT INTO %%USERS_AUTH%% SET
		id = (SELECT id FROM %%USERS%% WHERE email = :email OR email_2 = :email),
		account = :accountId
		mode = :mode;';

		Database::get()->insert($sql, array(
			':email'		=> $user['contact/email'],
			':accountId'	=> $uid,
			':mode'			=> $this->oidObj->identity,
		));
	}

	public function getLoginData()
	{
		$user	= $this->oidObj->getAttributes();

		$sql	= 'SELECT
		user.id, user.username, user.dpath, user.authlevel, user.id_planet
		FROM %%USERS_AUTH%%
		INNER JOIN %%USERS%% user ON auth.id = user.id AND user.universe = :universe
		WHERE auth.account = :email AND mode = :mode;';
		
		return Database::get()->select($sql, array(
			':universe'	=> Universe::current(),
			':email'	=> $user['contact/email'],
			':mode'		=> $this->oidObj->identity
		));
	}

	public function getAccountData()
	{
		$user	= $this->oidObj->getAttributes();

		return array(
			'id'		=> $user['contact/email'],
			'name'		=> $this->getAccount(),
			'locale'	=> $user['pref/language']
		);
	}
}