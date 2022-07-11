<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    public function __construct()
    {
        parent::__construct();
    }
    

    /**
     * ENUM
     * The submitted string must match one of the values given
     *
     * usage:
     * enum[value_1, value_2, value_n]
     *
     * example (any value beside exactly 'ASC' or 'DESC' are invalid):
     * $rule['order_by'] = "required|enum[ASC,DESC]";
     * 
     * example of case-insenstive enum using strtolower as validation rule
     * $rule['favorite_corey'] = "required|strtolower|enum[feldman]";
     *
     * @access    public
     * @param     string $str the input to validate
     * @param     string $val a comma separated lists of values
     * @return    bool
     */
    function enum($str, $val='')
    {

        if (empty($val))
        {
        return FALSE;
        }

        $arr = explode(',', $val);
        $array = array();
        foreach($arr as $value)
        {
        $array[] = trim($value);
        }

        $this->CI->form_validation->set_message('enum', "%s contains an invalid response");
        return (in_array(trim($str), $array)) ? TRUE : FALSE;
    }


    // --------------------------------------------------------------------

    /**
     * NOT ENUM
     * The submitted string must NOT match one of the values given
     *
     * usage:
     * enum[value_1, value_2, value_n]
     *
     * example (any input beside exactly 'feldman' or 'haim' are valid):
     * $rule['favorite_corey'] = "required|not_enum['feldman','haim']";
     *
     * @access   public
     * @param    string $str the input to validate
     * @param    string $val a comma separated lists of values
     * @return   bool
     */
    function not_enum($str, $val='')
    {
        return ($this->enum($str,$val) === TRUE)? FALSE : TRUE;
    }

}