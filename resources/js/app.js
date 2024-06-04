import 'preline'
import './bootstrap';
import Swal from 'sweetalert2';

document.addEventListener('livewire:navigated', () => {
    window.HSStaticMethods.autoInit();
})

window.addEventListener('alert' , (event)=>{
 let data = event.detail;

 console.log(data);

Swal.fire({
position: data.position,
icon: data.icon,
title: data.title,
text: data.text,
showConfirmButton: false,
timer: 1500
})
})
