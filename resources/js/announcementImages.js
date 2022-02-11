

const { data } = require("jquery");

$(function(){
    if ($("#drophere").length > 0) {
        alert('ci sono');
    }
});

// $(function(){
//     if ($("#drophere").length > 0) {

//         let csrfToken = $('meta[name = "csrf-token"]').attr('content');

//         let uniqueSecret = $('input[name = "uniqueSecret"]').attr('value'); 

//         let myDropzone = new Dropzone('#drophere',{

//             url:'/announcement/images/upload',

//             params:{
//                 _token:csrfToken,
//                 uniqueSecret:uniqueSecret
//             },

//             addRemoveLinks:true,
//             init:function() {
//                 $.ajax({
//                     tipe:'GET',
//                     url:'/announcement/images',
//                     data:{
//                         uniqueSecret:uniqueSecret
//                     },
//                     dataType:'Json'
//                 }).done(function(data){
//                     $.each(data,function(key,value){
//                         let file = {
//                             serverId:value.id
//                         }
//                     })
//                 })
//             }



//         })

//     }
// });




// ! CON JAVASCRIPT VANILLA

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

// $(function(){
//     alert('ci sono');
// })