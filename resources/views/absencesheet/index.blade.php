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
         <div style="border:black solid 2px;width:100%; height:1045px;">
            <h1 style="margin:5%; text-align:center; font-weight:bold; font-size:20px; text-decoration:underline;">Absence-sheet</h1><br>
            <div style="margin-left:12%; font-weight:bold;">
              <p style="">Complete name:................................</p><br>
              <h1>Reason :</h1><br>
              <div style="display:flex;">
                <p style=" height:15px; width:15px; border:1px solid black;"></p>	&nbsp; 	&nbsp;
                <h1>Holidays</h1>&nbsp; &nbsp;
                <p style=" height:15px; width:15px; border:1px solid black;"></p>	&nbsp; 	&nbsp;
                <h1>Congress</h1>&nbsp; &nbsp;
                <p style=" height:15px; width:15px; border:1px solid black;"></p>	&nbsp; 	&nbsp;
                <h1>Illness</h1>&nbsp; &nbsp; <br><br>
             </div>
             <div style="display:flex;">
                <p style=" height:15px; width:15px; border:1px solid black;"></p>	&nbsp; 	&nbsp;
                <h1>other:......................................................................................................................................</h1>
             </div><br>
               <h1>Date: From: .....................................included</h1><br>
               <p>to: ..............................included</p><br>
               <p>Date:...............................</p><br>
               <p>Signature of employee: ................</p><br>
               <p>Approved by: .........................................</p> (name and signature of director).<br><br><br><br>
               <p>When completed and duly signed, this form is to be remitted to the office.</p>
            </div>
         </div>
       </div>
    </div>
@stop