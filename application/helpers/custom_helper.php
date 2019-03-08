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
/*if ( ! function_exists('calendar_navactive'))
{
    function calendar_navactive($uristring = '')
    {
        $class_a = '';
        $auri = array(

          "Asm/calendarDetails",
          "Asm/visitReportStore",
          "Asm/visitReportEmployee",
        );
        if(in_array($uristring,$auri)){
          $class_a = "active open";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}*/

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
if ( ! function_exists('asm_ratestoreactive'))
{
    function asm_ratestoreactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Asm/rateStore");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('asm_profileactive'))
{
    function asm_profileactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Asm/Profile");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('asm_calendaractive'))
{
    function asm_calendaractive($uristring = '')
    {
        $class_a = '';
        $auri = array("Asm/calendarDetails","Asm/visitReportStore","Asm/visitReportEmployee");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('zm_ratestoreactive'))
{
    function zm_ratestoreactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Zm/rateStore");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('zm_profileactive'))
{
    function zm_profileactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Zm/Profile");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('zm_asmactive'))
{
    function zm_asmactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Zm/asmList");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('nh_ratestoreactive'))
{
    function nh_ratestoreactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Nh/rateStore");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('nh_profileactive'))
{
    function nh_profileactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Nh/Profile");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('nh_asmactive'))
{
    function nh_asmactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Nh/asmList");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
if ( ! function_exists('nh_zmactive'))
{
    function nh_zmactive($uristring = '')
    {
        $class_a = '';
        $auri = array("Nh/zmList");
        if(in_array($uristring,$auri)){
          $class_a = "active";
          return $class_a;
        }else{
          return $class_a;
        }
    }
}
