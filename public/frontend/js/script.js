var date = new Date();
document.getElementById("cu_date").innerHTML = date.toDateString();

$(function() {
    $('.tourairticketdemo').hide();
    $('#tourAirTicketNeed').change(function() {
        $('.tourairticketdemo').hide();
        $('#' + $(this).val()).show();
    });

    $('.tourtrainticketdemo').hide();
    $('#tourTrainTicketNeed').change(function() {
        $('.tourtrainticketdemo').hide();
        $('#' + $(this).val()).show();
    });

    $('.tourhotelneeddemo').hide();
    $('#tourHotelNeed').change(function() {
        $('.tourhotelneeddemo').hide();
        $('#' + $(this).val()).show();
    });
});


$(function() {
    $('.treatmentairticketdemo').hide();
    $('#treatmentAirTicketNeed').change(function() {
        $('.treatmentairticketdemo').hide();
        $('#' + $(this).val()).show();
    });

    $('.treatmenttrainticketdemo').hide();
    $('#treatmentTrainTicketNeed').change(function() {
        $('.treatmenttrainticketdemo').hide();
        $('#' + $(this).val()).show();
    });

    $('.treatmenthotelneeddemo').hide();
    $('#treatmentHotelNeed').change(function() {
        $('.treatmenthotelneeddemo').hide();
        $('#' + $(this).val()).show();
    });
});

// Hospitals option
$(function() {
    $('.hospitals').hide();
    $('#treatmentWhichPlace').change(function(){
      $('.hospitals').hide();
      $('#' + $(this).val()).show();
    });
});

