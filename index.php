<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

require_once 'Database.php';

$database = new Database();

$database->connect($_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

$users = json_encode($database->fetchAll());
?>

<html>
    <head>
        <title>Users</title>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
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

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready( function () {
                const data = JSON.parse('<?php echo $users ?>')
                data.map((user) => {
                   user.push('delete')
                })

                $("#usersTable").DataTable({
                    "data": data,
                })
            })
        </script>

        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </body>
</html>