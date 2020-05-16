$('#search-text').on('keyup', function(e){
    if(e.keyCode == 13)
    {
        searchSuratmasuk();
    }
})

$('#btn-search').on('click', function(e){
    searchSuratmasuk();
})
$('#suratmasuk-list').on('click', '#btn-details', function(e){
    $.ajax({
        url:'http://www.omdbapi.com',
        type:'GET',
        dataType:'json',
        data:{
            'apikey' : 'ef9870ad', //API Key
            'i' : $(this).data('kode_surat')//parameter i untuk pencarian film berdasarkan id film /omdbID
        },
        success: function(result){
            if(result.Response === "True"){
                $('.modal-body').html('');
                $('.modal-body').append(`
                    <div class="row"> 
                    <div class="col-md-4">
                    <img src="` + result.Poster +`" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item"><h4>`+ result.Title +`</h4></li>
                        <li class="list-group-item">no_agenda : `+ result.no_agenda +`</li>
                        <li class="list-group-item">isi_ringkasan : `+ result.isi_ringkasan +`</li>
                        <li class="list-group-item">no_surat : `+ result.no_surat +`</li>
                        <li class="list-group-item">tgl_surat : `+ result.tgl_surat +`</li>
                        <li class="list-group-item">tgl_diterima : `+ result.tgl_diterima +`</li>
                        <li class="list-group-item">penerima : `+ result.penerima +`</li>
                        <li class="list-group-item">nomor_instansi : `+ result.nomor_instansi +`</li>
                    </ul>
                    </div>
                    </div> 
                </div>
                `);
            }
            
        }
    });
})

function searchSuratmasuk(){
    $.ajax({
        url:'http://www.omdbapi.com',
        type:'GET',
        dataType:'json',
        data:{
            'apikey' : 'ef9870ad',//API Key
            's' : $('#search-text').val()
        },
        success: function(result){
            let suratmasuk = result.Search;
            $('#suratmasuk-list').html('');
            if(result.Response == "True"){
                $.each(movies, function(i, data){
                    $('#movie-list').append(`<div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                        <img src="`+ data.Poster +`" class="card-img-top" height="300px">
                        <div class="card-body"><h5 class="card-title">`+ data.Title +`</h5>
                        <p class="card-text">Year : `+ data.Year +`</p>
                        <a href="#" class="btn btn-primary" id="btn-details" data-id="`+ data.imdbID +`"
                        data-toggle="modal" data-target="#exampleModal">Show Details</a>
                        </div></div></div>
                    `);
                })
            }else{
                    $('#suratmasuk-list').append(`
                        <div class="col-sm-12 text-center">
                            <h1>` + result.Error + `</h1>
                        </div>
                    `);
                }
            }
    });

    $('#search-text').val("");
}