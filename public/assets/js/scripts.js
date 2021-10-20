if(document.querySelector('#js-del'))
{
    let btn=document.querySelectorAll('#js-del');
    for(let i=0; i<btn.length; i++){
        btn[i].addEventListener('click', confirmDel, false);
    }
}

function confirmDel(event)
{
    event.preventDefault();
    let token = document.getElementsByName("_token")[0].value;

    if(confirm("Confirma exclusão?"))
    {
        let ajax = new XMLHttpRequest();
        ajax.open('DELETE', event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN', token);
        ajax.onreadystatechange = function(){
            if(ajax.readyState === 4 && ajax.status === 200)
            {
                window.location.href="/cliente";
                window.location.href="/carro";
                window.location.href="/modelo";
                window.location.href="/locacao";
            }
        };
        ajax.send();
    }else
    return false;
}