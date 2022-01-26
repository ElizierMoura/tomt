<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }


        body {
            background-color: rgba(230,230,230,1);
        }

        table {
            text-align: center;
            margin: 20px auto 20px auto;
        }

        table td {
            padding: 5px 20px;
            background-color: rgba(0,0,0,0.052);
            border-radius: 5px;
            color: rgba(0,0,0,0.52);
        }

        a {
            padding: 6px 15px;
            border-radius: 5px;
            background-color: green;
            text-decoration: none;
            color: white;
            font-weigth: bold;
        }

        a:hover {
            transition: 0.5s;
            color: black;
            background-color: lightgreen;
        }
        
    </style>
</head> <!-- head -->
<body>

<table id="example" class="table table-striped" style="width:50%">
        <thead>
            <tr>
                <th>Nome</th> <!-- th -->
                <th>Telefone</th> <!-- th -->
                <th>E-mail</th> <!-- th -->
            </tr> <!-- tr -->
        </thead> <!-- thead -->
        <tbody>
        <?php

        $arr = $clientes['data'];

        foreach ($arr as $key => $value) {
        echo '<tr><td>'.$value['nome'].'</td>'. '<td>'.$value['telefone'].'</td>'. '<td>'.$value['email'].'</td>'.'</tr>';
        }
        ?>
        
        </tbody> <!-- tbody -->
    </table> <!-- table -->
<a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/clientes/cadastrar">Cadastrar Novo Cliente</a>
</body> <!-- body -->
</html> <!-- html -->