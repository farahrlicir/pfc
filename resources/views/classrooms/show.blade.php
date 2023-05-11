@extends('master')


@section('title')
time-table
@stop

@section('main')

<div   id="source-html"  ><br> <!-- -->
 <div id="printableArea" >
  <div class="flex justify-end space-x-4 pr-3">
   <button class="rounded-full bg-black px-5 text-white"> <a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a></button>
   <!--<button id="pdfButton" class="rounded-full bg-red-700 px-5 text-white">Generate PDF</button>-->
   <button class="bg-blue-500 rounded-full px-5 text-white" id="btn-export" onclick="exportHTML();">Export to  word doc</button>
  </div>
  
 <!--<h1 class="font-bold text-center underline">Time Table</h1>
  <br><br><br>
  <table class="text-center max-w-screen-lg mx-7 w-52 h-10  whitespace-nowrap">
    <thead>



       <tr class=" font-bold text-sm">
          <td class="border px-2 py-2 bg-gray-400  border-gray-600 ">Time</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">8:00-9:30</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">9:30-10:30</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">10:30-11:15</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">11:15-13:00</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">13:00-13:45</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">13:45-14:30</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">14:30-14:45</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">14:45-15:30</td>
          <td class="border bg-white py-4 px-4 border-gray-600 font-bold">15:30-16:15</td>
       </tr>
    </thead>
    
    <tbody>
   
        <tr>
            
            <td class="border px-2 py-2 border-gray-600 text-red-600 font-bold">Sunday</td>
            <td class="border bg-white py-4 px-4 border-gray-600">Arabic<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td rowspan="5" class="border bg-white py-4 px-4 border-gray-600 font-bold">L<br>U<br>N<br>C<br>H<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td rowspan="5" class="border bg-white py-4 px-4 border-gray-600 font-bold">b<br>r<br>e<br>a<br>k<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
        </tr>
        <tr>
            
            <td class="border px-2 py-2 border-gray-600 text-orange font-bold">Monday</td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
           
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
        </tr>
        <tr>
           
            <td class="border px-2 py-2 border-gray-600 text-amber-400 font-bold">Tuesday</td>
            <td colspan="3" class="border py-4 px-4 border-gray-600 bg-violet-200">Math<br></td>
            <td colspan="5" class="border bg-white py-4 px-4 border-gray-600"><br></td>
   
        </tr>
        <tr>
           
            <td class="border px-2 py-2 border-gray-600 text-green-600 font-bold">Wednesday</td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
        </tr>
        <tr>
           
            <td class="border px-2 py-2 border-gray-600 text-blue-700 font-bold">Thursday</td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
            <td class="border bg-white py-4 px-4 border-gray-600">{{$classroom->Subject}}<br></td>
        </tr>
    </tbody>
    </table>
    <br>
    <div class="grid grid-cols-2 gap-4 mx-11 font-bold ">
       <p>Arabic Teacher:</p>
       <p>level:</p>
       <p>French Teacher:</p>
       <p>class: {{$classroom->Name}}</h1>
       <p>English Teacher:</p>
       <p>Edukids-School (2022-2023)</p>
    </div>-->
<!--html table-->

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
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB1gtg
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">irjg<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">jkkj<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB3r44r<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" rowspan="6">L<br>U<br>N<br>C<br>H
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB4<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB5<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">counselling class
</tr>
<tr>
 <td style="color:orange; text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;"class="m">Monday
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB1<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB2<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB3<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">---
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB4<BR>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB5<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">library
</tr>
<tr>
 <td style="color:rgb(189, 189, 8); text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" class="t">Tuesday
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB1<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB2<BR>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SWA<br>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">---
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;" colspan="3">---
</tr>

<tr class="w">
 <td style="color:green; text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">Wednesday
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">SUB1<BR>
 <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px ; font-weight:bold;">UB2<br>
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
<div class="grid grid-cols-2 gap-4 mx-11 font-bold ">
   <p>Arabic Teacher:</p>
   <p>level:</p>
   <p>French Teacher:</p>
   <p>class: {{$classroom->Name}}</h1>
   <p>English Teacher:</p>
   <p>Edukids-School (2022-2023)</p>
</div>-->
@stop
  </div>
</div>