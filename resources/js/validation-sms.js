let validationButton = document.getElementById('validation-button');
let celNumber = document.getElementById('celnumber');
let verificationCodeContainer = document.getElementById('verification-code-container');
let token = document.querySelector("input[name='_token']");
validationButton.addEventListener('click', (e) => {
    e.preventDefault();

    let url = `http://send.sms/teste-sms/${celNumber.value}`;
    fetch(url, {
        headers: {
            "x-csrf-token": token.value,
        },
        method: "post",
    }).then(response => {
        if(response.ok){
            alert('sms enviado com sucesso');
            verificationCodeContainer.classList.remove('d-none');
        }
    })
})