var loginORlogout = 1;
var registerdiv = document.querySelector('.registerdiv');
var logindiv = document.querySelector('.logindiv');
// 1 = login
// 0 = register

const changeloginmenu = () => {
    if (loginORlogout == 1) {
        logindiv.classList.add('div-off');
        logindiv.classList.remove('div-on');
        registerdiv.classList.add('div-on');
        registerdiv.classList.remove('div-off');
        loginORlogout = 0;
    } else {
        logindiv.classList.add('div-on');
        logindiv.classList.remove('div-off');
        registerdiv.classList.add('div-off');
        registerdiv.classList.remove('div-on');
        loginORlogout = 1;
    }
}