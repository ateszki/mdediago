<?php
require_once 'qa-include/qa-base.php';

	require_once QA_INCLUDE_DIR.'db/selects.php';
	require_once QA_INCLUDE_DIR.'app/q-list.php';
	//require_once QA_INCLUDE_DIR.'app/users.php';


	//$user = qa_get_logged_in_user();
	//$userid=$user["userid"];//qa_get_logged_in_userid();
	
	
	
	list($questions, $categories, $categoryid)=qa_db_select_with_pending(
		qa_db_qs_selectspec(null, 'hotness', 0,null,null,false,true),
		qa_db_category_nav_selectspec(null, false, false, true),
		null
	);

	foreach ($questions as $key => $question) {
		$questionid = $question["postid"];
		$answers=array();

		$childposts=qa_db_single_select(qa_db_full_child_posts_selectspec(null, $questionid));

		foreach ($childposts as $postid => $post){
			if ($post['basetype']=='A')
				$answers[$postid]=$post;
		}

		$questions[$key]["answers"] = $answers;
	}
	
	$salida = [];

	foreach ($questions as $pregunta) {
		$salida[$pregunta["postid"]] = [
			'userid'=>$pregunta["userid"],
			'contenido'=>substr($pregunta["title"].". ".strip_tags($pregunta["content"]),0,100),
		];
		foreach ($pregunta["answers"] as $resp){
			//$u = Medico::where('user_id','=',$resp["userid"])->first();
			//if($u){
				$salida[$pregunta["postid"]]["respuestas"][] = [
					"userid"=>$resp["userid"],
					"contenido"=>substr(strip_tags($resp["content"]),0,100),
					//"nombre"=>$u->nombre,
					//"apellido"=>$u->apellido,
					//"titulo"=>$u->titulo,
				];
			//}
		}
	}
	header('Content-Type: application/json');
	echo json_encode($salida);
	//print_r($salida);