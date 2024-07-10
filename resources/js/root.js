/**
 * custom js for root layout and some component
 * last updated 7/24 foby
  **/

//attach listn..
var t_switches = document.querySelectorAll('.shift-theme');
t_switches.forEach(t_switch => {
  t_switch.addEventListener("click", (event) => {
    target = event.target;
    let date = new Date();
    date.setFullYear(date.getFullYear() + 1);
    if (getCookieValue('theme') && getCookieValue('theme') == 'night') {
      //day
      cookie = "theme=day; expires=" + date.toUTCString() + "; path=/";
      document.cookie = cookie;
    } else {
      cookie = "theme=night; expires=" + date.toUTCString() + "; path=/";
      document.cookie = cookie;
    }
    window.location.replace("/")
  }
  )
});

//close-d
let togle_x = document.querySelector('#drawer-x');
if (togle_x != null) {
  togle_x.addEventListener('click', () => {
    toggle = document.getElementById("toggle");
    toggle.checked = false;
  });
}

//submit 
let subtn = document.querySelector('#notesubmit');
if (subtn != null) {
  subtn.addEventListener('click', () => {
    let form = document.getElementById("noteForm");
    if (form != null) {
      form.submit();
    }
  });
}

let closebtn = document.querySelector('#note-close');
if (closebtn != null) {
  closebtn.addEventListener('click', () => {
    window.location.replace("/")
  });
}



//close  alerts
if (document.querySelector('.alert') != null) {
  closeAlert();
}

//closealert 
function closeAlert() {
  alert = document.querySelector('.alert')
  if (alert != null) {
    setTimeout(() => {
      alert.classList.add('alert-closed')
    }, 2500)
  }
}

/**invoker added to prevent escape from tree shaking*/
//get cook
function getCookieValue(name) {
  let regex = new RegExp('(^|;\\s*)' + name + '=([^;]*)');
  let match = document.cookie.match(regex);
  return match ? decodeURIComponent(match[2]) : null;
}


//show diag ,  
function showDialog(url) {
  btn = document.querySelector("#dialog-delete");
  btn.addEventListener('click', () => {
    //url -h
    window.location.replace(url);
  });
  dia = document.querySelector(".dialog");
  dia.classList.add('dialog-open');
}

//close diag 
function closeDialog() {
  dia = document.querySelector(".dialog");
  dia.classList.remove('dialog-open');
}



/***
//escape tree shaking 
console.log(showDialog);
console.log(getCookieValue);
console.log(closeDialog);
 
 */