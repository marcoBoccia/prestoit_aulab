const { drop } = require("lodash");


/* const { data } = require("jquery");
 */
/* $(function drop(){
    if ($("#drophere").length > 0) {
        alert('ci sono');
    }
});

drop(); */

/* if ($("#drophere").length > 0) {
    alert('ci sono');
} */

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

$(function () {
    if ($("#drophere").length > 0) {

        let csrfToken = $('meta[name = "csrf-token"]').attr('content');

        let uniqueSecret = $('input[name = "uniqueSecret"]').attr('value');

        let myDropzone = new Dropzone('#drophere', {

            url: '/announcement/images/upload',

            params: {
                _token: csrfToken,
                uniqueSecret: uniqueSecret
            },

            addRemoveLinks: true,


            init: function() {
                 $.ajax({
                     type:'GET',
                     url:'/announcement/images',
                     data:{
                         uniqueSecret:uniqueSecret
                     },
                     dataType:'Json'
                 }).done(function(data){
                     $.each(data,function(key,value){
                         let file = {
                             serverId:value.id
                         }

                         myDropzone.options.addedfile.call(myDropzone, file);
                         myDropzone.options.thumbnail.call(myDropzone, file, value.src);

                     })
                 })
             }

        });

        // FUNZIONE PER IL FILE CHE ARRIVA 
        myDropzone.on("success", function (file, response) {
            file.serverId = response.id;
        });


        // FUNZIONE PER RIMUOVERE IL FILE
        myDropzone.on("removedfile", function (file) {
            $.ajax({
                type: 'DELETE',
                url: '/announcement/images/remove',
                data: {
                    _token: csrfToken,
                    id: file.serverId,
                    uniqueSecret: uniqueSecret,
                },
                dataType: 'Json'
            });
        });
    }

});




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