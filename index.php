<html>
    <head>
        <title>Users</title>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <table class="table display" id="usersTable">
            <thead>
                <th>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Action</td>
                </th>
            </thead>
            <tbody></tbody>
        </table>

        <hr>
        <h3>Adicionar novo usuário</h3>

        <form method="POST">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <button id="create">Create</button>
        </form>

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script src="js/script.js"></script>

        <script>
            $(document).ready( function () {
                const data = fetchData()
                mapTable(data)


                $("body").on('click', '#create', function(e){
                    e.preventDefault()
                    addUser()

                    let data = fetchData()
                    mapTable(data)
                })

                $("body").on('click', '.delete', function(e){
                    e.preventDefault()
                    deleteUser(e.target.getAttribute('data-id'))

                    let data = fetchData()
                    mapTable(data)
                });
            })
        </script>

        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    </body>
</html>