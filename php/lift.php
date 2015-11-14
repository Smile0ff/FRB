<?php
	sleep(2);

	if($_POST["count"]){

		$response = array(
			[
				"photo" => "apartment.jpg",
				"date" 	=> "14 листопада 2015р.",
				"title"	=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum ipsum in erat egestas.",
				"text" 	=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam officia, libero, illum, quisquam porro natus officiis, fuga error cum odit provident veritatis deserunt alias maiores aliquam commodi iste distinctio esse!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quam sit quo fuga veritatis eaque voluptatibus, autem, animi soluta quae adipisci eos eveniet, accusamus labore ut numquam aut nemo suscipit."
			],
			[
				"photo" => "apartment.jpg",
				"date" 	=> "14 листопада 2015р.",
				"title"	=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum ipsum in erat egestas.",
				"text" 	=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam officia, libero, illum, quisquam porro natus officiis, fuga error cum odit provident veritatis deserunt alias maiores aliquam commodi iste distinctio esse!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quam sit quo fuga veritatis eaque voluptatibus, autem, animi soluta quae adipisci eos eveniet, accusamus labore ut numquam aut nemo suscipit."
			],
			"isLast" => false
		);

		echo json_encode($response);
	}
	
?>