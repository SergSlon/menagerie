<?php

namespace m {
	ki::queue('m-init',function(){

	});
	
	ki::queue('m-config',function(){

		option::set('m-database',array(
			'default' => array(
				'hostname' => 'localhost',
				'username' => 'username',
				'password' => 'password',
				'database' => 'database'
			)
		));

	});
}

?>