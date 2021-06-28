$(document).ready(function() {
    count_summary();
    $('#dropshipper1').hide();
    $('#dropshipper2').hide();
    $('#dropshipper3').hide();
    $('#loadingpage').hide();
    $('#loadingbutton').hide();
    $("#kurir").on("change", function cost(e) {
        e.preventDefault();
        var option = $('option:selected', this).val();
        var des = $('#kecamatan').val();
        var weight = '<?php  if(!empty($ordershiping->idorder)){ echo $ordershiping->totalWeight;} ?>';

        if (weight === '0' || weight === '') {
            alert('null');
        } else if (option === '') {
            alert('null');
        } else if (des == 0) {
            $('html, body').animate({
                scrollTop: $(".container").offset().top
            }, 2000);
            swal("", "Lengkapi alamat pengiriman terlebih dahulu", "error");
        } else {
            getOrigin(des, weight, option);
        }
    });

    function getOrigin(des, weight, cour) {
        $('.loading').remove();
        var str = "'";
        var $op = $("#datakurir");
        var i, j, x = "";
        var add = <?php echo $shipinggateway->upCost; ?>;
        $('#datakurir').after('<div class="loading"><i class="fa fa-spinner fa-pulse fa-2x fa-fw color0"></i>loading service...</div');
        $.getJSON("<?php echo base_url('d/Shipinggateway/get_cost/') ?>" + des + "/" + weight + "/" + cour, function(data) {
            if (data.rajaongkir.status.code != "200") {
                swal("", "" + data.rajaongkir.status.description + "", "error");
            } else if (data.rajaongkir.results[0].costs == '') {
                swal("", "" + data.rajaongkir.results[0].name + ", Tidak mendukung pengiriman ini", "error");
            } else {
                $.each(data.rajaongkir.results, function(i, field) {
                    for (i in field.costs) {
                        for (j in field.costs[i].cost) {
                            x += ('<tr><td><div class="form-check"><label class="form-check-label"><input type="radio" class="form-check-input" name="shiping" id="shiping" onclick="set_ongkir(' + str + (parseInt(field.costs[i].cost[j].value) + parseInt(add)) + str + ')" value="' + field.name + ' - ' + field.costs[i].service + '" required> ' + '( ' + field.code + ' )' + " - " + field.costs[i].service + ' - ' + field.costs[i].description + ' (ESTIMASI ' + field.costs[i].cost[j].etd + ' hari) - Rp.' + number_idr((field.costs[i].cost[j].value + add)) + '</label></div></td></tr>');
                        }
                    }
                    $op.html(x);
                });
            }
            $('.loading').remove();
        });
    }

    function getProvinsi() {
        var $op = $("#provinsi");
        $('.loading').remove();
        $('#provinsi').after('<i class="fa fa-spinner fa-pulse fa-2x fa-fw loading color0"></i>');
        $.getJSON("<?php echo base_url('') ?>d/Shipinggateway/get_provinsi", function(data) {
            $.each(data, function(i, field) {
                $op.append('<option value="' + field.province_id + '">' + field.province + '</option>');
            });
            $('.loading').remove();
        });
    }
    getProvinsi();

    $("#provinsi").on("change", function(e) {
        e.preventDefault();
        var option = $('option:selected', this).val();
        $('#kabupaten option:gt(0)').remove();

        if (option === '') {
            alert('null');
            $("#kabupaten").prop("disabled", true);

        } else {
            $("#kabupaten").prop("disabled", false);
            getKota(option);
        }
    });

    $("#kabupaten").on("change", function(e) {
        e.preventDefault();
        var option = $('option:selected', this).val();
        $('#kecamatan option:gt(0)').remove();
        if (option === '') {
            alert('null');
            $("#kecamatan").prop("disabled", true);
        } else {
            $("#kecamatan").prop("disabled", false);
            getKecamatan(option);
        }
    });

    function getKota(idpro) {
        var $op = $("#kabupaten");
        $('.loading').remove();
        $('#kabupaten').after('<i class="fa fa-spinner fa-pulse fa-2x fa-fw loading color0"></i>');
        $.getJSON("<?php echo base_url('') ?>d/Shipinggateway/get_kota/" + idpro, function(data) {
            $.each(data, function(i, field) {
                $op.append('<option value="' + field.city_id + '">' + field.type + ' ' + field.city_name + '</option>');
            });
            $('.loading').remove();
        });
    }

    function getKecamatan(idkot) {
        var $op = $("#kecamatan");
        $('.loading').remove();
        $('#kecamatan').after('<i class="fa fa-spinner fa-pulse fa-2x fa-fw loading"></i>');
        $.getJSON("<?php echo base_url('d/Shipinggateway/get_kecamatan/') ?>" + idkot, function(data) {
            $.each(data, function(i, field) {
                $op.append('<option value="' + field.subdistrict_id + '">' + field.subdistrict_name + '</option>');
            });
            $('.loading').remove();
        });
    }
});

