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

class ShowBonPage extends AbstractGamePage
{
	public static $requireModule = MODULE_BON;

	function __construct() 
	{
		parent::__construct();
	}

	public function UpdateBon($Element)
	{
		global $PLANET, $USER, $reslist, $resource, $pricelist, $LNG, $BonusElement;
		
        $costResources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			
		if ( !BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costResources)) {
			return;
		}
        
        $amount = HTTP::_GP('amount', 0); 
        
        if(TIMESTAMP <= $USER[$resource[$Element]]){
			$this->printMessage(''.$LNG['bd_restart_no'].'', true, array('game.php?page=bon', 2));
		}
        
		$USER[$resource[$Element]]	= max($USER[$resource[$Element]], TIMESTAMP) + ($pricelist[$Element]['time']) * $amount;
        
        $href = 'game.php?page=bon'; 
        require_once('includes/subclasses/subclass.UpdateMaxAmount.php');
        require_once('includes/subclasses/subclass.UpdateResAmount.php');
        $bonus = 1;
        require_once('includes/subclasses/subclass.UpdateSqlBonusElement.php');
		require_once('includes/subclasses/subclass.UpdateSqlGeneral.php');
	}
	
	public function show()
	{
		global $USER, $PLANET, $resource, $reslist, $LNG, $pricelist, $requeriments;
		
		$updateID	  = HTTP::_GP('id', 0);
		
		if (!empty($updateID) && $_SERVER['REQUEST_METHOD'] === 'POST' && $USER['urlaubs_modus'] == 0)
		{
			if(in_array($updateID, $reslist['bon'])) {
				$this->UpdateBon($updateID);
			}
		}
		
		$this->tplObj->loadscript('officier.js');		
		
		$bonList	= array();
		
		if(isModuleAvailable(MODULE_BON)) 
		{
			foreach($reslist['bon'] as $Element)
			{
                if($USER[$resource[$Element]] > TIMESTAMP) {
					$this->tplObj->execscript("GetOfficerTime(".$Element.", ".($USER[$resource[$Element]] - TIMESTAMP).");");
				}
                $bonusElementList   = BuildFunctions::bonusElementList($Element);
				$costResources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
				$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costResources);
				$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costResources);
				$elementBonus		= BuildFunctions::getAvalibleBonus($Element);
				
				$bonList[$Element]	= array(
                    'maxLevel'			=> $pricelist[$Element]['max'],
					'timeLeft'			=> max($USER[$resource[$Element]] - TIMESTAMP, 0),
					'costResources'	    => $costResources,
					'buyable'			=> $buyable,
					'costOverflow'		=> $costOverflow,
					'elementBonus'		=> $elementBonus,
					'AllTech'			=> $bonusElementList,
				);
			}
		}
		
		$this->assign(array(	
			'bonList'	=> $bonList,
		));
		
		$this->display('page.bon.default.tpl');
	}
}
