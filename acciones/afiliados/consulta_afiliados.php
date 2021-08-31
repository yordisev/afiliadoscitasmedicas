<?php

require_once "../../config/database.php";

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'id',
    1 => 'numero', 
	2 => 'pnombre',
	3 => 'papellido',
    4 => 'estado' 
);

$sql = "SELECT id, numero, pnombre, papellido, estado ";
$sql.=" FROM db_afiliados";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT id, numero, pnombre, papellido, estado ";
	$sql.=" FROM db_afiliados";
	$sql.=" WHERE numero LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR pnombre LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR papellido LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR estado LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql);
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql); // again run query with limit
	
} else {	

	$sql = "SELECT id, numero, pnombre, papellido, estado ";
	$sql.=" FROM db_afiliados";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql);
	
}


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
	
	$nestedData[] = $row["id"];
	$nestedData[] = '<td><center>
                     <a href="historial_afi.php?id='.$row['numero'].'"  data-toggle="tooltip" title="Editar datos" class="btn btn-info btn-xs"><i class="fa fa-eye"></i>Ver</a>
				     </center></td>';	
    $nestedData[] = $row["numero"];
	$nestedData[] = $row["pnombre"];
	$nestedData[] = $row["papellido"];
	if ($row["estado"] == 'ACTIVO'){
		$nestedData[] =  $row["estado"] = '<center><span class="label label-primary">Activo</span><center>';
	} else if ($row["estado"] == 'INACTIVO') {
		$nestedData[] =	$row["estado"] = '<center><span class="label label-success">Inactivo</span><center>';
	}
   
    $nestedData[] = '<td><center>
	                 <a href="#" data-toggle="modal" data-target="#editarafiliado" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                     <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
				     </center></td>';		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			// "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