function place_order() {
    var valid = $("#form-custommer").valid();
    var idbank = $('#idbank').val();
    var biayapengiriman = $('#biayapengiriman').val();
    if (valid == true) {
        if (biayapengiriman == '') {
            $('html, body').animate({
                scrollTop: $("#optionkurir").offset().top
            }, 2000);
            swal("", "Pilih Jasa Pengiriman Barang", "error");
        } else if (idbank == '') {
            $('html, body').animate({
                scrollTop: $("#listbank").offset().top
            }, 2000);
            swal("", "Pilih Metode Pembayaran", "error");
        } else {
            $('#loadingpage').show();
            $("#loadingpage").addClass("loadingfull");
            var form = $('#form-custommer').get(0);
            var form_data = new FormData(form);
            $('#loader').show();
            $.ajax({
                url: '<?php echo base_url('
                Order / place_order ') ?>',
                method: "POST",
                data: form_data,
                contentType: false,
                processData: false,
                dataType: "json",
                accepts: {
                    json: 'application/json'
                },
                success: function(resp) {
                    if (resp.status == 0) {
                        $("#loadingpage").removeClass("loadingfull");
                        swal("" + resp.message);
                        setTimeout(function() {
                            $('#loadingpage').hide();
                            window.location.href = resp.redirect;
                        }, 3000);
                    } else if (resp.status == 1) {
                        setTimeout(function() {
                            $("#loadingpage").removeClass("loadingfull");
                            $('#loadingpage').hide();
                            window.location.href = resp.redirect;
                        }, 4000);
                    }
                    $('.progress').hide();
                    $('#loader').hide();
                },
                error: function(resp) {
                    $("#loadingpage").removeClass("loadingfull");
                    $('#loadingpage').hide();
                    swal("error upload, error_code: " + resp.status);
                }
            });
        }
    } else {
        $("#loadingpage").removeClass("loadingfull");
        $('#loadingpage').hide();
        $('html, body').animate({
            scrollTop: $(".container").offset().top
        }, 2000);
    }
}

function set_bank() {
    var idbank = $("input[type='radio'][name='bank']:checked").val();
    $('#idbank').val(idbank);
}

function set_ongkir(idr) {
    $('#loadingpage').show();
    $("#loadingpage").addClass("loadingfull");
    $('#biayapengiriman').val(idr);
    var idr = number_idr(parseInt(idr));
    var idr = 'Rp. ' + idr + '';
    $('#jumlahongkir').html(idr);
    var shiping = $("input[type='radio'][name='shiping']:checked").val();
    var set_shipingdesc = $('#shipingdesc').val(shiping);
    count_summary();
}

function number_idr(v) {
    var value = v.toLocaleString(undefined, { minimumFractionDigits: 0 });
    return value;
}

