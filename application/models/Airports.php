<?php

/**
 * This is a model for airport.
 *
 * @author Hansol
 */
class Airport extends CI_Model
{
    // The data comes from https://wacky.jlparry.com/info/airports
    // expressed using long-form array notaiton in case students use PHP 5.x


    var $data = array(
        '1' => array('id' => 'YPK', 'community' => 'Pitt Meadows',
            'airport' => 'Pitt Meadows Airport', 'region' => '2', 'coordinates' => '49\u00b012\u203258\u2033N122\u00b042\u203236\u2033W',
            'runway' => '1524', 'airline' => 'junco'),
        '2' => array('id' => 'YCW', 'community' => 'Chilliwack',
            'airport' => 'Chilliwack Airport', 'region' => '2', 'coordinates' => '49\u00b009\u203210\u2033N121\u00b056\u203220\u2033W',
            'runway' => '1215', 'airline' => 'dove'),
        '3' => array('id' => 'ZMH', 'community' => '108 Mile Ranch',
            'airport' => 'South Cariboo Regional Airport (108 Mile Ranch Airport)', 'region' => '3', 'coordinates' => '51\u00b044\u203210\u2033N121\u00b019\u203258\u2033W',
            'runway' => '1613', 'airline' => 'zipper'),
        '4' => array('id' => 'YYF', 'community' => 'Penticton',
            'airport' => 'Penticton Regional Airport', 'region' => '8', 'coordinates' => '49\u00b027\u203245\u2033N119\u00b036\u203208\u2033W',
            'runway' => '1829', 'airline' => 'warbler')

    );

    // Constructor
    public function __construct()
    {

        parent::__construct();
        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->data as $key => $record) {
            $record['key'] = $key;
            $this->data[$key] = $record;
        }
    }

    // retrieve a single quote, null if not found
    public function get($which)
    {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }

    // retrieve all of the quotes
    public function all()
    {
        return $this->data;
    }
}