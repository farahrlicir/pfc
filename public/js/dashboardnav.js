
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
