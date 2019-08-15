$(document).ready(function() {
    $.ajax({
        method : "GET",
        url : "package.php",
        success : function(data) {
            let obj = JSON.parse(data);
            var html = ""
            for(var i in obj) {
                var fakePrice = formatNumber(obj[i].fake_price);
                var price = formatNumber(obj[i].price);
                var bigPrice = price.substr(0,2);
                var smallPrice = price.substr(2);
                var userRegistered = formatNumber(obj[i].registered);
                var htmlCard = "";
                var htmlRibon = "";
                var blue = "";
                var blueOld = "";
                var blueOldBorder = "";
                if(obj[i].best == 0) {
                    htmlCard = '<div class="card">';
                    htmlRibon = '';
                    blue = '';
                    blueOld = '';
                    blueOldBorder = '';
                } else {
                    htmlCard = '<div class="card colored">';
                    htmlRibon = '<div class="ribbon ribbon-top-left"><span>BEST SELLER</span></div>';
                    blue = 'blue';
                    blueOld = 'blue-old';
                    blueOldBorder = 'blue-old-border';
                }
                var features = obj[i].features;
                var list = "";
                for(var u in features) {
                    list += '<li>'+features[u]+'</li>';
                }

                html += '<div class="col-md-3 col-12 px-lg-0 mb-2">'+
                            htmlCard+
                                htmlRibon+
                                '<ul class="list-group list-group-flush">'+
                                    '<li class="list-group-item '+blue+'"><h4>'+obj[i].package_name+'</h4></li>'+
                                    '<li class="list-group-item '+blue+'">'+
                                        '<del class="">Rp. '+fakePrice+'</del>'+
                                        '<p class="big-rp">Rp <span class="big-number">'+bigPrice+'</span><span class="small-number">'+smallPrice+'</span>/ bln </p>'+
                                    '</li>'+
                                    '<li class="list-group-item '+blueOld+'"><b>'+userRegistered+'</b> Pengguna Terdaftar</li>'+
                                    '<li class="list-group-item text-center '+blueOldBorder+'">'+
                                        '<ul class="list-unstyled">'+
                                            '<li>'+obj[i].power+'</li>'+
                                            list+
                                        '</ul>'+
                                        '<button class="btn btn-outline-primary '+blue+'">'+obj[i].button_text+'</button>'+
                                    '</li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>'
            }
            $("#box-package").html(html);
        }
    })
})

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}