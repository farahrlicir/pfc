<script>
   //ONE
    
//SIDEBAR
const allDropdowm = document.querySelectorAll('#sidebar  .side-dropdown');

allDropdowm.forEach(item => {
 const a = item.parentElement.querySelector('a:first-child');
 a.addEventListener('click', function (e) {
    e.preventDefault();

    if(!this.classList.contains('active')){
       allDropdowm.forEach(i=> {
         const aLink = i.parentElement.querySelector('a:first-child');
          aLink.classList.remove('active');
          i.classList.remove('show');
      })
    }


    this.classList.toggle('active');
    item.classList.toggle('show');
   })  
})



//PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile= profile.querySelector('.profile-link');

imgProfile.addEventListener('click',function(){
   dropdownProfile.classList.toggle('show');
})

window.addEventListener('click', function(e){
   if(e.target !== imgProfile){
      if(e.target !== dropdownProfile){
         if(dropdownProfile.classList.contains('show')){
            dropdownProfile.classList.remove('show');
         }
      }
   }
})



//SIDEBAR COLLAPSE
const  toggleS = document.querySelector('nav .toggle-sidebar');
const sidebar = document.getElementById('#content');

toggleS.addEventListener('click',function(){
   sidebar.classList.toggle('hide');
})













   //Clock
   const showTime = () => {
    let date = new Date();
    console.log(date);
    
    let weekday = [
      'Sunday',
      'Monday',
      'Tuesday',
      'Wednesday',
      'Thursday',
      'Friday',
      'Saturday',
    ];
    
    let months = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December',
    ];
    
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    let session = 'AM';
    
    let dayOfMonth = date.getDate(); 
    let dayOfWeek = weekday[date.getDay()];
    
    
    if (h == 0) {
      h = 12;
    }
    
    if (h > 12) {
      h = h - 12;
      session = 'PM';
    }
    
    let time = h + ':' + m + ':' + s + ' ' + session;
    
    document.querySelector('.clock').innerText = time;
    document.querySelector('.clock').textContent = time;
    
    document.querySelector('.day').innerHTML =
      months[date.getMonth()] +
      ' ' +
      dayOfMonth +
      ', ' +
      date.getFullYear();
    
    document.querySelector('.dayOfWeek').innerHTML = dayOfWeek;
    setTimeout(showTime, 1000);
    };
    
    showTime();

    //PRINT
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID).innerHTML;
        var originalContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
    }
   
    //PDF
    var button = document.getElementById("pdfButton");
        button.addEventListener("click", function () {
           var doc = new jsPDF("p", "mm", [300, 300]);
           var makePDF = document.querySelector("#generatePdf");
           // fromHTML Method
           doc.fromHTML(makePDF);
           doc.save("output.pdf");
        });
    //WORD
    function exportHTML(){
           var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
                "xmlns:w='urn:schemas-microsoft-com:office:word' "+
                "xmlns='http://www.w3.org/TR/REC-html40'>"+
                "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
           var footer = "</body></html>";
           var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
           
           var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
           var fileDownload = document.createElement("a");
           document.body.appendChild(fileDownload);
           fileDownload.href = source;
           fileDownload.download = 'document.doc';
           fileDownload.click();
           document.body.removeChild(fileDownload);
        }

</script>