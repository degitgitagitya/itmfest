<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 9:08 AM
 */


$provinsi = array(
    "Aceh",
    "Bali",
    "Banten",
    "Bengkulu",
    "Gorontalo",
    "Jakarta",
    "Jambi",
    "Jawa Barat",
    "Jawa Tengah",
    "Jawa Timur",
    "Kalimantan Barat",
    "Kalimantan Selatan",
    "Kalimantan Tengah",
    "Kalimantan Timur",
    "Kalimantan Utara",
    "Kepulauan Bangka Belitung",
    "Kepulauan Riau",
    "Lampung",
    "Maluku",
    "Maluku Utara",
    "Nusa Tenggara Barat",
    "Nusa Tenggara Timur",
    "Papua",
    "Papua Barat",
    "Riau",
    "Sulawesi Barat",
    "Sulawesi Selatan",
    "Sulawesi Tengah",
    "Sulawesi Tenggara",
    "Sulawesi Utara",
    "Sumatera Barat",
    "Sumatera Selatan",
    "Sumatera Utara",
    "Yogyakarta"
);

?>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="<?php echo base_url('Login/submitRegistration') ?>">
					<span class="login100-form-title p-b-26">
						Sign Up
					</span>
                <span class="login100-form-title p-b-48">
                        <div class="img-fluid"><img height="70px" src="<?php echo base_url() ?>public/images/logo.png" alt=""></div>
					</span>

                <?php  if (isset($error)){  ?>

                    <p style="color: red;"><?php echo $error?></p>

                <?php } ?>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Masukan nama">
                    <input class="input100" type="text" name="nama">
                    <span class="focus-input100" data-placeholder="Nama"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Masukan password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Masukan konfirmasi password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password2">
                    <span class="focus-input100" data-placeholder="Konfirmasi Password"></span>
                </div>

                <p class="input100" style="color: grey;">Jenis Kelamin</p>

                <div class="btn-group btn-group-toggle mb-4" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="jeniskelamin" value="Laki-laki" id="lakilaki" autocomplete="off" checked> Laki laki
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="jeniskelamin" value="Perempuan" id="perempuan" autocomplete="off"> Perempuan
                    </label>
                </div>

                <p class="input100" style="color: grey;">Provinsi Asal</p>

                <div class="form-group">
                    <select name="provinsiasal" class="form-control" id="exampleFormControlSelect1">
                        <?php foreach ($provinsi as $item) {?>

                            <option value="<?php echo $item?>"><?php echo $item?></option>


                        <?php } ?>
                    </select>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Masukan tempat lahir">
                    <input class="input100" type="text" name="tempatlahir">
                    <span class="focus-input100" data-placeholder="Tempat Lahir"></span>
                </div>


                <p class="input100" style="color: grey;">Tanggal Lahir</p>

                <div class="form-group row">
                    <div class="col-10">
                        <input name="tanggallahir" class="form-control" type="date" value="2000-01-01" id="example-date-input">
                    </div>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Masukan umur">
                    <input class="input100" type="number" name="umur">
                    <span class="focus-input100" data-placeholder="Umur"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Masukan no telepon">
                    <input class="input100" type="number" name="notelp">
                    <span class="focus-input100" data-placeholder="No Telepon"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Masukan id Line">
                    <input class="input100" type="text" name="idline">
                    <span class="focus-input100" data-placeholder="ID Line"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Masukan id Instagram">
                    <input class="input100" type="text" name="idinstagram">
                    <span class="focus-input100" data-placeholder="ID Instagram"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Masukan instansi">
                    <input class="input100" type="text" name="instansi">
                    <span class="focus-input100" data-placeholder="Instansi"></span>
                </div>

                <p class="input100" style="color: grey;">Mahasiswa Pariwisata?</p>

                <div class="btn-group btn-group-toggle mb-4" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="pariwisata" id="ya" value="ya" autocomplete="off" checked> Ya
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="pariwisata" id="tidak" value="tidak" autocomplete="off"> Tidak
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

                    <a class="txt2" href="<?php echo base_url('Login') ?>">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
