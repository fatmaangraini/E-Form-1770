// Jenis Pelaporan
$('input:radio[name="flexRadioDisabled"]').change(
    function() {
        if ($(this).is(':checked')) {
            console.log(1, $(this).val())
            data = {
                jenis_pelaporan: $(this).val()
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: data,
                url: `http://localhost:8000/JenisUpdate/${$(this).attr('data-id')}`,
                success: function(res) {
                    console.log(res)
                }
            });
            // append goes here
        }
    });
// Cek Pembetulan
