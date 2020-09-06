<?php
require("connectPDO.php");
function testSession(){
	if(!isset($_SESSION['utilisateur_id']))
	{
		header('Location: connection.php');
		exit;
	}
}
function query($sql, $vars = NULL, $debug = false) {
		
	if ($debug==true){
		$sql_debug = $sql;
		if (count($vars)>0){
			foreach($vars as $key => $value){
				// echo $key." : ".$value."<br/>";
				$sql_debug = str_replace($key, "'".str_replace("'", "''", $value)."'", $sql_debug);
			}
		}
		echo "<pre>";print_r($sql_debug);
	}	
	$res = $GLOBALS['conn']->prepare($sql);	
	if ($res === FALSE) {
		return FALSE;
	}

	$result = $res->execute($vars);
	if ($result !== FALSE) {
		return $res;
	}
	
	
	// Erreur
	$error = $res->errorInfo();
	$file = __FILE__;
	$line = __LINE__;
	if ($file || $line){
		//log_sql_error($sql,$error[2]);
		Kill($sql.$error[2], $file, $line);
	}
	
	return(false);
}



function Kill($msg = "", $file = null, $line = null)
{
	if ($msg)
	{	if ($file)
		{	$msg .= " dans {$file}";
			if ($line)
				$msg .= ", ligne {$line}";
		}
		$msg .= " :\n";
	}
	elseif ($file)
	{	$msg = $file;
		if ($line)
			$msg .= ", ligne {$line}";
		$msg .= " :\n";
	}
	die("<font color='red'>".$msg."</font>");
}


function fetch_object($req) {
	return $req->fetchObject();
}

function last_insert_id($table=NULL){
    return $GLOBALS['conn']->lastInsertId($table);
}

function updateDefault($id, $table, $name_id, $tabData, $debug = false){
	$data = $tabData;
	$vars = array();
	foreach($data as $key => $value) {
		if($value=="")
			$value=NULL;
		else
		    $value = trim($value);

		$vars[":".$key] = $value;
	}

	$sql = "SELECT * FROM ".$table." WHERE ".$name_id." = :id ";
	$res = query($sql, array(":id"=>$id));
	if ($row = fetch_object($res)){
		$pack_fields = array();

		foreach($data as $key => $value) {
			$pack_fields[] = "`".$key."` = :".$key;
		}

		$sql = "UPDATE ".$table." SET  ".implode(',', $pack_fields)." WHERE ".$name_id." = :".$name_id."";
		$vars[":".$name_id] = $id;
		query($sql, $vars, $debug);

		
	} else {
		$pack_values = array();
		$champ = array();
		foreach($data as $key => $value) {
			$pack_values[] = ":".$key;
			$champs[] = $key;
		}
		$sql = "INSERT INTO ".$table." (`".implode('`,`',$champs)."`) VALUES (".implode(',', $pack_values).")";
		query($sql, $vars, $debug);
		$id = last_insert_id($table);

	}

	return $id;
}

function debug($variable)
{

    echo '<pre>' . print_r($variable, true) . '</pre>';
}
?>