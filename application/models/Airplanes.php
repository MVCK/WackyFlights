<?php

/**
 * Airplane model represents a plane in our airplane
 *
 * @author clint
 */
class Airplanes extends CI_Model
{
    var $data = array(
        '1'	 => array('id' => '101', 'planeName' => 'Caravan','manufacturer'	 => 'Cessna',
            'model'	 => 'Grand Caravan EX', 'price' => '2300', 'seats' => '14', 'reach' => '1689',
            'cruise' => '340', 'takeoff' => '660', 'hourly' => '389'),
        '2'	 => array('id'	 => '121', 'planeName' => 'Citation', 'manufacturer'	 => 'Cessna',
            'model'	 => 'Citation M2', 'price' => '3200', 'seats' => '7', 'reach' => '1550',
            'cruise' => '748', 'takeoff' => '978', 'hourly' => '1122'),
    );

    /*
     * Constructor for the airplane model
     */
    public function __construct()
    {
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->data as $key => $record)
        {
            $record['key'] = $key;
            $this->data[$key] = $record;
        }
    }

    /*
     * Retrieve a single airplane, null if not found
     */
    public function get($which)
    {
        foreach($this->data as $key => $value)
        {
            if($value['id'] == $which)
            {
                return $value;
            }
        }
        foreach($this ->data as $key => $value){

            if($value['planeName'] == $which)
            {
                return $value;
            }
        }
        return null;
        //return !isset($this->data[0][]) ? null : $this->data[$which];
    }

    /*
     * Retrieve all of the airplanes
     */
    public function all()
    {
        return $this->data;
    }

}
