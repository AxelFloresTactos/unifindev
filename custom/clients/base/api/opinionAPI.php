<?php
/**
 * @author: JSR
 * @date: 14/04/2016
 * @comments: Rest API to display countries list
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once("custom/Levementum/UnifinAPI.php");
class opinionAPI extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'opinionAPI' => array(
                'reqType' => 'GET',
                'path' => array('opinionAPI'),
                'pathVars' => array(''),
                'method' => 'getOpinionList',
                'shortHelp' => 'Obtiene la lista de tipos de opinion de CRM',
            ),
        );
    }


    public function getOpinionList($api, $args)
    {
        try
        {
			
			//JSR Prueba para leer listas de sugar
			global $app_list_strings;

			$list = array();
			if (isset($app_list_strings['Opinion_Ref_list']))
			{
				$list = $app_list_strings['Opinion_Ref_list'];
			} 
			
			$GLOBALS['log']->fatal(__CLASS__ . "->" . __FUNCTION__ . " <".$current_user->user_name."> : lista " . print_r($list, true));
	
				/*
				 $new_list = array();
                foreach ($list as $aList) {
                    //$GLOBALS['log']->fatal(" <".$current_user->user_name."> :$aTeam->name : $aTeam->id");
					 $valores = explode(":", $aList);
                    $new_list[] = $valores[0];
					//$GLOBALS['log']->fatal(__CLASS__ . "->" . __FUNCTION__ . " <".$current_user->user_name."> : lista " . print_r($aList, true));
					$GLOBALS['log']->fatal(__CLASS__ . "->" . __FUNCTION__ . " <".$current_user->user_name."> : lista " . print_r($valores[0], true));
                }
				*/
				
            return $list;

        }catch (Exception $e){
            error_log(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> : Error: ".$e->getMessage());
            $GLOBALS['log']->fatal(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> : Error ".$e->getMessage());
        }

    }

}


