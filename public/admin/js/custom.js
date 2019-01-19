$(function () {  
//  Modal Loading Show
function modalLoaderShow(){
    $('.modal-loader').remove();
    $('body').append('<div class="modal-loader"><div></div><div></div><div></div><div></div><div></div></div>');
};

//  Modal Loading Hidden
function modalLoaderHide(){
    $('.modal-loader').remove();
};

//  Set ajax csrf token for sending forms post method
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//  Item_detail display model
$('.item_detail').on('click', function(){
    modalLoaderShow();
    var id = $(this).data('target-id');
    var location = $(this).parents('.table').data('location');
    $.ajax({
        type: "get",
        url: location+'/'+ id,
            success: function( data ) {
            $('#viewModal .modal-dialog').html(data.html);
            $('#viewModal').modal('show');
            modalLoaderHide();
        }
    });
});

//  Regions for (add and edit) pages, select type option change load related data
$('#regionType').on('change', function(){
    var type_id = this.value;
    if(type_id == 3){
        type_id = 2;
    }
    var url = "/cp/regions/types?type="+ type_id;
    $('.region_parent select').prop('required', false).empty();
    $('.region_parent select').append('<option value="0" selected disabled>Невыбран</option>');
    if(type_id != 1){
        $.ajax({
            type: "get",
            url: url,
                success: function( data ) {
                $('.region_parent select').prop('required', true).html(data.html);
                $('.region_parent select').parents('.form-group').removeClass('d-none');
            }
        });
    }
});

//  Region select changed find city
$('#groupRegion').on('change', function(){
    var region_id = this.value;
    var type= $("#regionType option:selected").val();
    if(type == '2' && region_id){
        return;
    }
    if(type == 3){
        type = 2;
    }
    if($('#groupRegion').children('option').hasClass('parent')){
        return;
    }
    var url = "/cp/regions/types?type="+ type + "&id="+ region_id;
        $.ajax({
        type: "get",
        url: url,
            success: function( data ) {
            $('.region_parent select').html(data.html);
            $('.region_parent select').parents('.form-group').removeClass('d-none');
        }
    });
});

//  Regions edit actions
$('.item_edit').on('click', function(){
    modalLoaderShow();
    var id = $(this).data('target-id');
    var location = '/cp/regions/'+ id +'/edit';
    $.ajax({
        type: "get",
        url: location,
            success: function( data ) {
            $('#regionEdit .modal-dialog').html(data.html);
            $('#regionEdit').modal('show');
            modalLoaderHide();
        }
    });
});

//  Getting current window Location last element
function getLocationLast() {
    var locationall = window.location.toString();
    var location = locationall.split('/').pop();
    return location;
}
});
// regions filter action functions
function provinChange(id){
    var provinceId = (id.value || id.options[id.selectedIndex].value);
    var typeId = $('.type').val();
    if(typeId == 3){
      var url = "/cp/regions/city?type="+ typeId + "&id="+ provinceId;
      $.ajax({
      type: "get",
      url: url,
          success: function( data ) {
              $('.city').html(data.html);
              $('.city').val($(".city option:first").val()).prop('disabled', false);
          }
      });
    }else{
      $('.city').val($(".city option:first").val()).prop('disabled', true);
    }
}
function typeChanged(id){
    $('.city').val($(".city option:first").val()).prop('disabled', true);
    var typeId = (id.value || id.options[id.selectedIndex].value);
      if (typeId == 2 || typeId == 3) {
          $('.province').val($(".province option:first").val()).prop('disabled', false);
      }else{
          $('.province').val($(".province option:first").val()).prop('disabled', true);
      }
    }