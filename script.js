$(function() {

    $('input[name="datefilter"]').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    });

    $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

    $("#dodaj_auto").click(function () {
        event.preventDefault(); // Prevent the default form submission

        // Create FormData object to handle file uploads
        var formData = new FormData($("#dodaj_auto_forma")[0]);

        // Convert the image to base64 and add it to formData
        var inputFile = $("#slika")[0];
        var file = inputFile.files[0];
        formData.append("akcija", "dodaj_auto");

        if (file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onload = function (e) {
                formData.append("base64_image", e.target.result);

                // Send AJAX request
                $.ajax({
                    url: 'CarController.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $("#dodaj_auto_forma")[0].reset();
                        $("#slika").val('');
                        location.reload();
                    },
                    error: function (error) {
                        $("#error-message-add-project").text("Database Error!")
                    }
                });
            };
        } else {
            // If no file selected, send AJAX request without the image
            $.ajax({
                url: 'CarController.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    location.reload();
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }
    });

});

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

function ukloniAuto(id){
    $.ajax({
        url: 'CarController.php',
        type: 'POST',
        data: {id: id, akcija: "brisanje"},
        success: function (response) {
            console.log(response);
            location.reload();
        },
        error: function (error) {
            console.error(error);
        }
    });
}
myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
})