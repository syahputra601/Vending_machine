<div class="container pt-5">
    <!-- target="_blank" -->
    <a href="<?= base_url('Vanding/indexs');?>" class="btn btn-success mb-2" title='Go to'>Vanding Machines Version With Database</a>
    <center>
        <div class="card">
            <div class="card-header bg-info text-white">
                <h4 class="card-title">Vanding Machine Without DB</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="<?= base_url('vanding/get_food');?>" method="POST">
                    <table>
                        <tr>
                            <td>
                                <label class="">Makanan :</label>
                            </td>
                            <td>
                                <select class="form-control" name="food" id="food" required="">
                                    <option value=''>Pilih Makanan</option>
                                    <option value="biskuit">Biskuit - Rp. 6.000</option>
                                    <option value="chips">Chips - Rp. 8.000</option>
                                    <option value="oreo">Oreo - Rp 10.000</option>
                                    <option value="tango">tango - Rp 12.000</option>
                                    <option value="cokelat">coklat - Rp 15.000</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label class="">Pilih Nominal Uang :</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                         <tr>
                            <td colspan="">
                                <label class="">2.000</label>
                            </td>
                            <td>
                                <select class="form-control" name="duaribu" id="duaribu" onchange="sum()">
                                    <option value='0'>Pilih Jumlah Lembar</option>
                                    <?php
                                    for ($i=1; $i < 6; $i++) { 
                                    ?>
                                    <option value='<?= $i ?>'><?= $i ?> Lembar</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                         <tr>
                            <td colspan="">
                                <label class="">5.000</label>
                            </td>
                            <td>
                                <select class="form-control" name="limaribu" id="limaribu" onchange="sum()">
                                    <option value='0'>Pilih Jumlah Lembar</option>
                                    <?php
                                    for ($i=1; $i < 6; $i++) { 
                                    ?>
                                    <option value='<?= $i ?>'><?= $i ?> Lembar</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                         <tr>
                            <td colspan="">
                                <label class="">10.000</label>
                            </td>
                            <td>
                                <select class="form-control" name="sepuluhribu" id="sepuluhribu" onchange="sum()">
                                    <option value='0'>Pilih Jumlah Lembar</option>
                                    <?php
                                    for ($i=1; $i < 3; $i++) { 
                                    ?>
                                    <option value='<?= $i ?>'><?= $i ?> Lembar</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                         <tr>
                            <td colspan="">
                                <label class="">20.000</label>
                            </td>
                            <td>
                                <select class="form-control" name="duapuluhribu" id="duapuluhribu" onchange="sum()">
                                    <option value='0'>Pilih Jumlah Lembar</option>
                                    <?php
                                    for ($i=1; $i < 2; $i++) { 
                                    ?>
                                    <option value='<?= $i ?>'><?= $i ?> Lembar</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                         <tr>
                            <td colspan="">
                                <label class="">50.000</label>
                            </td>
                            <td>
                                <select class="form-control" name="limapuluhribu" id="limapuluhribu" onchange="sum()">
                                    <option value='0'>Pilih Jumlah Lembar</option>
                                    <?php
                                    for ($i=1; $i < 2; $i++) { 
                                    ?>
                                    <option value='<?= $i ?>'><?= $i ?> Lembar</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                         <tr>
                            <td colspan="">
                                <label class="">Total Uang Diterima</label>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="uang_diterima" id="uang_diterima" readonly="" required="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 25px;"></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Dapat Menerima Uang :</p>
                            </td>
                            <td>
                                <p style="background-color: red;"><b>2000, 5000, 10000, 20000, 50000</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success">Ambil</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </center>
</div>