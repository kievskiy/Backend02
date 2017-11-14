<?
$orgs = [
    'org1' => [
        'worker1' => ['name' => 'Jone',
            'age' => '22'],
        'worker2' => ['name' => 'Jone',
            'age' => '22'],
        'worker3' => ['name' => 'Jone',
            'age' => '22'],
        'worker4' => ['name' => 'Jone',
            'age' => '22']
    ]
];
//$array(“1”=>”1”,”2”=>”2”,3=>3);
echo 'Name '.$orgs['org1']['worker1']['name'].' age '.$orgs['org1']['worker1']['age']
?>