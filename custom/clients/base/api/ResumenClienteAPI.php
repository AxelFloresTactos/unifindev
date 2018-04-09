<?php
/**
 * Created by PhpStorm.
 * User: salvadorlopez, AF
 * Date: 29/01/18
 * Time: 15:54
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ResumenClienteAPI extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'GetResumen' => array(
                //request type
                'reqType' => 'GET',
                //set authentication
                'noLoginRequired' => true,
                //endpoint path
                'path' => array('ResumenCliente', '?'),
                //endpoint variables
                'pathVars' => array('name', 'id'),
                //method to call
                'method' => 'getResumenPersona',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'An example of a GET endpoint',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
        );
    }

    /**
     * Method to be used for my MyEndpoint/GetExample endpoint
     */
    public function getResumenPersona($api, $args)
    {
        //Recupera Cliente
        $id_cliente = $args['id'];
        $beanPersona = BeanFactory::getBean("Accounts", $id_cliente);

        //Obtiene variables globales
        global $app_list_strings;
        global $current_user;

        //Define colores:
        $Azul = "#21618C";
        $Rojo = "#C0392B";
        $Amarillo = "#F1C40F";
        $Blanco = "#ffffff";

        ############################
        ## Genera estructura default
        $arr_principal = array();
        //colores
        $arr_principal['colores'] = array(
            "azul" => $Azul,
            "rojo" => $Rojo,
            "amarillo" => $Amarillo
        );
        //General
        $arr_principal['general_cliente'] = array(
            "tipo" => "No definido",
            "segmento" => "Sin Segmento",
            "cobranza" => "Sin Clasificar",
            "sector_economico" => "Sin Especificar",
            "grupo_empresarial" => "Sin Grupo empresarial",
            "nivel_satisfaccion" => "Sin Clasificar",
            "color" => $Azul);
        //Leasing
        $arr_principal['leasing'] = array("linea_autorizada" => "",
            "fecha_vencimiento" => "",//más proxima
            "fecha_completa_vencimiento" => "",
            "linea_disponible" => "",
            "potencial" => "",
            "fecha_pago" => "",//mas lejana
            "anexos_activos" => "",
            "anexos_historicos" => "",
            "promotor" => "",
            "color" => "");
        //Factoraje
        $arr_principal['factoring'] = array("linea_autorizada" => "",
            "fecha_vencimiento" => "",
            "fecha_completa_vencimiento" => "",
            "linea_disponible" => "",
            "fecha_pago" => "",
            "anexos_activos" => "",
            "anexos_historicos" => "",
            "promotor" => "",
            "color" => "");
        //Crédito automotriz
        $arr_principal['credito_auto'] = array("linea_autorizada" => "",
            "fecha_vencimiento" => "",
            "fecha_completa_vencimiento" => "",
            "linea_disponible" => "",
            "fecha_pago" => "",
            "anexos_activos" => "",
            "anexos_historicos" => "",
            "promotor" => "",
            "color" => "");
        //Historial de contactos
        $arr_principal['historial_contactos'] = array(
            "ultima_cita" => "",
            "ultima_llamada" => "",
            "citas" => 0,
            "llamadas" => 0,
            "emails" => 0,
            "fecha_completa_cita" => "",
            "fecha_completa_llamada" => "",
            "color" => $Azul
        );
        //Alertas
        $arr_principal['alertas'] = array(
            "color" => $Azul,
            "total" => 0
            //"alerta" => array()
        );

        //String operaciones
        $operaciones_ids = "'".$id_cliente."'";

        ############################
        ## Recupera información de Persona
        ############################
        if($beanPersona){
            //General
            $arr_principal['general_cliente']['tipo'] = $beanPersona->tipo_general_c;
            $arr_principal['general_cliente']['segmento'] = $beanPersona->segmento_c;
            $arr_principal['general_cliente']['cobranza'] = $beanPersona->cobranza_c;
            $arr_principal['general_cliente']['sector_economico'] = $app_list_strings['sectoreconomico_list'][$beanPersona->sectoreconomico_c];
            $arr_principal['general_cliente']['grupo_empresarial'] = $beanPersona->parent_name;
            $arr_principal['general_cliente']['nivel_satisfaccion'] = $app_list_strings['nivel_satisfaccion_list'][$beanPersona->nivel_satisfaccion_c];
            //Promotores
            $arr_principal['leasing']['promotor']=$beanPersona->promotorleasing_c;
            $arr_principal['factoring']['promotor']=$beanPersona->promotorfactoraje_c;
            $arr_principal['credito_auto']['promotor']=$beanPersona->promotorcredit_c;

        }

        ############################
        ## Recupera y procesa operaciones asociadas
        ############################
        if ($beanPersona->load_relationship('opportunities')) {
            //Recupera operaciones
            $relatedBeans = $beanPersona->opportunities->getBeans();

            //Línea autorizada
            $linea_aut_leasing = 0;
            $linea_aut_factoring = 0;
            $linea_aut_credito_aut = 0;

            //Línea disponible
            $linea_disp_leasing = 0;
            $linea_disp_factoring = 0;
            $linea_disp_credito_aut = 0;

            //Fecha de vencimiento
            $vencimiento_leasing;
            $vencimiento_factoring;
            $vencimiento_cauto;

            //Recorre operaciones
            foreach ($relatedBeans as $opps) {

              /**
                *Filtro para operaciones
                * Operación = LÍNEA DE CRÉDITO || tipo_operacion_c = 2
                * Tipo de Solicitud = Línea Nueva || tipo_de_operacion_c = LINEA_NUEVA
              */
              if($opps->tipo_operacion_c == 2 && $opps->tipo_de_operacion_c == "LINEA_NUEVA"){

                //Agrega Operaciones asociadas
                $operaciones_ids .= ",'$opps->id'";
                //Control para leasing
                if ($opps->tipo_producto_c == 1) {
                    $linea_aut_leasing += $opps->monto_c;
                    $linea_disp_leasing += $opps->amount;
                    /* Cambiar por otro cmpo de fecha con valores fecha_estimada_cierre_c*/
                    /*********************************/

                    if(!empty($opps->fecha_estimada_cierre_c)){
                        //Establece fecha de vencimiento
                        $dateVL = $opps->fecha_estimada_cierre_c;
                        $timedateVL = Date($dateVL);

                        //Compara fechas
                        if ($dateVL < $vencimiento_leasing || empty($vencimiento_leasing) ) {
                          $vencimiento_leasing = $dateVL;
                        }

                        //Agrega valores en arreglo de resultados
                        $arr_principal['leasing']['linea_autorizada']=$linea_aut_leasing;
                        $arr_principal['leasing']['fecha_vencimiento']=$vencimiento_leasing;
                        $arr_principal['leasing']['linea_disponible']=$linea_disp_leasing;
                        $arr_principal['leasing']['potencial']="";
                        $arr_principal['leasing']['fecha_pago']="";
                        $arr_principal['leasing']['anexos_activos']="";
                        $arr_principal['leasing']['anexos_historicos']="";
                        //$arr_principal['leasing']['promotor']=$beanPersona->promotorleasing_c;

                        //Logs
                        /*
                        $GLOBALS['log']->fatal($dateVL);
                        $GLOBALS['log']->fatal($vencimiento_leasing);
                        */
                    }
                }

                //Control para factoring
                if ($opps->tipo_producto_c == 4) {
                    $linea_aut_factoring += $opps->monto_c;
                    $linea_disp_factoring += $opps->amount;
                    /* Cambiar por otro cmpo de fecha con valores fecha_estimada_cierre_c*/
                    /*********************************/

                    if(!empty($opps->fecha_estimada_cierre_c)){
                        //Establece fecha de vencimiento
                        $dateVF = $opps->fecha_estimada_cierre_c;
                        //$timedateVL = Date($dateVL);

                        //Compara fechas
                        if ($dateVF < $vencimiento_factoring || empty($vencimiento_factoring) ) {
                          $vencimiento_factoring = $dateVF;
                        }

                        //Agrega valores en arreglo de resultados
                        $arr_principal['factoring']['linea_autorizada']=$linea_aut_factoring;
                        $arr_principal['factoring']['fecha_vencimiento']=$vencimiento_factoring;
                        $arr_principal['factoring']['linea_disponible']=$linea_disp_factoring;
                        $arr_principal['factoring']['fecha_pago']="";
                        $arr_principal['factoring']['anexos_activos']="";
                        $arr_principal['factoring']['anexos_historicos']="";
                        //$arr_principal['factoring']['promotor']=$beanPersona->promotorfactoraje_c;

                        //Logs
                        /*
                        $GLOBALS['log']->fatal($dateVF);
                        $GLOBALS['log']->fatal($vencimiento_factoring);
                        */
                    }
                }

                //Control para crédito auto
                if ($opps->tipo_producto_c == 3) {
                    $linea_aut_credito_aut += $opps->monto_c;
                    $linea_disp_credito_aut += $opps->amount;
                    /* Cambiar por otro cmpo de fecha con valores fecha_estimada_cierre_c*/
                    /*********************************/

                    if(!empty($opps->fecha_estimada_cierre_c)){
                        //Establece fecha de vencimiento
                        $dateVC = $opps->fecha_estimada_cierre_c;
                        //$timedateVL = Date($dateVL);

                        //Compara fechas
                        if ($dateVC < $vencimiento_cauto || empty($vencimiento_cauto) ) {
                          $vencimiento_cauto = $dateVC;
                        }

                        //Agrega valores en arreglo de resultados
                        $arr_principal['credito_auto']['linea_autorizada']=$linea_aut_credito_aut;
                        $arr_principal['credito_auto']['fecha_vencimiento']=$vencimiento_cauto;
                        $arr_principal['credito_auto']['linea_disponible']=$linea_disp_credito_aut;
                        $arr_principal['credito_auto']['fecha_pago']="";
                        $arr_principal['credito_auto']['anexos_activos']="";
                        $arr_principal['credito_auto']['anexos_historicos']="";
                        //$arr_principal['credito_auto']['promotor']=$beanPersona->promotorcredit_c;

                        //Logs
                        /*
                        $GLOBALS['log']->fatal($dateVF);
                        $GLOBALS['log']->fatal($vencimiento_factoring);
                        */
                    }
                }

              }
            }
        }

        ############################
        ## Recupera y procesa reuniones asociadas
        ############################
        if ($beanPersona->load_relationship('meetings')) {
            //Recupera reuniones
            $relatedMeetings = $beanPersona->meetings->getBeans();

            //Procesa si recupera registros
            if ($relatedMeetings) {
                //Establece última fecha de reunión
                $dateUR = $relatedMeetings[0]->date_start;
                $timedateUL = new TimeDate();
                $ultima_reunion = $timedateUL->fromUser($dateUR, $current_user);
                $fecha_completa_reunion = $dateUR;

                //Obtiene total de reuniones
                $total_reuniones = count($relatedMeetings);

                //Recorre reuniones
                foreach ($relatedMeetings as $meeting) {
                    //Obtiene fecha de inicio de reunión
                    $dateFR = $meeting->date_start;
                    $timedateFR = new TimeDate();
                    $fecha_reunion = $timedateFR->fromUser($dateFR, $current_user);

                    //Compara fechas y establece última fecha de reunión
                    if ( $fecha_reunion > $ultima_reunion){
                        $ultima_reunion = $fecha_reunion;
                        $fecha_completa_reunion = $dateFR;
                    }
                }

                //Agrega valores al arreglo de respuesta
                $arr_principal['historial_contactos']['ultima_cita']= $ultima_reunion->format("d/m/Y");
                $arr_principal['historial_contactos']['citas']= $total_reuniones;
                $arr_principal['historial_contactos']['fecha_completa_cita']= $fecha_completa_reunion;
            }
        }

        ############################
        ## Recupera y procesa llamadas asociadas
        ############################
        if ($beanPersona->load_relationship('calls')) {
            //Recupera llamadas
            $relatedCalls = $beanPersona->calls->getBeans();

            //Procesa si recupera registros
            if ($relatedCalls) {
                //Establece última fecha de llamada
                $dateUL = $relatedCalls[0]->date_start;
                $timedateUL = new TimeDate();
                $ultima_llamada = $timedateUL->fromUser($dateUL, $current_user);
                $fecha_completa_llamada = $dateUL;
                //Obtiene total de llamadas
                $total_llamadas = count($relatedCalls);

                //Recorre llamadas
                foreach ($relatedCalls as $call) {
                    //Obtiene fecha de inicio de reunión
                    $dateFL = $call->date_start;
                    $timedateFL = new TimeDate();
                    $fecha_llamada = $timedateFL->fromUser($dateFL, $current_user);

                    //Compara fechas y establece última fecha de llamada
                    if ( $fecha_llamada > $ultima_llamada){
                        $ultima_llamada = $fecha_llamada;
                        $fecha_completa_llamada = $dateFL;

                    }
                }

                //Agrega valores al arreglo de respuesta
                $arr_principal['historial_contactos']['ultima_llamada']= $ultima_llamada->format("d/m/Y");
                $arr_principal['historial_contactos']['llamadas']= $total_llamadas;
                $arr_principal['historial_contactos']['fecha_completa_llamada']= $fecha_completa_llamada;
            }
        }

        ############################
        ## Recupera y procesa emails asociados
        ############################
        if ($beanPersona->load_relationship('archived_emails')) {
            //Recupera llamadas
            $relatedEmails = $beanPersona->archived_emails->getBeans();

            //Procesa si recupera registros
            if ($relatedEmails) {
                //Obtiene total de llamadas
                $total_emails = count($relatedEmails);

                //Agrega valores al arreglo de respuesta
                $arr_principal['historial_contactos']['emails']= $total_emails;
            }
        }

        ############################
        ## Recupera y procesa información de resumen
        ############################
        if($beanPersona){
            //Recupera información de resumen
            $beanResumen = BeanFactory::getBean('tct02_Resumen', $beanPersona->id);

            //Procesa registro
            if($beanResumen){
                //Recupera Leasing
                $arr_principal['leasing']['fecha_pago']= $beanResumen->leasing_fecha_pago;
                $arr_principal['leasing']['anexos_activos']= $beanResumen->leasing_anexos_activos;
                $arr_principal['leasing']['anexos_historicos']= $beanResumen->leasing_anexos_historicos;

                //Recupera Factoring
                $arr_principal['factoring']['fecha_pago']= $beanResumen->factoring_fecha_pago;
                $arr_principal['factoring']['anexos_activos']= $beanResumen->factoring_anexos_activos;
                $arr_principal['factoring']['anexos_historicos']= $beanResumen->factoring_anexos_historicos;

                //Recupera Credito Auto
                $arr_principal['credito_auto']['fecha_pago']= $beanResumen->cauto_fecha_pago;
                $arr_principal['credito_auto']['anexos_activos']= $beanResumen->cauto_anexos_activos;
                $arr_principal['credito_auto']['anexos_historicos']= $beanResumen->cauto_anexos_historicos;
            }
        }

        ############################
        ## Recupera alertas
        ############################
        //Forma petición
        $query = "select * from notifications
        where assigned_user_id='{$current_user->id}'
        and is_read = 0
        and parent_id in ($operaciones_ids)
        order by date_entered asc;";

        //Logs
        //$GLOBALS['log']->fatal($query);

        //Obtiene resultado
        $resultQ = $GLOBALS['db']->query($query);
        $alert_num = 0;

        //Procesa registros recuperados
        while ($row = $GLOBALS['db']->fetchByAssoc($resultQ)) {
          //Recupera alertas y procesa
          $alert_num ++;
          $alerta = array(
            "mensaje"=>$row['description'],
            "prioridad"=>$app_list_strings['notifications_severity_list'][$row['severity']],
            "idNotificacion"=>$row['id'],
            "numero"=>$alert_num
          );
          //Agrega alerta a respuesta de salida
          $arr_principal['alertas']['alerta'][] = $alerta;
        }

        //Agrega total de alertas
        $arr_principal['alertas']['total'] = $alert_num;

        ############################
        ## Establecer color para bloques
        ############################
        //Recupera fecha actual
        $timedate = new TimeDate($current_user);
        $today = $timedate->getNow(true);

        /**
          * Leasing:
          * Si la línea está a dos meses de vencer que se pondrá en amarillo. Si está vencida en rojo
        */
        if( $arr_principal['leasing']['fecha_vencimiento'] != ''){
            //Fecha vencimiento
            $dateFVL = $arr_principal['leasing']['fecha_vencimiento'];
            $dateFVL = str_replace('/', '-', $dateFVL);
            $dateFVL = date('Y-m-d', strtotime($dateFVL));

            //Calcula diferencia
            $current_date = new DateTime($today->format("Y-m-d"));
            $fecha_VL = new DateTime($dateFVL);

            $diferencia = $current_date->diff($fecha_VL);
            $meses = ( $diferencia->y * 12 ) + $diferencia->m;

            //Logs
            /*
            $GLOBALS['log']->fatal('Valida fechas Leasign');
            // $GLOBALS['log']->fatal($current_date);
            // $GLOBALS['log']->fatal($fecha_VL);
            $GLOBALS['log']->fatal($meses);
            */

            //Rojo
            if($fecha_VL < $current_date ) {
                $arr_principal['leasing']['color']=$Rojo;
            }
            //amarillo
            if($fecha_VL > $current_date && $meses <= 2) {
                $arr_principal['leasing']['color']=$Amarillo;

            }

        }

        /**
          * Factoring:
          * Si la línea está a dos meses de vencer que se pondrá en amarillo. Si está vencida en rojo
        */
        if( $arr_principal['factoring']['fecha_vencimiento'] != ''){
            //Fecha vencimiento
            $dateFVF = $arr_principal['factoring']['fecha_vencimiento'];
            $dateFVF = str_replace('/', '-', $dateFVF);
            $dateFVF = date('Y-m-d', strtotime($dateFVF));

            //Calcula diferencia
            $current_date = new DateTime($today->format("Y-m-d"));
            $fecha_VL = new DateTime($dateFVF);

            $diferencia = $current_date->diff($fecha_VL);
            $meses = ( $diferencia->y * 12 ) + $diferencia->m;

            //Logs
            /*
            $GLOBALS['log']->fatal('Valida fechas Factoring');
            // $GLOBALS['log']->fatal($current_date);
            // $GLOBALS['log']->fatal($fecha_VL);
            $GLOBALS['log']->fatal($meses);
            */

            //Rojo
            if($fecha_VL < $current_date ) {
                $arr_principal['factoring']['color']=$Rojo;
            }
            //amarillo
            if($fecha_VL > $current_date && $meses <= 2) {
                $arr_principal['factoring']['color']=$Amarillo;

            }

        }

        /**
          * Crédito Auto:
          * Si la línea está a dos meses de vencer que se pondrá en amarillo. Si está vencida en rojo
        */
        if( $arr_principal['credito_auto']['fecha_vencimiento'] != ''){
            //Fecha vencimiento
            $dateFVC = $arr_principal['credito_auto']['fecha_vencimiento'];
            $dateFVC = str_replace('/', '-', $dateFVC);
            $dateFVC = date('Y-m-d', strtotime($dateFVC));

            //Calcula diferencia
            $current_date = new DateTime($today->format("Y-m-d"));
            $fecha_VL = new DateTime($dateFVC);

            $diferencia = $current_date->diff($fecha_VL);
            $meses = ( $diferencia->y * 12 ) + $diferencia->m;

            //Logs
            /*
            $GLOBALS['log']->fatal('Valida fechas Creduti auto');
            // $GLOBALS['log']->fatal($current_date);
            // $GLOBALS['log']->fatal($fecha_VL);
            $GLOBALS['log']->fatal($meses);
            */

            //Rojo
            if($fecha_VL < $current_date ) {
                $arr_principal['credito_auto']['color']=$Rojo;
            }
            //amarillo
            if($fecha_VL > $current_date && $meses <= 2) {
                $arr_principal['credito_auto']['color']=$Amarillo;

            }

        }

        /**
          * Historial de contacto:
          * Amarillo cuando hayan pasado más de 2 meses sin cita/llamada y rojo más de 3 meses.
        */
        if ($arr_principal['historial_contactos']['llamadas'] >= 1 || $arr_principal['historial_contactos']['citas'] >= 1) {
            //Today
            // $timedate = new TimeDate($current_user);
            // $today = $timedate->getNow(true);

            //Última reunión
            $dateFR = $arr_principal['historial_contactos']['fecha_completa_cita'];
            $timedateFR = new TimeDate();
            $fecha_cita = $timedateFR->fromUser($dateFR, $current_user);

            //Última llamada
            $dateFL = $arr_principal['historial_contactos']['fecha_completa_llamada'];
            $timedateFL = new TimeDate();
            $fecha_llamada = $timedateFL->fromUser($dateFL, $current_user);

            //Recupera última fecha de contacto
            $fecha_contacto;
            if ($fecha_llamada > $fecha_cita) {
              $fecha_contacto = $fecha_llamada;
            }else {
              $fecha_contacto = $fecha_cita;
            }
            //Calcula diferencia
            $current_date = new DateTime($today->format("Y-m-d"));
            $fecha_contacto = new DateTime($fecha_contacto->format("Y-m-d"));

            $diferencia = $current_date->diff($fecha_contacto);
            $meses = ( $diferencia->y * 12 ) + $diferencia->m;

            //Asigna color
            if($meses == 2){
                $arr_principal['historial_contactos']['color'] = $Amarillo;
            }
            if ($meses >= 3) {
                $arr_principal['historial_contactos']['color'] = $Rojo;
            }

            //Log
            /*
            $GLOBALS['log']->fatal($today->format("Y-m-d"));
            $GLOBALS['log']->fatal($fecha_contacto->format("Y-m-d"));
            $GLOBALS['log']->fatal($meses);
            */

        }else{
            $arr_principal['historial_contactos']['color'] = $Rojo;
        }


        ############################
        ## Regresa resultado
        // $GLOBALS['log']->fatal('resultado de API:');
        // $GLOBALS['log']->fatal($api->platform);
        //$api->platform;

        return $arr_principal;

    }

}

?>
