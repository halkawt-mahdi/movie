<?php 
require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Review Platform </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;500;900&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
<link href="assets/css/datagrid.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.3.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.3.1/firebase-analytics.js";
  import { getFirestore, collection, query as firestoreQuery, where, getDocs, addDoc} from "https://www.gstatic.com/firebasejs/10.3.1/firebase-firestore.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDWvEJMGfJUxtYHuwZXt56CqwAtuzhaBvs",
    authDomain: "blissful-flames-375320.firebaseapp.com",
    projectId: "blissful-flames-375320",
    storageBucket: "blissful-flames-375320.appspot.com",
    messagingSenderId: "505675792902",
    appId: "1:505675792902:web:98c30b5101be5f49443987",
    measurementId: "G-FZBP84RYG7"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const db = getFirestore(app);
    // Function to add data to Firestore
    function addDataToFirestore() {
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const review = document.getElementById("review").value;
      const movieId = document.getElementById("movieid").innerHTML;

      const dataToAdd = {
        id: movieId,
        name: name,
        email: email,
        review: review,
      };

      // Reference to the "users" collection
      const usersCollection = collection(db, "reviews");

      // Add the data to the collection
      addDoc(usersCollection, dataToAdd)
    .then((docRef) => {
      console.log("Document written with ID: ", docRef.id);
    //   alert("Data added successfully!");
    })
    .catch((error) => {
      console.error("Error adding document: ", error);
    //   alert("Error adding data to Firestore.");
    });
    }
    document.getElementById("submitBtn").addEventListener("click", addDataToFirestore);
// Function to get reviews for a specific movie ID
</script>
</head>
<body>
