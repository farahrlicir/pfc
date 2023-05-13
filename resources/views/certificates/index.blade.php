@extends('master')


@section('title')
Certificate
@stop

@section('main')
        <div class="flex justify-end space-x-4 pr-3">
           <button class="rounded-full bg-black px-5 text-white"> <a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a></button>
        </div><br>
     <div id="printableArea"  style="background-color:white;">
       <div>
         <div style="border:rgb(228, 197, 141) solid 20px;width:100%; height:1045px;">
           <div style="margin:5%; text-align:center; ">
             <h1 style=" font-weight:bold; color:rgb(230, 196, 134);">Edukids 2022-2023</h1><br>
             <h2 style=" font-weight:800; font-size:50px;"><span style="color:aqua">C</span><span style="color:palevioletred">e</span><span style="color:coral;">r</span><span style="color:rgb(248, 248, 51)">t</span><span>i</span><span style="color:rgb(231, 185, 124)">f</span><span>i</span><span style="color:cadetblue">c</span><span>a</span><span style="color:crimson">t</span><span>e</span>
             </h2><br><br>
             <p style="font-weight:bold;">Presented to </p><br>
            <p> ______________________________________<p><br>
             <p style="font-weight:bold;">Congratulations little pupil</p><br>
             ____________________________________
           </div><br><br><br>
            <div style="font-weight:bold; display:grid;  grid-template-columns:repeat(3,1fr); place-items:center;">
             <p>Date</p>
             <img src="img/bravo.jpg">
             <p>signature</p>
            </div>
         </div>
       </div>
     </div>
      
@stop