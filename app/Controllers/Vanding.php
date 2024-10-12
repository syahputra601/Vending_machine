<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Vanding_model;

class Vanding extends Controller
{

    public function index()
    {
        $model = new Vanding_model;
        $data['title']     = 'Vanding Machines - PT. Inspiro';
        echo view('header_view', $data);
        echo view('vanding/index', $data);
        echo view('footer_view', $data);
    }

    public function indexs()
    {
        $model = new Vanding_model;
        $data['title']     = 'Vanding Machines With DB - PT. Inspiro';
        $data['getFood'] = $model->getFood();
        echo view('header_view', $data);
        echo view('vanding/indexs', $data);
        echo view('footer_view', $data);
    }

    public function get_food(){
        $model = new Vanding_model;
        $food = $this->request->getPost('food');
        $uang_diterima = $this->request->getPost('uang_diterima');
        //start hardcode stok food app syahputra
        // print_r($food);
        // die();
        $stok_biskuit = 2;
        $stok_chips = 2;
        $stok_oreo = 2;
        $stok_tango = 1;
        $stok_cokelat = 0;
        //end hardcode stok food app syahputra
        //harga food
        $price_biskuit = 6000;
        $price_chips = 8000;
        $price_oreo = 10000;
        $price_tango = 12000;
        $price_cokelat = 15000;
        //harga food
        //start cek stok food
        if($food == 'biskuit' && $stok_biskuit == 0){
            echo '<script>
                alert("Stok Biskuit Kosong");
                window.location="'.base_url('Vanding').'"
            </script>';
        }elseif($food == 'chips' && $stok_chips == 0){
            echo '<script>
                alert("Stok Chips Kosong");
                window.location="'.base_url('Vanding').'"
            </script>';
        }elseif($food == 'oreo' && $stok_oreo == 0){
            echo '<script>
                alert("Stok Oreo Kosong");
                window.location="'.base_url('Vanding').'"
            </script>';
        }elseif($food == 'tango' && $stok_tango == 0){
            echo '<script>
                alert("Stok Tango Kosong");
                window.location="'.base_url('Vanding').'"
            </script>';
        }elseif($food == 'cokelat' && $stok_cokelat == 0){
            echo '<script>
                alert("Stok Cokelat Kosong");
                window.location="'.base_url('Vanding').'"
            </script>';
        }else{
            //start jika dana kurang
            if($food == 'biskuit' && $uang_diterima < $price_biskuit){
                echo '<script>
                    alert("Dana Anda Kurang! Silahkan Masukan Uang Sesuai Dengan Harga Makanan.");
                    window.location="'.base_url('Vanding').'"
                </script>';
            }elseif($food == 'chips' && $uang_diterima < $price_chips){
                echo '<script>
                    alert("Dana Anda Kurang! Silahkan Masukan Uang Sesuai Dengan Harga Makanan.");
                    window.location="'.base_url('Vanding').'"
                </script>';
            }elseif($food == 'oreo' && $uang_diterima < $price_oreo){
                echo '<script>
                    alert("Dana Anda Kurang! Silahkan Masukan Uang Sesuai Dengan Harga Makanan.");
                    window.location="'.base_url('Vanding').'"
                </script>';
            }elseif($food == 'tango' && $uang_diterima < $price_tango){
                echo '<script>
                    alert("Dana Anda Kurang! Silahkan Masukan Uang Sesuai Dengan Harga Makanan.");
                    window.location="'.base_url('Vanding').'"
                </script>';
            }elseif($food == 'cokelat' && $uang_diterima < $price_cokelat){
                echo '<script>
                    alert("Dana Anda Kurang! Silahkan Masukan Uang Sesuai Dengan Harga Makanan.");
                    window.location="'.base_url('Vanding').'"
                </script>';
            }else{
                //start kembalian dana
                if($food == 'biskuit'){
                    $kembalian_dana = $uang_diterima - $price_biskuit;
                }elseif($food == 'chips'){
                    $kembalian_dana = $uang_diterima - $price_chips;
                }elseif($food == 'oreo'){
                    $kembalian_dana = $uang_diterima - $price_oreo;
                }elseif($food == 'tango'){
                    $kembalian_dana = $uang_diterima - $price_tango;
                }elseif($food == 'cokelat'){
                    $kembalian_dana = $uang_diterima - $price_cokelat;
                }else{
                    $kembalian_dana = $uang_diterima - 0;
                }
                echo '<script>
                        alert("Kembalian Dana : Rp. '.$kembalian_dana.' Terimakasih dan Selamat Menikmati.");
                        window.location="'.base_url('Vanding').'"
                    </script>';
                //end kembalian dana
            }
            //end jika dana kurang
        }
        //end cek stok food
    }

    public function get_foods(){
        $model = new Vanding_model;
        $food = $this->request->getPost('food');
        $uang_diterima = $this->request->getPost('uang_diterima');
        //start hardcode stok food app syahputra
        // print_r($food);
        // die();
        $getFood = $model->getFood($food)->getRow();
        if(isset($getFood)){
            $data['food'] = $getFood;
            $DataFood = $getFood;
            $StokFood = $DataFood->stok;
            if($DataFood->stok == 0){
                echo '<script>
                    alert("Stok '.$food.' Kosong");
                    window.location="'.base_url('Vanding/indexs').'"
                </script>';
            }else{
                if($uang_diterima < $DataFood->harga){
                    echo '<script>
                        alert("Dana Anda Kurang! Silahkan Masukan Uang Sesuai Dengan Harga Makanan.");
                        window.location="'.base_url('Vanding/indexs').'"
                    </script>';
                }else{
                    //start update stok food
                    $StokMin = $StokFood - 1;
                    $dataUpdate = array(
                        'stok' => $StokMin
                    );
                    $model->editFood($dataUpdate,$food);
                    //end update stok food
                    $kembalian_dana = $uang_diterima - $DataFood->harga;
                     echo '<script>
                        alert("Kembalian Dana Anda : Rp. '.$kembalian_dana.' Terimakasih dan Selamat Menikmati.");
                        window.location="'.base_url('Vanding/indexs').'"
                    </script>';
                }
            }
        }else{
            echo '<script>
                    alert("Food '.$food.' Tidak ditemukan");
                    window.location="'.base_url('vanding/indexs').'"
                </script>';
        }
    }

}