let registerForm = document.querySelector('#form_register');
if (registerForm !== null) {
    registerForm.lastElementChild.removeAttribute('disabled')
    registerForm.addEventListener('submit', async (e) => {
        e.preventDefault()
        const allElements = registerForm.children;
        for (let element of allElements) {
            if (element.nodeName === 'P'){
                element.textContent = ''; // clear all errors
            }
        }

        let errors = {}
        let inputs = Array.from(e.target)
        let formData = {};
        inputs.forEach((input) => {
            if (input.type != 'submit') {
                    formData[input.name] = input.value;
            }
        })


        let response = await (await fetch('/register', {
            method: "POST",
            body: JSON.stringify(formData),
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': "XMLHttpRequest"
            },
        })).json()

        if (response.status === 'ok') {
                afterAuthWithoutReload(response)
            //window.location.replace('/')
        } else {
            const error = response.error;
            const element = document.querySelector(`#register_form_${error.id}_error`)
            element.textContent = error.value;
        }
    })
}
let loginForm = document.querySelector('#form_login');
if (loginForm !== null) {
    loginForm.lastElementChild.removeAttribute('disabled')

    loginForm.addEventListener('submit', async (e) => {
        e.preventDefault()
        const allElements = loginForm.children;
        for (let element of allElements) {
            if (element.nodeName === 'P'){
                element.textContent = ''; // clear all errors
            }
        }

        let inputs = Array.from(e.target)
        let formData = {};
        inputs.forEach((input) => {
            if (input.type != 'submit') {
                    formData[input.name] = input.value;
            }
        })


        let response = await (await fetch('/login', {
            method: "POST",
            body: JSON.stringify(formData),
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': "XMLHttpRequest"
            },
        })).json()

        if (response.status === 'ok') {
            afterAuthWithoutReload(response)
            //window.location.replace('/')
        } else {
            const error = response.error;
            const element = document.querySelector(`#login_form_${error.id}_error`)
            element.textContent = error.value;
        }
    })
}









function afterAuthWithoutReload(response){
    const mainContent = document.querySelector(".main")
    mainContent.remove();
    const wrapper = document.querySelector(".wrapper");
    const header = document.createElement("header")
    const hi = document.createTextNode(`Hello ${response.data.name}`)
    const logout = document.createElement("button")
    logout.setAttribute('onclick','window.location.replace(\'/logout\');')
    logout.textContent = "Выйти"
    header.appendChild(hi)
    header.appendChild(logout)
    wrapper.appendChild(header)
}








