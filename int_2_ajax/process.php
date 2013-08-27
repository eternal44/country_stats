<?php

include_once("connection.php");

class Process
{

	var $connection;

    public function __construct()
    {
        $this->pick_country();
    }

	function pick_country()
	{
        $query = "SELECT * FROM Country WHERE name= '{$_POST['pick_country']}'";
		$this->connection = new Database();
        $country = $this->connection->fetch_all($query);
        
        if($country>0)
        {

            $html = 
            '
                <div>Country: '. $country[0]['Name'] .'</div>
                <div>Continent: '. $country[0]['Continent'] .'</div>
                <div>Region: '. $country[0]['Region'] .'</div>
                <div>Population: '. number_format($country[0]['Population']) .'</div>
                <div>Life Expectancy: '. $country[0]['LifeExpectancy'] .' years</div>
                <div>Government Form: '. $country[0]['GovernmentForm'] .'</div>
            ';

            $data['results'] = $html;
        }
            echo json_encode($data);
	}

}//end of process class    
$process = new Process();
?>
