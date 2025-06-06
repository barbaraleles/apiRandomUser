<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Random Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .user-card { margin: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 8px; }
    </style>
</head>
<body class="container mt-4">
    <h1 class="mb-4">Lista de Usuários Aleatórios</h1>
    <button id="loadUsers" class="btn btn-primary mb-4">Carregar Usuários</button>
    <div id="userList" class="row"></div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('loadUsers').addEventListener('click', function() {
            axios.get('/api/users')
                .then(response => {
                    const users = response.data.results;
                    const container = document.getElementById('userList');
                    container.innerHTML = '';
                    users.forEach(user => {
                        container.innerHTML += `
                            <div class="col-md-3 user-card">
                                <img src="${user.picture.large}" class="img-fluid rounded-circle mb-2">
                                <h5>${user.name.first} ${user.name.last}</h5>
                                <p>${user.email}</p>
                                <p><strong>País:</strong> ${user.location.country}</p>
                            </div>`;
                    });
                })
                .catch(error => {
                    console.error(error);
                    alert("Erro ao carregar usuários.");
                });
        });
    </script>
</body>
</html>