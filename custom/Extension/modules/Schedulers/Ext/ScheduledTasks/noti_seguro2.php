<?php
    //add the job key to the list of job strings
    array_push($job_strings, 'noti_seguro2');

    function noti_seguro2()
    {
    	// Busca seguros proximos a vencer de Leasing
		$next60days = date('Y-m-d', strtotime("+60 days"));
		$beanQuery = BeanFactory::newBean('tct02_Resumen');
		$sugarQueryOP = new SugarQuery();
		$sugarQueryOP->select(array('id', 'name', 'vencimiento_seguro_futuro_c'));
		$sugarQueryOP->from($beanQuery);
		$sugarQueryOP->where()->equals('vencimiento_seguro_futuro_c',$next60days);
		$resultOP = $sugarQueryOP->execute();
		$countOP = count($resultOP);
		for($current=0; $current < $countOP; $current++)
		{
			//Obtiene valores del cliente
			$beanAcct = BeanFactory::retrieveBean('Accounts', $resultOP[$current]['id']);
			$persona = $beanAcct->name;
			//Crea Notificacion
			$notification_bean = BeanFactory::getBean("Notifications");
			$notification_bean->name = 'Renovación de Seguro de '.$persona;
			$notification_bean->description = 'El seguro de '.$persona.' vencerá dentro de 2 meses.';
			$notification_bean->parent_id = $resultOP[$current]['id'];
			$notification_bean->parent_type = 'Accounts';
			$notification_bean->assigned_user_id = $beanAcct->user_id_c;
			$notification_bean->severity = "alert";
			$notification_bean->is_read = 0;
			$notification_bean->save();
		}
    	// Busca seguros proximos a vencer de CA
		$beanQuery = BeanFactory::newBean('tct02_Resumen');
		$sugarQueryOP = new SugarQuery();
		$sugarQueryOP->select(array('id', 'name', 'vencimiento_seguro_futuro_ca_c'));
		$sugarQueryOP->from($beanQuery);
		$sugarQueryOP->where()->equals('vencimiento_seguro_futuro_ca_c',$next60days);
		$resultOP = $sugarQueryOP->execute();
		$countOP = count($resultOP);
		for($current=0; $current < $countOP; $current++)
		{
			//Obtiene valores del cliente
			$beanAcct = BeanFactory::retrieveBean('Accounts', $resultOP[$current]['id']);
			$persona = $beanAcct->name;
			//Crea Notificacion
			$notification_bean = BeanFactory::getBean("Notifications");
			$notification_bean->name = 'Renovación de Seguro de '.$persona;
			$notification_bean->description = 'El seguro de '.$persona.' vencerá dentro de 2 meses.';
			$notification_bean->parent_id = $beanAcct->id;
			$notification_bean->parent_type = 'Accounts';
			$notification_bean->assigned_user_id = $beanAcct->user_id2_c;
			$notification_bean->severity = "alert";
			$notification_bean->is_read = 0;
			$notification_bean->save();
		}
      return true;
    }