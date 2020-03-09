const id = document.getElementById('id')
const stud_num = document.getElementById('stud_num')
const name = document.getElementById('name')
const phone = document.getElementById('phone')
const email = document.getElementById('email')
const uPass = document.getElementById('uPass')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')


form.addEventListener('submit',(e)=>{
    let messages = []

    if(id.value === '' || id.value == null){
        messages.push('Id is required')
    }
    if(stud_num.value === '' || stud_num.value == null){
        messages.push('Student number is required')
    }
    if(name.value === '' || name.value == null){
        messages.push('Name is required')
    }
    if(phone.value === '' || phone.value == null){
        messages.push('Phone is required')
    }
    if(email.value === '' || email.value == null){
        messages.push('Email is required')
    }
    if(uPass.value === '' || uPass.value == null){
        messages.push('Password is required')
    }

    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    
})