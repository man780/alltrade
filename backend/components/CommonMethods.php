<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 5/6/16
 * Time: 4:51 PM
 * To change this template use File | Settings | File Templates.
 */
class CommonMethods
{
    private $data = array();

    public function makeDropDown($parents)
    {
        global $data;
        $data = array();
        $data['0'] = '-- ROOT --';
        foreach($parents as $parent)
        {

            $data[$parent->id] = $parent->name;
            $this->subDropDown($parent->children);


        }

        return $data;
    }


    public function subDropDown($children,$space = '---')
    {
        global $data;

        foreach($children as $child)
        {

            $data[$child->id] = $space.$child->name;
            $this->subDropDown($child->children,$space.'---');
        }

    }
}
