@extends('master')


@section('title')
time-table
@stop

@section('main')
 
  <div class="flex justify-end space-x-4 pr-3">
   <button class="rounded-full bg-black px-5 text-white"> <a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a></button>
   <button class="bg-blue-500 rounded-full px-5 text-white" id="btn-export" onclick="exportHTML();">Export to  word doc</button>
  </div>
  
 
        <!--Table-->
<div   id="source-html"  ><br>
 <div id="printableArea" >
   <H1 style="margin-top:5%; text-align:center; color:black; font-weight:bold; font-family:sans-serif; text-decoration:underline;">TIME-TABLE</H1>
   <table cellspacing="3"class="border" style="white-space:nowrap; margin-top:2%; width:max-content; border:1px solid black; height:300px; background-color:white;">
    <tr>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Time
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">8:00-9:30
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">9:30-10:30
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">10:30-11:15
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">13:00-13:45
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">13:45-14:30
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">14:30-14:45
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">14:45-15:30
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">15:30-16:15
    </tr>
    <tr>
       <td style="color:rgb(236, 10, 10); text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" class="s">Sunday
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Civic
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Sport<br>
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Sport<br>
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;"><br>
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" rowspan="6">L<br>U<br>N<br>C<br>H
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Geografic<br>
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;"><br>
       <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">counselling class
    </tr>
    <tr>
      <td style="color:orange; text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;"class="m">Monday
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Arabic<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Arabic<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">English<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">---
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">French<BR>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">French<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">library
    </tr>
    <tr>
      <td style="color:rgb(189, 189, 8); text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" class="t">Tuesday
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Physic<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Islamic<BR>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Art<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">---
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" colspan="3">---
    </tr>
    <tr>
      <td style="color:green; text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Wednesday
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Math<BR>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Science<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;"><br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">---
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;"><br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;"><br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">library
    </tr>
    <tr>
      <td style="color:rgb(28, 109, 185); text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" class="th">Thursday
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB1<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" colspan="3">seminar
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB4<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB5<br>
      <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">library
    </tr>
   </table>
   <br>
    <div style=" display:grid; grid-template-columns:repeat(2, 1fr); font-weight:bold;" >
      <p>Arabic Teacher:</p>
      <p>level:</p>
      <p>French Teacher:</p>
      <p>class: {{$classroom->Name}}</h1>
      <p>English Teacher:</p>
      <p>Edukids-School (2022-2023)</p>
    </div>
 @stop
  </div>
</div>