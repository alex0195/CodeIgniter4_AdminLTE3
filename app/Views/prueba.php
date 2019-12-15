<?php
// $db = \Config\Database::connect();

// $query = $db->query('SELECT * FROM app_acceso');
// $results = $query->getResult();

// foreach ($results as $row)
// {
//         echo "<div>Usuario: {$row->usuario} Nombre: {$row->nombre} Imagen: {$row->img}</div><hr/>";
// }

// echo 'Total Results: ' . count($results);
// echo base_url();

echo view('html/head.html');
echo view('html/nav.html');
echo view('html/sidebar.html');
echo view('html/content.html');
echo view('html/pie.html');
 ?>