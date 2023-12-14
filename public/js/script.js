$(".editStudents").click(function(){
    const id = $(this).data('id');
    const route = $(this).data('route');
    console.log(id);
$.ajax({
    url: route,
    type:'GET',
    data: {id:id},
    success:function(response){

$("#sid").val(id);
$("#sname").val(response.name);
$("#semail").val(response.email);
$("#sdob").val(response.dob);

    },
    error:function(error){
        console.log(error);
    }
})
});

$("#update_students").click(function(){
    var formdata = $("#student_detail").serialize();
    const route = $(this).data('route');
    console.log(formdata);
    
    $.ajax({
        url: route, 
        type: 'POST',
        data: formdata,
        dataType: 'json',
        success: function (response) {
            console.log(response.message);
            window.location.reload();
            $("#staticBackdrop").modal('hide');
        },
        error: function (error) {
            console.log(error);
        }
    });
    
  
})
$(".DeleteStudents").click(function(){
    const id = $(this).data('id');
    const route  = $(this).data('route');
    console.log(id);
    const conf = confirm("Are you sure you want to Delete " + id + " ? ");
  if(conf){
   $.ajax({
 url: route,
 data:{id:id},
 type:'GET',
 success:function(response){
    console.log(response);
    window.location.reload();
 },
 error:function(error){
    console.error;
 }
   })
  }
})