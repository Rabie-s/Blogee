/* admin-aSide */
let navBtnToggle = document.getElementById('navBtnToggle');
let nav = document.getElementById('nav');
navBtnToggle.addEventListener('click', function () {
    nav.classList.toggle('hidden');
})
/* end-admin-aSide */


let closeNotificationBtn = document.getElementById('closeNotificationBtn');
let notification = document.getElementById('notification');
closeNotificationBtn.addEventListener('click',function(){
    notification.style.display = 'none';
});


