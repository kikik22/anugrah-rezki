<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; background-color: #f4f4f4; }
        .container { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; border-radius: 5px; }
        button:hover { background-color: #45a049; }
        .hidden { display: none; }
        #error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <div id="login-page" class="container">
        <h2>Halaman Login</h2>
        <input type="text" id="username" placeholder="Masukkan username">
        <input type="password" id="password" placeholder="Masukkan password">
        <button onclick="login()">Login</button>
        <p id="error"></p>
    </div>

    <div id="dashboard-page" class="container hidden">
        <h2>Dashboard</h2>
        <p>Selamat datang di halaman utama!</p>
        <button onclick="showProfile()">Lihat Profil</button>
        <button onclick="logout()">Logout</button>
        <div id="profile" class="hidden" style="margin-top: 20px; text-align: left;">
            <h3>Profil</h3>
            <p>Nama: Anugrah rezki </p>
            <p>Email: @anugrah.com</p>
        </div>
    </div>

    <script>
        // Data login hardcoded (untuk demo; ganti dengan server-side di dunia nyata)
        const USERNAME_BENAR = "Anugrah Rezki";
        const PASSWORD_BENAR = "12345678";

        function login() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const error = document.getElementById('error');

            if (username === USERNAME_BENAR && password === PASSWORD_BENAR) {
                document.getElementById('login-page').classList.add('hidden');
                document.getElementById('dashboard-page').classList.remove('hidden');
                error.textContent = "";
            } else {
                error.textContent = "Login gagal. Username atau password salah.";
            }
        }

        function showProfile() {
            const profile = document.getElementById('profile');
            profile.classList.toggle('hidden');
        }

        function logout() {
            document.getElementById('dashboard-page').classList.add('hidden');
            document.getElementById('login-page').classList.remove('hidden');
            document.getElementById('username').value = "";
            document.getElementById('password').value = "";
            document.getElementById('profile').classList.add('hidden');
        }
    </script>
</body>
</html>