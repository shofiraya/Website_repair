<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbrepair";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function input($data, $id)
{
    global $conn;

    $status = "proses";
    $elektronik = $data['elektronik'];
    $merek = $data['merek'];
    $deskripsi = $data['deskripsi'];
    $tanggal = $data['tanggal'];
    $jam = $data['jam'];
    $tanggal_sekarang = date("Y-m-d");
    $jam_sekarang = date("H:i:s");
    $query = "INSERT INTO `pemesanan` VALUES ('', '$id', '$elektronik', '$merek', '$deskripsi', '$status', '$tanggal', '$jam', '$tanggal_sekarang', '$jam_sekarang')";

    mysqli_query($conn, $query);
    $affectedRows = mysqli_affected_rows($conn);

    // Menutup koneksi
    $conn->close();

    return $affectedRows;
}

function registrasi($data)
{
    global $conn;

    $level = 'pelanggan';
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if (!$email && !$password) {
        echo "<script>alert('Gagal Registrasi');window.location.href='registrasi.php';</script>";
        die();
    }
    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi Password tidak sesuai');window.location.href='registrasi.php';</script>";
        die();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email tidak valid'); window.location.href='registrasi.php';</script>";
        die();
    }
    if (strlen($password) < 8) {
        echo "<script>alert('Password harus terdiri dari minimal 8 karakter'); window.location.href='registrasi.php';</script>";
        die();
    }
    //cek username
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email='$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah terdaftar'); window.location.href='registrasi.php';</script>";
        die();
    }
    //enkripsi password(mengamankan password)
    $password = password_hash($password, PASSWORD_DEFAULT);

    //memasukkan ke database
    if (mysqli_query($conn, "INSERT INTO user VALUES ('','$email','$password', '$level')")) {
        $id = mysqli_insert_id($conn); // Mendapatkan ID terakhir yang di-generate oleh server
        header("location: biodata.php?id=$id");
    }

}

function biodata($id, $data)
{
    global $conn;

    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $nomor_hp = $data['nomor_hp'];
    $query = "INSERT INTO `pelanggan` VALUES ('', '$id', '$alamat', '$nomor_hp', '$nama')";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Berhasil menambahkan data.");</script>';
        header("Location: login.php");
        exit;
    } else {
        echo '<script>alert("Gagal menambahkan data.");</script>';
    }
}

function login($data)
{
    global $conn;
    $email = $data["email"];
    $password = $data["password"];

    

    $result = mysqli_query($conn, "SELECT pelanggan.id_pelanggan,user.id_user, user.email, user.password, user.role
            FROM pelanggan 
            JOIN user ON pelanggan.id_user = user.id_user 
            WHERE user.email = '$email'");

    // cek email

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            if ($row["role"] == 'pelanggan') {
                // set session
                $_SESSION["login_pelanggan"] = true;
                $_SESSION["role"] = 'pelanggan';
                $_SESSION["pelanggan"] = $row['id_pelanggan'];
                $_SESSION["user"] = $row['id_user'];


                // cek remember me
                if (isset($data['cekbox'])) {
                    setcookie('id', $row['id_user'], time() + 60);
                    setcookie('key', hash('sha256', $row['email']), time() + 60);
                }

                header("Location: index.php");
                exit;
            } else {
                echo "error";
            }
        } else {
            $error_message = "Gagal login";
        }
    } else {
        $error_message = "Gagal login";
    }


    // Menambahkan return untuk error message
    return $error_message;
}
function update_profil($data, $id){
    global $conn;
    $nama=$data['nama'];
    $no_hp=$data['no_hp'];
    $alamat=$data['alamat'];
    mysqli_query($conn,"UPDATE pelanggan SET nama='$nama', nomor_hp='$no_hp',alamat='$alamat' WHERE id_pelanggan='$id'");
}
?>