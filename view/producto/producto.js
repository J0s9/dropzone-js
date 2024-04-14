let arrayimg=[];

// INICIALIZAR DROPZONE
let myDropzone = new Dropzone( '.dropzone',{
    url:"../../asset/img",
    maxFilesize: 20,
    maxFiles: 20,
    acceptedFiles:'image/jpg, image/png',
    addRemoveLinks:true,
    dictRemoveFile:'Quitar'
})


myDropzone.on('addedfile', file=>{
    arrayimg.push(file);
    // console.log(file);
})

myDropzone.on('removedfile', file=>{
    let i = arrayimg.indexOf(file);
    arrayimg.splice(i,1);
    // console.log(arrayimg);
});

function init(){
    $('#prod_form').on("submit",function(e){
        guardaryeditar(e);
    });
}    

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#prod_form")[0]);
    
    var totalfiles = arrayimg.length;
    for(var i = 0; i < totalfiles; i ++){
        formData.append("file[]",arrayimg[i])
    }
    $.ajax({
        url: "../../controller/producto.php?op=guardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            // console.log(data);
            $('#prod_name').val('');
            Dropzone.forElement('.dropzone').removeAllFiles(true);
        }
    });
}

init();