function dropshipper() {
    var checkBox = document.getElementById("dropshippercheck");
    var text1 = document.getElementById("dropshipper1");
    var text2 = document.getElementById("dropshipper2");
    var text3 = document.getElementById("dropshipper3");
    if (checkBox.checked == true) {
        text1.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "block";
        document.getElementById("dropshippername").required = true;
        document.getElementById("dropshipperphone").required = true;
        document.getElementById("dropshipperaddress").required = true;
    } else {
        text1.style.display = "none";
        text2.style.display = "none";
        text3.style.display = "none";
        document.getElementById("dropshippername").required = false;
        document.getElementById("dropshipperphone").required = false;
        document.getElementById("dropshipperaddress").required = false;
    }
}

function count_summary() {
    var cart_total = '<?php if(empty($this->cart->total())){echo $orderresult->cartTotal;}else{ echo $this->cart->total();} ?>';
    var biayapengiriman = $('#biayapengiriman').val();
    var voucherprice = $('#jumlahvoucher').val();
    var discountpartner = $('#discountpartner').val();
    if (biayapengiriman !== '') {
        biayapengiriman = parseInt(biayapengiriman);
    }
    if (voucherprice !== "") {
        voucherprice = parseInt(voucherprice);
    }
    if (discountpartner !== "") {
        discountpartner = parseInt(discountpartner);
    }

    var summary;
    summary = (parseInt(cart_total) - discountpartner) - voucherprice;
    summary = summary + biayapengiriman;
    summary = number_idr(parseInt(summary));
    summary = "Rp." + summary;
    $('#summaryorder').html(summary);
    setTimeout(function() {
        $("#loadingpage").removeClass("loadingfull");
        $('#loadingpage').hide();
    }, 2000);
}

function applyVoucher() {
    $('.loading').remove();
    var voucher = $('#vouchercode').val();
    var totalprice = '<?php if(empty($this->cart->total())){echo $orderresult->cartTotal;}else{ echo $this->cart->total();} ?>';
    if (voucher === "") {
        document.getElementById("vouchercode").focus();
    } else {
        $('#voucher').after('<i class="fa fa-spinner fa-pulse fa-2x fa-fw loading color0"></i>');
        $.ajax({
            url: "<?php echo site_url('d/Marketing/search_code_voucher'); ?>",
            method: "POST",
            data: { voucher: voucher, totalprice: totalprice },
            success: function(data) {
                $('#voucher').html(data);
                $('.loading').remove();
            }
        });
    }
}

function useVoucher(value, id, name, code, desc) {
    $('#loadingpage').show();
    var coupon = '<div class="coupons">\
            <div class="coupon ">\
            <div class="coupon-intro">\
            <h4>Voucher ' + name + '</h4>\
            <ul>\
            <li>' + desc + '</li>\
            <li>Kode : ' + code + '</li>\
            </ul>\
            </div>\
            <div class="coupon-value">\
            RP. ' + number_idr(parseInt(value)) + '\
            </div>\
            </div>\
            </div>\
            <button class="btn btn-sm btn-danger" onclick="removeVoucher()" title="Hapus"><i class="fa fa-trash"></i> Hapus</button>';

    $("#loadingpage").addClass("loadingfull");

    $('#jumlahvoucher').val(value);
    $('#idvoucher').val(id);
    var value = number_idr(parseInt(value));
    value = "Rp. " + value;
    $('#rincianvoucher').html(value);
    $('#formvoucher').html(coupon);
    count_summary();
}

function removeVoucher() {
    $('#loadingpage').show();
    $("#loadingpage").addClass("loadingfull");
    var formvoucher = '<div class="size11 bo4 m-r-10">\
            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="vouchercode" id="vouchercode" placeholder="Kode Voucher (case sensitive)" required="">\
            </div>\
            <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">\
            <button onclick="applyVoucher();" class="flex-c-m sizefull bg-brown bo-rad-23 hov1 s-text1 trans-0-4">Apply</button>\
            </div>\
            <div id="voucher">\
            </div>';
    $('#jumlahvoucher').val('0');
    $('#idvoucher').val('');
    value = "Rp. 0";
    $('#rincianvoucher').html(value);

    $('#formvoucher').html(formvoucher);
    count_summary();
}

