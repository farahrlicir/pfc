<!doctype html>
<html lang="en">
<head>
 <title> Calendar</title>
  @include('layouts.head')
  <!--<link href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css' rel='stylesheet'>-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js"></script>
</head>
<body>
    @include('layouts.main-sidebar')

 
  <!--HEAD-->
   <section id="content">
      @include('layouts.main-header')
    <!--ENDHEAD-->

       <main>
        <div class="container">
            <h1 class="xl:text-center xl:font-bold xl:text-2xl sm:text-center sm:text-base sm:font-medium xl:pt-6"> FullCalendar To Create and Delete Event </h1>
            <br><br>
            <!--<div class="panel panel-primary">
               
                <div class="panel-body" >
                
                </div>
               
            </div>-->
            <div class="border-x-2 border-y-2 border-purple-900 items-center justify-center">
              <div id="calendar" class="bg-purple-200 text-center">
        
              </div>
            </div>
        </div>
        </body>
        <script>
            $(document).ready(function () {
                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,basicWeek,basicDay'
                    },
                    navLinks: true,
                    editable: true,
                    events: "getevent",           
                    displayEventTime: false,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    },
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD'); 
                        var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD'); 
                        $.ajax({ 
                            url: "{{ URL::to('createevent') }}",
                            data: 'title=' + title + '&start=' + start + '&end=' + end +'&_token=' +"{{ csrf_token() }}",
                            type: "post",
                            success: function (data) {
                                alert("Added Successfully");
                                $('#calendar').fullCalendar('refetchEvents');
                            }
                        });
                    }
                },
                eventClick: function (event) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) { 
                       $.ajax({
                            type: "POST",
                            url: "{{ URL::to('deleteevent') }}",
                            data: "&id=" + event.id+'&_token=' +"{{ csrf_token() }}",
                            success: function (response) {
                                if(parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event.id);
                                    alert("Deleted Successfully");
                                }
                            }
                        });
                    }
                }
                });
            });
        </script>
       </main>
   </section>
 
@include('layouts.footer-scripts')

</body>
</html>