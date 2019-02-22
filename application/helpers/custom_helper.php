<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('emp_navactive'))
{
    function emp_navactive($uristring = '')
    {
        $class_a = '';
        $auri = array(
          "Employee/manageAsmProfile",
          "Employee/manageZmProfile",
          "Employee/manageNhProfile",
          "Asm/createAsm",
          "Asm/viewAsm",
          "Zm/createZm",
          "Nh/createNh"
        );
        if(in_array($uristring,$auri)){
          $class_a = "active open";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('emp_asmactive'))
{
    function emp_asmactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Employee/manageAsmProfile","Asm/createAsm","Asm/viewAsm",);
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('emp_zmactive'))
{
    function emp_zmactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Employee/manageZmProfile","Zm/createZm");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('emp_nhactive'))
{
    function emp_nhactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Employee/manageNhProfile","Nh/createNh");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
