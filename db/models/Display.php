<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Display extends BaseDisplay
{
    public function setUp()
    {
        $this->hasOne('Style', array(
            'local' => 'style',
            'foreign' => 'style',
        ));
        $this->hasOne('OutputInterface as Interface', array(
            'local' => 'interface',
            'foreign' => 'interface',
        ));
    }

}