function resetForm() {
    $('#firstname').val('');
    $('#lastname').val('');
    $('#fulladdress').val('');
    $('#desa').val('');
    $('#rt').val('');
    $('#rw').val('');
    $('#provinsi').val('');
    $('#kecamatan').val('');
    $('#kabupaten').val('');
    $('#postalcode').val('');
    $('#customeremail').val('');
    $('#customerphone').val('');
}

function useExistAddress() {
    var id = '<?php
    if (!empty($_SESSION['iduser'])) {
        echo encryption($_SESSION['iduser']);
    } ?
    > ';
    if (id == '') {
        alert('Silahkan Login Terlebih Dahulu');
    } else {
        resetForm();
        var fname = document.getElementById("firstname");
        var lname = document.getElementById("lastname");
        var alamat = document.getElementById("fulladdress");
        var desa = document.getElementById("desa");
        var rt = document.getElementById("rt");
        var rw = document.getElementById("rw");
        var kecamatan = document.getElementById("kecamatan");
        var provinsi = document.getElementById("provinsi");
        var kabupaten = document.getElementById("kabupaten");
        var kodepos = document.getElementById("postalcode");
        var email = document.getElementById("customeremail");
        var hp = document.getElementById("customerphone");
        $('#loadingbutton').show();
        $.ajax({
            url: "<?php echo base_url('User/get_data_user'); ?>",
            method: "POST",
            dataType: "JSON",
            data: { id: id },
            success: function(data) {
                fname.value = data.username + fname.value;
                lname.value = data.lastName + lname.value;
                alamat.value = data.alamat + alamat.value;
                desa.value = data.desa + desa.value;
                rt.value = data.rt + rt.value;
                rw.value = data.rw + rw.value;
                kecamatan.value = data.kecamatan + kecamatan.value;
                provinsi.value = data.codeProvinsi;
                $('#provinsi').append('<option value="' + data.codeProvinsi + '" selected="selected">' + data.provinsi + '</option>');
                $('#kabupaten').append('<option value="' + data.codeKabupaten + '" selected="selected">' + data.kabupaten + '</option>');
                $('#kecamatan').append('<option value="' + data.codeKecamatan + '" selected="selected">' + data.kecamatan + '</option>');
                kodepos.value = data.kodepos + kodepos.value;
                email.value = data.useremail + email.value;
                hp.value = data.userHp + hp.value;
                $('#loadingbutton').hide();
            }
        });
    }
}

function cancel_order(id) {
    swal({
            title: "",
            text: "Batalkan Order ini ?",
            type: "warning",
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonColor: "#ff0000",
            confirmButtonText: "Cancel Order",
            cancelButtonText: "Batal",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {
                $('#loader').show();
                $.ajax({
                    url: '<?php echo base_url('
                    Order / cancel_order '); ?>',
                    method: "POST",
                    data: { "id": id },
                    dataType: "json",
                    accepts: {
                        json: 'application/json'
                    },
                    success: function(response) {
                        if (response.status === '0') {
                            swal("error", "" + response.message + "", "error");
                        } else {
                            swal({
                                    title: "",
                                    text: "" + response.message + "",
                                    type: "warning",
                                    showCancelButton: false,
                                    confirmButtonColor: "#5cb85c",
                                    confirmButtonText: "OK",
                                    closeOnConfirm: false,
                                    closeOnCancel: false
                                },
                                function(isConfirm) {
                                    if (isConfirm) {
                                        location.href = "<?php echo base_url('pages/profile');?>";
                                    }
                                });

                        }
                        Pace.stop();
                        $('#loader').hide();
                    }
                });
            } else {
                swal("", "", "error");
            }
        });
}