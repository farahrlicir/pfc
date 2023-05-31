@extends('master')


@section('title')
grades
@stop

@section('main')
    
   <div class="bg-white" id="tbl_exporttable_to_xls">
    <button class="bg-green-500 rounded-full px-5 text-white" onclick="ExportToExcel('xlsx')">Export table to excel</button>
    <table cellspacing="3"class="border" style="white-space:nowrap; margin-top:2%; width:660px; border:1px solid black; height:300px; background-color:white;">
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Subjects
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Marks
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Remarques
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Arabic
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">English
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">French
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Math
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Techno
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Civic
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">History&Geo
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left;  border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Full-Mark
            <td style="text-align:center;  border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center;  border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
    </table>
   
   </div>

@stop