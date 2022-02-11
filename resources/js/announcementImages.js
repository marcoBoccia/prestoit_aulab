/* let  drop = document.querySelector('#dropzone');

function nuovoAnnuncio(){
    if(drop != null){
        let uniqueSecret = document.querySelector('#uniqueSecret').value;
        let crsfToken = document.querySelector('#token'); 
        
        let myDropzone = {
            url: '/announcement/images/upload',
            params: [
                {
                    token: crsfToken,
                    secret: uniqueSecret,
                },
            ],
        };

        console.log(myDropzone.url);
        console.log(myDropzone.params[0].token.content);
        console.log(myDropzone.params[0].secret);

    }
}

nuovoAnnuncio();

 */

$(function(){
    alert('ci sono');
})