<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "pdoposts";

	//SET DSN 

	$dsn = 'mysql:host='.$host.';dbname='.$dbname; 

	//Create PDO instance

	$pdo = new PDO($dsn,$user,$pass);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	//PDO Query

	// $stmt = $pdo->query('SELECT * FROM post');

	// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	// 	echo $row['title'] . '<br>';
	// 	# code...
	// }

	// while ($row = $stmt->fetch()) {
	// 	echo $row->title . '<br>';
	// 	# code...
	// }

	#prepared statement(prepare & execute)
	//UNSAFE
	//$sql = "SELECT * FROM WHERE author = '$author'";

	#FETCH MULTIPLE POST

	//User Input
	$author = "axle";
	$is_published = true; 
	$id= 1;
	$limit = 1;

	#Positional PAram
	$sql  = 'SELECT * FROM post WHERE author = ? && is_published = ? LIMIT ?';
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$author,$is_published,$limit]);
	$post = $stmt->fetchAll();


	#NAMED PARAm

	// $sql  = 'SELECT * FROM post WHERE author = :author && is_published = :is_published';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['author' =>$author, 'is_published' => $is_published]);
	// $post = $stmt->fetchAll();

	// // var_dump($post);

	foreach ($post as $row) {
 
		echo $row->title . '<br>';
	}

	#Fetch Single post
	// $sql  = 'SELECT * FROM post WHERE id = :id';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['id' =>$id]);
	// $post = $stmt->fetch();

	// echo $post->body;

	#GET ROw count
	// $stmt = $pdo->prepare('SELECT *  FROM POST WHERE author = ? ');
	// $stmt->execute([$author]);
	// $post_count = $stmt->rowCount();

	// echo $post_count;

	#INSERT DATA
	// $title = "post five";
	// $body = "This is post five";
	// $author = "Alucard";
	// $sql = 'INSERT INTO post(title,body,author) Values (:title, :body, :author)';
	// $stmt= $pdo->prepare($sql);
	// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
	// echo "POst added";

	#UPDATE DATA
	// $id = 1;
	// $body = "This is post Updated";
	// $sql = 'UPDATE post SET body = :body WHERE id = :id';
	// $stmt= $pdo->prepare($sql);
	// $stmt->execute(['body' => $body, 'id' => $id]);
	// echo "POst UPDATED";

	#DELETE DATA
	// $id = 3;
	// $sql = 'DELETE FROM post WHERE id = :id';
	// $stmt= $pdo->prepare($sql);
	// $stmt->execute(['id' => $id]);
	// echo "POst DELETED";

	#SEarch DAta
	// $search = '%f%';
	// $sql = "SELECT * FROM Post WHERE title LIKE ? ";
	// $stmt= $pdo->prepare($sql);
	// $stmt->execute([$search]);
	// $post = $stmt->fetchAll();

	// foreach ($post as $row) {
		
	// 	echo $row->title . "<br>";
	// }

