<?php
 // created: 2018-02-16 16:59:03
$dictionary['Opportunity']['fields']['ri_factor_moratorio_c']['labelValue'] = 'Factor (Ratificación)';
$dictionary['Opportunity']['fields']['ri_factor_moratorio_c']['enforced'] = '';
$dictionary['Opportunity']['fields']['ri_factor_moratorio_c']['dependency'] = 'and(equal($tipo_operacion_c,"2"),equal($ratificacion_incremento_c,"1"),equal($tipo_producto_c,"4"))';

