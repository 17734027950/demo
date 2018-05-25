<?PHP
	require_once __DIR__.'/../vendor/autoload.php';


	$pool = new \Sokil\Mongo\ClientPool(array(
	    'connect1' => array(
	        'dsn' => 'mongodb://127.0.0.1',
	        'defaultDatabase' => 'db2',
	        'connectOptions' => array(
	            'connectTimeoutMS' => 1000,
	            'readPreference' => \Sokil\Mongo\MongoClient::RP_PRIMARY,
	        ),
	        'mapping' => array(
	            'db1' => array(
	                'col1' => '\Collection1',
	                'col2' => '\Collection2',
	            ),
	            'db2' => array(
	                'col1' => '\Collection3',
	                'col2' => '\Collection4',
	            )
	        ),
	    ),
	    'connect2' => array(
	        'dsn' => 'mongodb://127.0.0.1',
	        'defaultDatabase' => 'db2',
	        'mapping' => array(
	            'db1' => array(
	                'col1' => '\Collection5',
	                'col2' => '\Collection6',
	            ),
	            'db2' => array(
	                'col1' => '\Collection7',
	                'col2' => '\Collection8',
	            )
	        ),
	    ),
	));

	$connect1Client = $pool->get('connect1');
	$connect2Client = $pool->get('connect2');

	var_dump($connect1Client);