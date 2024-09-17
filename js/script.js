function addUser() {
    $.ajax({
        type: "POST",
        url: 'create.php',
        data: {
            name: $("#name").val(),
            email: $("#email").val(),
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
        url: 'delete.php',
        data: {
            id: id
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