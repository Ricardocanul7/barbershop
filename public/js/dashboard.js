function open_close_aside(){
    var openCheck = document.querySelector('#aside-open-check');

    btnOpen = document.querySelector('#open-burger-button');
    btnclose = document.querySelector('#close-burger-button');
    main = document.querySelector('main');

    aside = document.querySelector('aside');
    aside_content = document.querySelector('.aside-content');

    btnOpen.addEventListener('click', function(){
        if(openCheck.checked){
            aside.style.width = "0px";
            aside_content.style.display = "none";
            main.style.marginLeft = '0px';
        }else{
            aside.style.width = "250px";
            aside_content.style.display = "block";
            main.style.marginLeft = '250px';
        }
        console.log(openCheck);
        openCheck.checked = !openCheck.checked;
        console.log(openCheck);
    });

    btnclose.addEventListener('click', function(){
        if(openCheck.checked){
            aside.style.width = "0px";
            aside_content.style.display = "none";
            main.style.marginLeft = '0px';
        }else{
            aside.style.width = "250px";
            aside_content.style.display = "block";
            main.style.marginLeft = '250px';
        }
        openCheck.checked = !openCheck.checked;
    });
}


function dashboard(){
    open_close_aside();
}

dashboard();
