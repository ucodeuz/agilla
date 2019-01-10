$(function () {
  
  // Modal Loading Show
  function modalLoaderShow(){
    $('.modal-loader').remove();
    $('body').append('<div class="modal-loader"><div></div><div></div><div></div><div></div><div></div></div>');
  };

  // Modal Loading Hidden
  function modalLoaderHide(){
    $('.modal-loader').remove();
  };

  // Set ajax csrf token for sending forms post method
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  
  // Item_detail display model
  $('.item_detail').on('click', function(){
      modalLoaderShow();
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
  
  // Modal show for employees gridview
  function showEmployeesModal(data){
      modalLoaderHide();
//      $('.employee_id').text(employee.id);
//      $('.employee_role').text(employee.employee_type);
//      $('.employee_name').text(employee.name);
//      $('.employee_email').text(employee.email + '@prisma.uz');
      console.log(data)
      $('#employeeView').modal('show');
  }
  
  // getting current window Location last element
  function getLocationLast() {
      var locationall = window.location.toString();
      var location = locationall.split('/').pop();
      return location;
  }
});