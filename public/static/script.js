document.getElementById('loginFrom').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'drake';
    const correctPassword = '12345';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username === correctUsername && password === correctPassword){
        alert('Sukses ... !');
        window.location.href = 'index.html';
    }else{
        alert('login gagal');
    }
});