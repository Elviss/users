function addUser() {
    $.ajax({
        type: "POST",
        url: 'operations.php',
        data: {
            name: $("#name").val(),
            email: $("#email").val(),
            method: 'create',
        },
        success: function(res) {
            res = JSON.parse(res);

            Toastify({
                text: res.msg,
                duration: 3000,
                close: true,
                style: {
                    background:  res.status === '200' ? 'green' : 'red',
                }
            }).showToast();
        },
    })
}

function deleteUser(id) {
    $.ajax({
        type: "POST",
        url: 'operations.php',
        data: {
            id: id,
            method: 'delete',
        },
        success: function(res) {
            res = JSON.parse(res);

            Toastify({
                text: res.msg,
                duration: 3000,
                close: true,
                style: {
                    background:  res.status === '200' ? 'green' : 'red',
                }
            }).showToast();
        },
    })
}