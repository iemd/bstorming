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
          "Asm/editAsm",
          "Zm/createZm",
          "Zm/viewZm",
          "Zm/editZm",
          "Nh/createNh",
          "Nh/viewNh",
          "Nh/editNh",
          "Asm/selectStore",
          "Zm/selectAsm"

        );
        if(in_array($uristring,$auri)){
          $class_a = "active open";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('store_navactive'))
{
    function store_navactive($uristring = '')
    {
        $class_a = '';
        $auri = array(

          "Brand/",
          "Store/",
          "Brand/viewBrand",
          "Brand/createBrand",
          "Brand/editBrand",
          "Store/viewStore",
          "Store/createStore",
          "Store/editStore",
          "Store/selectBrand"

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
        $auri = array("Employee/manageAsmProfile","Asm/createAsm","Asm/viewAsm","Asm/editAsm","Asm/selectStore");
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
        $auri = array("Employee/manageZmProfile","Zm/createZm","Zm/viewZm","Zm/editZm","Zm/selectAsm");
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
        $auri = array("Employee/manageNhProfile","Nh/createNh","Nh/viewNh","Nh/editNh");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('store_brandactive'))
{
    function store_brandactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Brand/viewBrand","Brand/createBrand","Brand/editBrand","Store/selectBrand");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('store_storeidactive'))
{
    function store_storeidactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Store/viewStore","Store/createStore","Store/editStore");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('store_storeidactive'))
{
    function store_storeidactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Store/viewStore","Store/createStore","Store/editStore");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
