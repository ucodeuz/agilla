$(function () {
// set ajax csrf token for sending forms post method
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
// item_detail display model
$('.item_detail').on('click', function(){
    $id = $(this).closest('td').prev('td').text();
    $.ajax({
        type: "get",
        url: '/cp/'+ getLocationLast()+'/'+ $id,
            success: function( data ) {
             switch (getLocationLast()) {
                 case 'employees':
                     showEmployeesModal(data);
                     break;
                 default:
                    console.log('this location is empty');
                     break;
                }
            }
       });
});

});
// end main functions

// modal show for employees gridview
function showEmployeesModal(employee){
    $('.employee_id').text(employee.id);
    $('.employee_role').text(employee.employee_type);
    $('.employee_name').text(employee.name);
    $('.employee_email').text(employee.email + '@prisma.uz');
    $('#employeeView').modal('show');
}
// getting current window Location last element
function getLocationLast() {
    var locationall = window.location.toString();
    var location = locationall.split('/').pop();
    return location;
}