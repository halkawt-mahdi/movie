<?php
require __DIR__. '/../libs/gc/vendor/autoload.php'; // Path to your autoload file
use Google\Cloud\Core\ExponentialBackoff;
use Google\Cloud\Firestore\FirestoreClient;

if(isset($_GET['movieID'])){
$config = [
    'projectId' => 'blissful-flames-375320',
];
// echo $_SESSION['id_token'];
$firestore = new FirestoreClient($config);
$collection = $firestore->collection('reviews');

// Query Firestore data as needed
$query = $collection->where('id', '==', $_GET['movieID']);
$documents = $query->documents();

foreach ($documents as $document) {
    // Access document data
    $data = $document->data();
}
echo json_encode($data);
}else{
    echo "Access Denied";
}