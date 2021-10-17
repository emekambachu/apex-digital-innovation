$(function(){

    // assign variable to interval and store in intervals array
    let intervalId = setInterval(autoLoad, 3000);
    intervals.push(intervalId);
    console.log(intervals);

    // load data from controller every 3 seconds
    function autoLoad (){
        $.ajax({
            type: 'GET',
            url: 'home/autoload/shuffle',
            contentType: false,
            processData: false,
            data: {

            },
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },

            success: function (response) {

                if(response.transactions.length > 0){
                    console.log('auto load begun for '+response.transactions.length);

                    let transactions = "";
                    $.each(response.transactions, function(k, v){
                        // do something
                        transactions += '<div class="row align-items-center text-dark pt-3"\n' +
                            '             style="border-radius: 5px; background-color: #bad1fc;">\n' +
                            '               <div class="col-md-2 animated">\n' +
                            '                   <p class="text-center text-dark">\n' +
                            '                   <strong style="color: #6a04a0;">TXHASH</strong><br>\n' +
                                                    v.txhash.substr(0, 20) + '&hellip;' +
                            '                    </p>\n' +
                            '                  </div>\n' +
                            '                 <div class="col-md-1 animated">\n' +
                            '                  <p class="text-center text-dark">\n' +
                            '                   <strong style="color: #6a04a0;">BLOCK</strong><br>\n' +
                                                    v.block.substr(0, 20) + '&hellip;' +
                            '                  </p>\n' +
                            '                 </div>\n' +
                            '             <div class="col-md-2 animated">\n' +
                            '            <p class="text-center text-dark">\n' +
                            '            <strong style="color: #6a04a0;">FROM</strong><br>\n' +
                                            v.from.substr(0, 20) + '&hellip;' +
                            '            </p>\n' +
                            '             </div>\n' +
                            '             <div class="col-md-2 animated">\n' +
                            '             <p class="text-center text-dark">\n' +
                            '             <strong style="color: #6a04a0;">TO</strong><br>\n' +
                                            v.to.substr(0, 20) + '&hellip;' +
                            '                     </p>\n' +
                            '                    </div>\n' +
                            '              <div class="col-md-1 animated">\n' +
                            '              <p class="text-center text-dark">\n' +
                            '              <strong style="color: #6a04a0;">AGE</strong><br>\n' + v.age +
                            '                </p>\n' +
                            '               </div>\n' +
                            '                <div class="col-md-2 animated">\n' +
                            '                <p class="text-center text-dark">\n' +
                            '                <strong style="color: #6a04a0;">VALUE</strong><br>\n' + v.value +
                            '                </p>\n' +
                            '                 </div>\n' +
                            '                 <div class="col-md-2 animated">\n' +
                            '                  <p class="text-center text-dark">\n' +
                            '                 <strong style="color: #6a04a0;">TXFEE</strong><br>\n' + v.txfee +
                            '                                                </p>\n' +
                            '                                            </div>\n' +
                            '                                        </div>';

                        // if there are conversations, remove loader and insert messages
                        $('#transactions').html(transactions);
                    });
                }

                if(response.testimonies.length > 0){
                    console.log('auto load begun for '+response.testimonies.length);

                    let testimonies = "";
                    $.each(response.testimonies, function(k, v){
                        // do something
                        testimonies += '<div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated jello"\n' +
                            '          data-animation="jello" data-animation-delay="0.5s" ' +
                            '               style="animation-delay: 0.5s; opacity: 1;">\n' +
                            '          <div class="d-flex">\n' +
                            '             <div class="team-img float-left mr-3"\n' +
                            '                   data-toggle="modal" data-target="#teamUser1">\n' +
                            '      <img src="/photos/testimonies/'+ v.image +'"'+
                            '                            alt="team-profile-1" class="rounded-circle" width="128">\n' +
                            '                         </div>\n' +
                            '                         <div class="team-icon">\n' +
                            '                            <i class="ti-linkedin"></i>\n' +
                            '                                </div>\n' +
                            '                   <div class="profile align-self-center">\n' +
                            '                      <div class="name">'+ v.name +'</div>\n' +
                            '                      <div class="role">'+ v.occupation +'</div>\n' +
                            '                      <div class="role"><i>'+ v.testimony +'</i></div>\n' +
                            '                       </div>\n' +
                            '                    </div>\n' +
                            '             </div>';

                        $('#testimonies').html(testimonies);
                    });
                }

            },

            error: function (response) {
                console.log(response.responseText);
            }
        });
    }
});
