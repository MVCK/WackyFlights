<?php

/**
 * Airplane model represents a plane in our airplane
 *
 * @author clint
 */
class Airplanes extends CSV_Model
{
    /*
     * Constructor for the airplane model
     */
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/airplanes.csv', 'id');
    }

    public function rules()
    {
        $config = array(
            ['field' => 'planeName', 'label' => 'Plane Name', 'rules' => 'required|alpha_numeric_spaces|min_length[1]|max_length[64]'],
            ['field' => 'manufacturer', 'label' => 'Manufacturer', 'rules' => 'required|alpha_numeric_spaces|min_length[1]|max_length[64]'],
            ['field' => 'model', 'label' => 'Model', 'rules' => 'required|alpha_numeric_spaces|min_length[1]|max_length[64]'],
            ['field' => 'price', 'label' => 'Price', 'rules' => 'required|integer|greater_than[0]'],
            ['field' => 'seats', 'label' => 'Seats', 'rules' => 'required|integer|greater_than[1]'],
            ['field' => 'reach', 'label' => 'Reach', 'rules' => 'required|integer|greater_than[300]'],
            ['field' => 'cruise', 'label' => 'Cruise', 'rules' => 'required|integer|greater_than[300]'],
            ['field' => 'takeoff', 'label' => 'Takeoff', 'rules' => 'required|integer|greater_than[300]'],
            ['field' => 'hourly', 'label' => 'Hourly', 'rules' => 'required|integer|greater_than[300]'],
        );
        return $config;
    }

    public function find($value)
    {
        foreach($this->all() as $plane) {
            foreach($plane as $key => $val) {
                if($value == $val) {
                    return $plane;
                }
            }
        }
        return false;
    }
}
