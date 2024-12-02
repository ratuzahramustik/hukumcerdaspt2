<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Form</title>
    <style>
        /* Gaya CSS sama seperti sebelumnya */
        body {
            font-family: Arial, sans-serif;
            background-color: #5b1414;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card-container {
            background-color: #7c2323;
            color: #f2e0bc;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 550px;
        }

        h1 {
            margin-bottom: 25px;
            color: white;
            font-size: 26px;
            text-align: center;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .form-group .left,
        .form-group .right {
            width: 48%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #f2e0bc;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #d1b693;
            background-color: #fff;
            color: black;
        }

        input[type="submit"] {
            background-color: #d1b693;
            color: black;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #bfa17b;
        }
    </style>
    <!-- Tambahkan pustaka SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<div class="card-container">
    <h1>Edit User</h1>
    <form id="editUserForm" action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="left">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="">
            </div>
            <div class="right">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="">
            </div>
        </div>

        <div class="form-group">
            <div class="left">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="">
            </div>
            <div class="right">
                <label for="telephone">Telephone</label>
                <input type="text" id="telephone" name="telephone" value="">
            </div>
        </div>

        <div class="form-group">
            <div class="left">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" value="">
            </div>
            <div class="right">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="">
            </div>
        </div>

        <div class="form-group">
            <div class="left">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki laki">Laki laki</option>
                </select>
            </div>
            <div class="right">
                <label for="agama">Agama</label>
                <select id="agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="left">
                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
        </div>

        <!-- Form input lainnya tetap sama -->

        <input type="submit" value="Update">
    </form>
</div>

<script>
    // Tangkap form
    const form = document.getElementById('editUserForm');

    // Tambahkan event listener untuk submit
    form.addEventListener('submit', function(event) {
        // Hentikan pengiriman form
        event.preventDefault();

        // Tampilkan alert konfirmasi
        Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna menekan "Save", kirim form
                Swal.fire("Saved!", "", "success").then(() => {
                    form.submit();
                });
            } else if (result.isDenied) {
                // Jika pengguna menekan "Don't save", tampilkan info
                Swal.fire("Changes are not saved", "", "info");
            }
        });
    });
</script>

</body>
</html>
