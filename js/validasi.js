
$(document).ready(function() {
    $('#user').keyup(function() {
        var uname = $('#user').val();
        if(uname == 0) {
            $('#result').text('');
        }
        else {
            $.ajax({
                url: 'cek_user.php',
                type: 'POST',
                data: 'user='+uname,
                success: function(hasil) {
                    if(hasil > 0) {

                        $('#result').text('Username Sudah Digunakan' );
                        
                    }
                    else {

                        $('#result').text('Username Tersedia');
                    }
                }
            });
        }
    });
});

