<script>
    $(document).ready(function() {
        function loadUserData(pageid) {
            $('#user-data').html('');
            $.ajax({
                url: 'modules/dashboard/code/admin-code.php',
                type: 'post',
                dataType: 'json',
                data: {
                    action: 'fetch-user',
                    pageid: pageid
                },
                success: function(res) {
                    var total_pages = 0;
                    $.each(res, function(index, item) {
                        if (item.total_pages != 0) {
                            total_pages = item.total_pages;
                        }
                        var edit = ''
                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] != 'admin' && $_SESSION['login'] != 'user') { ?>
                            edit += ' <a href="users.php?edit=' + item.id + '">Edit</a>';
                        <?php } ?>
                        var dob = item.dob;
                        var dateAr = dob.split('-');
                        var newDOB = dateAr[1] + '/' + dateAr[2] + '/' + dateAr[0];
                        var Tbody = `<tr>
                                        <th scope="row">` + item.id + `</th>
                                        <td>` + item.name + `</td>
                                        <td>` + item.email + `</td>
                                        <td>` + item.phone + `</td>
                                        <td>` + newDOB + `</td>
                                        <td> <a href="javascript:void(0);" id="delete-user" itemid="` + item.id + `">Delete</a>` + edit + `</td>
                                    </tr>`;
                        $('#user-data').append(Tbody);
                    });
                    var j = 0;
                    for (var i = 0; i < total_pages; i++) {
                        j++
                        if (i == 0) {
                            $('#pagination').append('<button class="active" id="' + j + '">' + j + '</button>');
                        } else {
                            $('#pagination').append('<button class="" id="' + j + '">' + j + '</button>');
                        }
                    }
                }
            });
        }
        loadUserData();
        $(document).on('click', '#pagination button', function() {
            $('#pagination button.active').removeClass('active');
            $(this).addClass('active');
            var pageid = $(this).attr('id');
            loadUserData(pageid);
        });

        $(document).on('click', '#delete-user', function() {
            var id = $(this).attr('itemid');
            $.ajax({
                url: 'modules/dashboard/code/admin-code.php',
                type: 'post',
                data: {
                    action: 'delete_user',
                    id: id
                },
                success: function(res) {
                    if (res == 'success') {
                        alert('User Deleted');
                        window.location.href = '';
                    }
                }
            });
        });



        $('#search-user').keyup(function() {
            if ($(this).val() != '') {
                $('#pagination button.active').removeClass('active');
                $('#user-data').html('');
                $.ajax({
                    url: 'modules/dashboard/code/admin-code.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        action: 'fetch-search-user',
                        value: $(this).val()
                    },
                    success: function(res) {
                        //alert('sssssss');
                        $.each(res, function(index, item) {
                            var edit = '';
                            <?php if (isset($_SESSION['login']) && $_SESSION['login'] != 'admin' && $_SESSION['login'] != 'user') { ?>
                                edit += ' <a href="users.php?edit=' + item.id + '">Edit</a>';
                            <?php } ?>
                            var dob = item.dob;
                            var dateAr = dob.split('-');
                            var newDOB = dateAr[1] + '/' + dateAr[2] + '/' + dateAr[0];
                            var Tbody = `<tr>
                                        <th scope="row">` + item.id + `</th>
                                        <td>` + item.name + `</td>
                                        <td>` + item.email + `</td>
                                        <td>` + item.phone + `</td>
                                        <td>` + newDOB + `</td>
                                        <td> <a href="javascript:void(0);" id="delete-user" itemid="` + item.id + `">Delete</a>` + edit + `</td>
                                    </tr>`;
                            $('#user-data').append(Tbody);
                        });
                    }
                });
            } else {
                loadUserData(1);
            }
        });
    });
</script>