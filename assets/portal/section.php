<?php

class login_app
{
	public $koneksi;
	public function login($data1, $data2, $submit)
	{
		// Check if session is not already started
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}

		if (isset($_POST[$submit])) {
			$this->koneksi;
			$username = $_POST[$data1];
			$password = $_POST[$data2];
			// proses login
			$login = mysqli_query($this->koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
			$row = mysqli_num_rows($login);
			$r = mysqli_fetch_array($login);

			if ($row > 0) {
				$_SESSION['idsppapp'] = $r['id'];
				echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
				echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: "Login Berhasil !"
                    }).then(() => {
                        window.location.href = "admin/index.php?m=dashboard";
                    });
                </script>';
			} else {
				echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
				echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Gagal Login...",
                        text: "Username atau password salah"
                    });
                </script>';
			}
		}
	}
}

$pro = new login_app();
$pro->koneksi = mysqli_connect('localhost', 'root', '', 'kp_spp');
$pro->login('username', 'password', 'submit');
