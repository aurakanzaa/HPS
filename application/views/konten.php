<section class="content">
        <div class="container-fluid">
            

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Masukkan Detail Kendaraan
                            </h2>
                        </div>
                        <div class="body">
                            <form>
                                <label for="email_address">Merk Kendaraan</label>
                                <div id="frm_merek" class="form-group">
                                </div>
                                <label for="tipe">Tipe</label>
                                <div id="frm_tipe" class="form-group">   
                                </div>
                                <label for="tahun">Tahun</label>
                                <div id="frm_tahun" class="form-group">
                                </div>
                                       
                                    
                                <button type="button" onclick="cari_kendaraan()" class="btn btn-lg btn-block btn-primary m-t-15 waves-effect">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> DATA KENDARAAN</h2>
                            
                        </div>
                        <div class="body">
                        <table id="tb_kendaraan">
                                <thead>
                                    <tr>
                                        <th>Merek</th>
                                        <th>Tipe</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="detail"  class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> DETAIL HARGA KENDARAAN</h2>
                        </div>
                        <div class="body">
                                <h4 id="judul_detail"></h4>
                                <table style="border:none" class="table">
                                    <thead>
                                        <tr>
                                           <th>100 %</th>
                                           <td id="100"></td>
                                        </tr>
                                        <tr>
                                           <th>90 %</th>
                                           <td id="90"></td>
                                        </tr>
                                        <tr>
                                           <th>80 %</th>
                                           <td id="80"></td>
                                        </tr>
                                        <tr>
                                           <th>70 %</th>
                                           <td id="70"></td>
                                        </tr>
                                    </thead>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            <input type="hidden" value="" id="isi_merek"> <input type="hidden" value="" id="isi_tipe"> <input value="" type="hidden" id="isi_tahun">
        </div>
    </section>

<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
var tb_kendaraan = "<?= $tb_kendaraan; ?>"
const base_url = "<?= base_url() ?>"+tb_kendaraan
$(document).ready(function(){

               var table = $('#tb_kendaraan').DataTable({
                    "ajax": {
                        "url": base_url+"/get_kendaraan/"+tb_kendaraan,
                        "type": "post",
                        "data"   : function( d ) {
                        d.merek= $('#isi_merek').val();
                        d.tipe= $('#isi_tipe').val();
                        d.tahun= $('#isi_tahun').val();
                        }
                    },
                    "columns": [
                        { "data": "merk", "title": "Merek" },
                        { "data": "type", "title": "Tipe" },
                        { "data": "detail", "title": "Detail" },

                    ],  
        
                });

    $('#tb_kendaraan tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        var data = table.row( $(this) ).data();
        $("#judul_detail").text(data.merk+" "+data.type+" "+data.detail+" "+data.tahun);
        var tuj,del,sem,sep = ""
        if(data[100]===null){
            sep = "Harga Belum Ada"
        }else{
            sep = formatRupiah(data[100], "Rp. ")
        }
        $("#100").text(sep);

        if(data[90]===null){
            sem = "Harga Belum Ada"
        }else{
            sem = formatRupiah(data[90], "Rp. ")
        }
        $("#90").text(sem);
     
        if(data[80]===null){
            del = "Harga Belum Ada"
        }else{
            del = formatRupiah(data[80], "Rp. ")
        }
        $("#80").text(del);   
        
        if(data[70]===null){
            tuj = "Harga Belum Ada"
        }else{
            tuj = formatRupiah(data[70], "Rp. ")
        }
        $("#70").text(tuj);
       

        
        console.log(data);
        $('#detail').slideDown( "fast" );
        $('html, body').animate({
                        scrollTop: $("#detail").offset().top
        }, 1000);
    } );


    get_merek();
      $("#merek").change(function(e){
        e.preventDefault();
        console.log(this);
      })

    cari_kendaraan=()=>{
        table.ajax.reload();
    }

    function formatRupiah(angka, prefix) {
			var number_string = angka.replace(/[^,\d]/g, "").toString(),
				split = number_string.split(","),
				sisa = split[0].length % 3,
				rupiah = split[0].substr(0, sisa),
				ribuan = split[0].substr(sisa).match(/\d{3}/gi);
			if (ribuan) {
				separator = sisa ? "." : "";
				rupiah += separator + ribuan.join(".");
			}
			rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
			return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
			}

    })


    set_ajax=(url,params,callback,form)=>{
                $.ajaxSetup({
                    data: {
                    '<?= $this->security->get_csrf_token_name() ?>':'<?= $this->security->get_csrf_hash(); ?>'
                    }
                });
                var addOptions = {}
                if(form === true){
                    addOptions = {
                    processData:false,
                    contentType:false, 
                    }       
                }
                $.ajax({
                    url : url,
                    type: 'POST',
                    data : params,
                    dataType: 'json',
                    processData : addOptions.processData,
                    contentType : addOptions.contentType,
                    success: callback,
                    error : function(xhr){
                    console.log(xhr.responseText);
                    console.log("SERVER ERROR")
                    }
                })
            }

      get_merek=()=>{
        var data = {tabel: tb_kendaraan, where : ""}
        set_ajax(base_url+'/get_merek',data,function(response){
            if(response.result==true){
                var element="<select id='merek' onchange='get_tipe(this.value)' class='form-control show-tick'>";
                    element+="<option value=''>=== PILIH ===</option>";
                    for(i in response.data){
                        var merek = response.data[i]['merek']
                        console.log(merek)
                      element += "<option value='"+merek+"'>"+merek+"</option>";
                    }
                element += "</select>";
                $("#frm_merek").append(element);
                element="";
            }
        })
      }

      get_tipe=(e)=>{
        $("#frm_tipe").html("");
        $("#isi_merek").val(e)
          var data = {tabel: tb_kendaraan, merek: e}
          set_ajax(base_url+'/get_tipe',data,function(response){
            if(response.result==true){
                var element="<select id='tipe' onchange='get_tahun(this.value)' class='form-control show-tick'>";
                element+="<option value=''>=== PILIH ===</option>";
                    for(i in response.data){
                        var merek = response.data[i]['tipe']
                        console.log(merek)
                      element += "<option value='"+merek+"'>"+merek+"</option>";
                    }
                element += "</select>";
                $("#frm_tipe").append(element);
                element="";
            }
        })
      }

      get_tahun=(e)=>{
        $("#isi_tipe").val(e)
          console.log(e);
        $("#frm_tahun").html("");
          var data = {tabel: tb_kendaraan, merek: $("#isi_merek").val(), tipe: e}
          set_ajax(base_url+'/get_tahun',data,function(response){
            if(response.result==true){
                var element="<select id='tahun' onchange='set_tahun(this.value)' class='form-control show-tick'>";
                element+="<option value=''>=== PILIH ===</option>";
                    for(i in response.data){
                        var merek = response.data[i]['tahun']
                        console.log(merek)
                      element += "<option value='"+merek+"'>"+merek+"</option>";
                    }
                element += "</select>";
                $("#frm_tahun").append(element);
                element="";
            }else{
                $("#frm_tahun").append("<h3>Kosong</h3>");
            }
            
        })
      }

      set_tahun=(e)=>{
        $("#isi_tahun").val(e)
      }


</script>