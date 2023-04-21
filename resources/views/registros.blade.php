@extends('layouts.app')

<title>Document</title>
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="form-group">
          <input type="text" class="form-control" id="searchInput" placeholder="Buscar numeros de telefono">
        </div>
    <h5>Registros en la aplicación móvil</h5>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Remitente</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Número de emergencia</th>
        </tr>
      </thead>
      <tbody id="tbody">

      </tbody>
    </table>
  </div>
  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
  <script>
    // TODO: Replace the following with your app's Firebase project configuration
    // See: https://support.google.com/firebase/answer/7015592
    const firebaseConfig = {
  apiKey: "AIzaSyCF7oWD3JwsmW6HrUgA1cVs5EdUAJPCRUc",
  authDomain: "panicbutton-963c2.firebaseapp.com",
  projectId: "panicbutton-963c2",
  storageBucket: "panicbutton-963c2.appspot.com",
  messagingSenderId: "439939072575",
  appId: "1:439939072575:web:f95f68d9319c0be35f2e8a"
};

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    // Initialize Cloud Firestore and get a reference to the service
    const db = firebase.firestore();

    // Get Data
    const collectionRef = db.collection('users');
    const tbody = document.querySelector('#tbody');
    const searchInput = document.querySelector('#searchInput');
    collectionRef.get().then(querySnapshot => {
      querySnapshot.forEach(doc => {
        const data = doc.data();
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${data.phone}</td>
          <td>${data.name}</td>
          <td>${data.lastName}</td>
          <td>${data.phone2}</td>
          `;
          tbody.appendChild(tr);
      });

      // Search Functionality
      searchInput.addEventListener('keyup', function() {
        const value = searchInput.value.trim().toLowerCase();
        tbody.innerHTML = '';
        collectionRef.where('phone', '>=', value).where('phone', '<=', value + '\uf8ff').get().then(querySnapshot => {
          querySnapshot.forEach(doc => {
            const data = doc.data();
            const tr = document.createElement('tr');
            tr.innerHTML = `
              <td>${data.phone}</td>
              <td>${data.name}</td>
              <td>${data.lastName}</td>
              <td>${data.phone2}</td>
              `;
            tbody.appendChild(tr);
          });
        });
      });
    });
  </script>
</body>
</html>
@endsection