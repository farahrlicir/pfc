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













   //two
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
</script>