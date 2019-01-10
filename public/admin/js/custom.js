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
      var id = $(this).data('target-id');
      var location = $(this).parents('.table').data('location');
      var targetModal = $(this).parents('.table').data('target-modal');
      $.ajax({
          type: "get",
          url: location+'/'+ id,
              success: function( data ) {
                $(targetModal + ' .modal-content .modal-body').html(data.html);
                $(targetModal).modal('show');
                modalLoaderHide();
              }
         });
  });
  

  
  // getting current window Location last element
  function getLocationLast() {
      var locationall = window.location.toString();
      var location = locationall.split('/').pop();
      return location;
  }
});