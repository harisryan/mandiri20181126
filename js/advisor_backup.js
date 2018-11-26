/* ==========================================================================
    SOLUTION ADVISOR widget
  ========================================================================== */

$(document).ready(function(){  

    // var asdd=$(".umur.active span").text();
    // $("#age-hasil").val($("#step2 .umur span").text());
   $("#button-advisor").click(function(){
        $("#panel-advisor").toggleClass("expand");
        $(".row").toggleClass("show");
        return false;
      });

    function resizeInput() {
       $(this).attr('size', 2 + $(this).val().length);
   }

   $('#panel-advisor #hubungi-saya input')
       // event handler
       .keyup(resizeInput)
       // resize on page load
       .each(resizeInput);

      // $("#step5 .nama").on('click',function(){
      //     $("#step5 .nama-lengkap").toggle(); 
      //     return false;
      // });

      $('.dropdown-menu li').click(function(){
          $(this).parent().parent().prev().removeClass("dropdown-open");
           $(this).parent().parent().hide();
      });

      $("#step5 .nama-lengkap .submit").click(function(){
          var nm = $(".namanya").val();
          $("#step5 .nama span").text(nm);
          $("#step5 a.active span").each(function( index ) {
              if ($(this).text()=='(Pilih di sini)') {
                $('#step5 .call-me').hide();
                //console.log('asdf');
             }else{
                $('#step5 .call-me').show();
             }
          });
          $("#nama-hasil").val(nm);
          $(".nama-lengkap").hide();
          return false;
      });

      // $("#step5 .telepon").on('click',function(){
      //     $("#step5 .no-telepon").toggle(); 
      //     return false;
      // });

      $("#step5 .no-telepon .submit").click(function(){
          var tlp = $(".teleponnya").val();
          $("#step5 .telepon span").text(tlp);
          $("#step5 a.active span").each(function( index ) {
              if ($(this).text()=='(Pilih di sini)') {
                $('#step5 .call-me').hide();
                //console.log('asdf');
             }else{
                $('#step5 .call-me').show();
             }
          });
          $("#tlp-hasil").val(tlp);
          $(".no-telepon").hide();
          return false;
      });

      // $("#step5 .email").on('click',function(){
      //     $("#step5 .email-address").toggle(); 
      //     return false;
      // });

      $("#step5 .email-address .submit").click(function(){
          var tlp = $(".emailnya").val();
          $(".email span").text(tlp);
          $("#step5 a.active span").each(function( index ) {
              if ($(this).text()=='(Pilih di sini)') {
                $('#step5 .call-me').hide();
                //console.log('asdf');
             }else{
                $('#step5 .call-me').show();
             }
          });
          $("#email-hasil").val(tlp);
          $(".email-address").hide();
          return false;
      });

      $(".choice li").on('click',function(){
		  
          if($(this).text()=="Investasi") {
            $('#step3 .proteksi').text('Terproteksi');
          }else{
            $('#step3 .proteksi').text('Berinvestasi');
          };
          $(".choice").toggle(); 
          $(".perlindungan label span").text($(this).text());
          var pilihan= $(this).text();
          var id_choice= $(this).data('id');
          $('#'+id_choice+' a').addClass('active');

          // $('#'+id_choice+" a.active span").each(function( index ) {
          //     if ($(this).text()=='(Pilih di sini)') {
          //       $('#'+id_choice+' a.button.active').hide();
          //       //console.log($(this).text());
          //    }else{
          //       $('#'+id_choice+' a.button.active').show();
          //       //console.log($(this).text());
          //    }
          // });
          var jumtik=$('#'+id_choice+' a.active span:contains("  ")').length;
          if (jumtik > 0) {
              $('#'+id_choice+' a.button.active').hide();
            }else{
               $('#'+id_choice+' a.button.active').show();
            };
          $("#perlindungan-hasil").val(pilihan);
          $("#step1").hide();
          $("#step2").show();
          
          if (pilihan=='Kesehatan'||pilihan=='Jiwa'||pilihan=='Investasi') {
            //$('#step3 .perlindungan').addClass('active');
			$('#step3').removeAttr("cp-display--none");
            $('#step3').show();
            $("#step2").hide();
            $("#step4").hide();
			alert('Masuk');
          } 
          else if (pilihan=='Harta benda'||pilihan=='Perjalanan'||pilihan=='Pendidikan'){
            // $('#step4 .perlindungan').addClass('active');
            $('#step3').hide();
            $("#step2").hide();
            $("#step4").show();
          }
           else {
            // $('#step2 .perlindungan').addClass('active');
            $('#step3').hide();
            $("#step2").show();
            $("#step4").hide();

          };
          return false;
      });

      $("#step2 .status li").on('click',function(){
          $("#step2 .status").toggle(); 
          $("#step2 .matrial span").text($(this).text());
          var jumtik=$('#step2 a.active span:contains("  ")').length;
          if (jumtik > 0) {
              $('#step2 a.button.active').hide();
            }else{
               $('#step2 a.button.active').show();
            };
          $("#status-hasil").val($(this).text());
          $('#step2 .status li').parent().parent().parent().next().show();
          return false;
      });
      $("#step3 .status li").on('click',function(){
          $("#step3 .status").toggle(); 
          $("#step3 .matrial span").text($(this).text());
          var jumtik=$('#step3 a.active span:contains("  ")').length;
          if (jumtik > 0) {
              $('#step3 a.button.active').hide();
            }else{
               $('#step3 a.button.active').show();
            };
          $("#status-hasil").val($(this).text());
          $('#step3 .status li').parent().parent().parent().next().show();
          return false;
      });
      $("#step4 .status li").on('click',function(){
          $("#step4 .status").toggle(); 
          $("#step4 .matrial span").text($(this).text());
          var jumtik=$('#step4 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step4 a.button.active').hide();
          }else{
             $('#step4 a.button.active').show();
          };
          $("#status-hasil").val($(this).text());
          $('#step4 .status li').parent().parent().parent().next().show();
          return false;
      });

      $("#step2 .usia li").on('click',function(){
          $("#step2 .usia").toggle(); 
          $("#step2 .umur span").text($(this).text());
          var jumtik=$('#step2 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step2 a.button.active').hide();
          }else{
             $('#step2 a.button.active').show();
          };
          $("#step2 .usia").hide();
          var age_rang=$(this).data("usia");
          if (age_rang=='20') {
              var age_range='18 - 25';
          }else if (age_rang=='30'){
              var age_range='26 - 40';
          }else if (age_rang=='50'){
              var age_range='41 - 55';
          }else if (age_rang=='57'){
              var age_range='56 lebih';
          }
          $("#age-hasil").val(age_rang);
          $('#step2 .usia li').parent().parent().parent().next().show();
          return false;
      });
      $("#step3 .usia li").on('click',function(){
          $("#step3 .usia").toggle(); 
          $("#step3 .umur span").text($(this).text());
          var jumtik=$('#step3 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step3 a.button.active').hide();
          }else{
             $('#step3 a.button.active').show();
          };
          $("#step3 .usia").hide();
          var age_rang=$(this).data("usia");
          if (age_rang=='20') {
              var age_range='18 - 25';
          }else if (age_rang=='30'){
              var age_range='26 - 40';
          }else if (age_rang=='50'){
              var age_range='41 - 55';
          }else if (age_rang=='57'){
              var age_range='56 lebih';
          }
          $("#age-hasil").val(age_rang);
          $('#step3 .usia li').parent().parent().parent().next().show();
          return false;
      });
      $("#step4 .usia li").on('click',function(){
          
          $("#step4 .usia").toggle(); 
          $("#step4 .umur span").text($(this).text());
          var jumtik=$('#step4 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step4 a.button.active').hide();
          }else{
             $('#step4 a.button.active').show();
          };
          $("#step4 .usia").hide();
           var age_rang=$(this).data("usia");
          if (age_rang=='20') {
              var age_range='18 - 25';
          }else if (age_rang=='30'){
              var age_range='26 - 40';
          }else if (age_rang=='50'){
              var age_range='41 - 55';
          }else if (age_rang=='57'){
              var age_range='56 lebih';
          }
          $("#age-hasil").val(age_rang);
          $('#step4 .usia li').parent().parent().parent().next().show();
          return false;
      });
      $("#step2 .tanggung li").on('click',function(){
          
          $("#step2 .tanggung").toggle(); 
          $("#step2 .tanggungan span").text($(this).text());
          var jumtik=$('#step2 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step2 a.button.active').hide();
          }else{
             $('#step2 a.button.active').show();
          };
          $("#tanggungan-hasil").val($(this).text());
          $('#step2 .tanggung li').parent().parent().parent().next().show();
          return false;
      });

      $("#step3 .tanggung li").on('click',function(){
          
          $("#step3 .tanggung").toggle(); 
          $("#step3 .tanggungan span").text($(this).text());
          var jumtik=$('#step3 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step3 a.button.active').hide();
          }else{
             $('#step3 a.button.active').show();
          };
          $("#tanggungan-hasil").val($(this).text());
          $('#step3 .tanggung li').parent().parent().parent().next().show();
          return false;
      });

      $("#step3 .bersedia-drop li").on('click',function(){
           
          $("#step3 .bersedia-drop").toggle(); 
          $("#step3 .bersedia span").text($(this).text());
          var jumtik=$('#step3 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step3 a.button.active').hide();
          }else{
             $('#step3 a.button.active').show();
          };
          $('#bersedia-hasil').val($(this).text());
          $('#step3 .bersedia-drop li').parent().parent().parent().next().show();
          return false;
      });

      $("#step2 .gaji li").on('click',function(){          
          $("#step2 .gaji").toggle(); 
          $("#step2 .penghasilan span").text($(this).text());
          var jumtik=$('#step2 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step2 a.button.active').hide();
          }else{
             $('#step2 a.button.active').show();
          };
          $("#gaji-hasil").val($(this).data("gaji"));
          $('#step2 .gaji li').parent().parent().parent().next().show();
          return false;
      });

      $("#step3 .gaji li").on('click',function(){
           
          $("#step3 .gaji").toggle(); 
          $("#step3 .penghasilan span").text($(this).text());
          var jumtik=$('#step3 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step3 a.button.active').hide();
          }else{
             $('#step3 a.button.active').show();
          };
          $("#gaji-hasil").val($(this).data("gaji"));
          $('#step3 .gaji li').parent().parent().parent().next().show();
          return false;
      });

      $("#step4 .gaji li").on('click',function(){ 
          $("#step4 .gaji").toggle(); 
          $("#step4 .penghasilan span").text($(this).text());
          var jumtik=$('#step4 a.active span:contains("  ")').length;
          if (jumtik > 0) {
            $('#step4 a.button.active').hide();
          }else{
             $('#step4 a.button.active').show();
          };
          $("#gaji-hasil").val($(this).data("gaji"));
          $('#step4 .gaji li').parent().parent().parent().next().show();
          return false;
      });
     
     $('#hubungi-saya input.required').keypress(function() {
        $('#hubungi-saya input.required').each(function( index ) {
              if ($(this).val()=='') {
                $('.button-box').hide();
                $(this).val();
                // //console.log('asdf');
             }else{
                $('.button-box').show();
                $('.notification .message').hide();
             }
          });
      });
      
      $("#hubungi-saya input.teleponnya.required").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
     

     $('#advisor').submit(function(){
        $('#step5 .call-me.button').prop('disabled', true);
        $('#nama-hasil').val($('#hubungi-saya #name').val());     
        $('#tlp-hasil').val($('#hubungi-saya #tlp').val());     
        $('#email-hasil').val($('#hubungi-saya #email').val()); 

        var product_label = $('#product_label').val();

        if($("#advisor").valid()){
          
          $.ajax({
            type        : "POST",
            cache       : false,
            url         : siteUrl+"/axamandiri_form/advisor/submit_data",
            data        : $(this).serialize(),
            success: function(data) {
                $("#hubungi-saya fieldset input").val("");
                $("#hubungi-saya .button-box").hide();
                $('#advisor .notification .success').show();
                $('.call-me.button').removeAttr( 'disabled' );
                $('#step5').hide();
                // $('#advisor .notification').hide();
                // $('#advisor .notification').hide();

                return tc_events_2(this,'virtual_page',{virtual_page_name:'solusi_untuk_anda::contact_us::submit', product_label:product_label, page_status:'lead_completed'});
              
            },
            failed: function(data){
                $('#advisor span.message.error').show();
            }
          });
        };
        return false;
     });

     


      
      // $('#listing-items button.minat').hover(function(){
      //   var produk_name = $(this).data('produk');
      //   var entity_produk = $(this).data('entity');
      //   $("#entity-hasil").val(entity_produk);
      //   $("#produk-hasil").val(produk_name);
      //   $("#step5").show();
      //   // alert('adf');
      //   // return false;
      // });
      $("a.button.active").hover(function(){
          //console.log('adf');
      });

       $(".question .button").click(function(){
        $( "a.active span").each(function( index ) {
            if ($(this).text()=='(Pilih di sini)') {
           }else{}
        });
        var pilihan=$('#perlindungan-hasil').val();
        var status=$('#status-hasil').val();
        var umur=parseInt($('#age-hasil').val());
        var bersedia=$('#bersedia-hasil').val();
        var tanggungan=$('#tanggungan-hasil').val();
        var gaji=parseInt($('#gaji-hasil').val());
        //console.log(gaji);
        if (tanggungan=='memiliki tanggungan') {
            var tanggung='ya';
        }else{
            var tanggung='tidak';
        };
        if (bersedia=='tidak ingin') {
            var sedia='tidak';
        }
        else if (bersedia=='juga ingin') {
            var sedia='ya';
        } else {
          var sedia='';
        };


        if (pilihan==''&&umur==''&&gaji=='') {

        } else{
            $("#step2").hide();
            $("#step3").hide();
            $("#step4").hide();
            $("#result").show();
            //logic advisor
            //condition 1
            if (
                ((pilihan=='Kesehatan') && 
                  ( 
                    ((umur >=18 && umur<=25) && (gaji<=150000000) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=26 && umur <=40) && (gaji<=150000000) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=41 && umur <=55) && (gaji <=150000000) && (status=='lajang' && tanggung=='tidak') && (status=='lajang' || tanggung=='ya'))
                    ||
                    ((umur >=56) && (gaji<=150000000) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=18 && umur<=25) && (gaji>=150000001 && gaji<=225000000) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=26 && umur<=40) && (gaji>=150000001 && gaji<=225000000) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=41 && umur<=55) && (gaji>=150000001 && gaji<=225000000) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur>=56) && (gaji>=150000001 && gaji<=225000000) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=18 && umur<=25) && (gaji>=225000001 && gaji<=250000000) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=26 && umur<=40) && (gaji>=225000001 && gaji<=250000000) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=41 && umur<=55) && (gaji>=225000001 && gaji<=250000000) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur>=56) && (gaji>=225000001 && gaji<=250000000) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=18 && umur<=25) && (gaji>=250000001) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=26 && umur<=40) && (gaji>=250000001) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=41 && umur<=55) && (gaji>=250000001) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur>=56) && (gaji>=250000001) && (status=='menikah' || status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                  )
                  && (sedia=='tidak')
                )
              ) 
                {

                  // $("#result ul").append('<li>Asuransi Mandiri HospitaJiwa  Asuransi Mandiri Jaminan Kesehatan,  Asuransi Mandiri Kesehatan Prima  Asuransi Mandiri Kesehatan Global<span class="tab"></span></li>');
                  var id_produk='7805,4305,4266,4303';
                  console.log('condition 1');
                  //console.log('pilihan='+pilihan);
                  //console.log('status='+status);
                  //console.log('umur='+umur);
                  //console.log('gaji='+gaji);
                  //console.log('tanggungan='+tanggung);
                  //console.log('bersedia='+sedia);
            } 
            //condition 2
            else if (
                ((pilihan=='Jiwa') && 
                  ( 
                    (((umur >=18 && umur<=25)
                      ||
                      (umur >=56)) 
                    &&
                    ((gaji <=150000000)
                    ||
                    (gaji >=150000001 && gaji <=225000000)
                    ||(gaji >= 225000001 && gaji <=250000000)
                    ||(gaji >=250000001)) 
                    && (status=='menikah'||status=='lajang') 
                    && (tanggung =='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=26 && umur <=40) && (gaji<=150000000) && (status=='menikah'||tanggung=='tidak') && (status=='menikah'||tanggung=='ya'))
                    ||
                    ((umur >=41 && umur <=55) && (gaji <=150000000) && (status=='lajang' && tanggung=='tidak') && (status=='lajang' || tanggung=='ya'))
                    ||
                    ((umur >=41 && umur<=55) && ((gaji >=150000001 && gaji <=225000000)||(gaji >=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=26 && umur<=40) && ((gaji>=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                  )
                  && (sedia=='tidak')
                )
              ) {
               // $("#result ul").append('<li>Asuransi Mandiri Secure Plan, Asuransi Mandiri Jiwa Sejahtera, Asuransi Mandiri Tabungan Rencana, Asuransi Perlindungan Diri (Asuransi Kecelakaan Diri-TBC)<span class="tab"></span></li>');
                  var id_produk='4308,4313,4324'; //masih ada yg kurang tbc
                  console.log('condition 2');
                  //console.log('pilihan='+pilihan);
                  //console.log('status='+status);
                  //console.log('umur='+umur);
                  //console.log('gaji='+gaji);
                  //console.log('tanggungan='+tanggung);
                  //console.log('bersedia='+sedia);
            }
            //condition 3
            else if (
                ((pilihan=='Kesehatan') &&
                    (
                      (((umur >=18 && umur<=25)||(umur >=26 && umur <=40)||(umur>=56)) && ((gaji<=150000000)||(gaji>=150000001 && gaji <=225000000)||(gaji>=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                      ||
                      ((umur >=41 && umur <=55) && (gaji<=150000000) && ((status=='lajang' && tanggung=='tidak') || (status=='lajang' && tanggung=='ya')))
                      ||
                      (((umur >=41 && umur<=55) && ((gaji>=150000001 && gaji <=225000000)||(gaji >=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    )
                  && (sedia=='ya')
                )
                ||
                ((pilihan=='Jiwa')&&
                    (
                      (((umur >=18 && umur<=25)||(umur>=56)) && ((gaji<=150000000)||(gaji>=150000001 && gaji <=225000000)||(gaji>=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                      ||
                      ((umur >=26 && umur <=40) && (gaji<=150000000) && ((status=='menikah' && tanggung=='tidak') || (status=='menikah' && tanggung=='ya')))
                      ||
                      ((umur >=41 && umur <=55) && (gaji<=150000000) && ((status=='lajang' && tanggung=='tidak') || (status=='lajang' && tanggung=='ya')))
                      ||
                      ((umur >=41 && umur <=55) && ((gaji >=150000001 && gaji <=225000000)||(gaji >=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                      ||
                      ((umur >=26 && umur <=40) 
                        && 
                        ((gaji >=225000001 && gaji <=250000000)||(gaji>=250000001)) 
                        && (status=='menikah'||status=='lajang') 
                        && (tanggung=='tidak'||tanggung=='ya'))                   
                    )
                  && (sedia=='ya')
                )
                ||
                ((pilihan=='Investasi')&&
                  (
                    (((umur >=18 && umur<=25)||(umur>=56)) && ((gaji<=150000000)||(gaji>=150000001 && gaji <=225000000)||(gaji>=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur >=26 && umur <=40) && (gaji<=150000000) && ((status=='menikah' && tanggung=='tidak') || (status=='menikah' && tanggung=='ya')))
                    ||
                    ((umur >=41 && umur <=55) && (gaji<=150000000) && ((status=='lajang' && tanggung=='tidak') || (status=='lajang' && tanggung=='ya')))
                    ||
                    ((umur >=41 && umur <=55) && ((gaji >=150000001 && gaji <=225000000)||(gaji >=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                    ||
                    ((umur ==30) && (gaji ==240000000||gaji ==300000000) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
                  && (sedia=='ya')
                )
                  )
              )
              )  {
                  // $("#result ul").append('<li>Asuransi Mandiri Sejahtera Mapan, Asuransi Mandiri Investasi Sejahtera Plus, Asuransi Mandiri Sejahtera Mapan Syariah,  Asuransi Mandiri Investasi Sejahtera Syariah<span class="tab"></span></li>');
                  var id_produk='4340,4349,4343,4351';
                  console.log('condition 3');
                  //console.log('pilihan='+pilihan);
                  //console.log('status='+status);
                  //console.log('umur='+umur);
                  //console.log('gaji='+gaji);
                  //console.log('tanggungan='+tanggung);
                  //console.log('bersedia='+sedia);
            }
            //condition 4
            else if (pilihan=="Perjalanan") {
                // $("#result ul").append('<li>Asuransi Mandiri Perjalanan<span class="tab"></span></li>');
                  var id_produk='4357';
                  //console.log('condition 4');
                  //console.log('pilihan='+pilihan);
                  //console.log('status='+status);
                  //console.log('umur='+umur);
                  //console.log('gaji='+gaji);
                  //console.log('tanggungan='+tanggung);
                  //console.log('bersedia='+sedia);
            }
            //condition 5
             else if (pilihan=="Harta benda") {
                // $("#result ul").append('<li>Asuransi Properti (Asuransi Kebakaran-TBC), Asuransi Kendaraan Bermotor<span class="tab"></span></li>');
                  var id_produk='4355,4279';
                  //console.log('condition 5');
                  //console.log('pilihan='+pilihan);
                  //console.log('status='+status);
                  //console.log('umur='+umur);
                  //console.log('gaji='+gaji);
                  //console.log('tanggungan='+tanggung);
                  //console.log('bersedia='+sedia);
            }
            //condition 6
            // else if (
            //    ((pilihan=='Investasi') && 
            //       ( 
            //         (((umur >=18 && umur<=25)||(umur>=56)) && ((gaji<=150000000)||(gaji>=150000001 && <=225000000)||(gaji>=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
            //         ||
            //         ((umur >=26 && umur <=40) && (gaji<=150000000) && (status=='menikah'||tanggung=='tidak') && (status=='menikah'||tanggung=='ya'))
            //         ||
            //         ((umur >=41 && umur <=55) && (gaji <=150000000) && (status=='lajang' && tanggung=='tidak') && (status=='lajang' || tanggung=='ya'))
            //         ||
            //         ((umur >=41 && umur<=55) && ((gaji>=150000001 && <=225000000)||(gaji>=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
            //         ||
            //         ((umur >=26 && umur<=40) && ((gaji>=225000001 && gaji <=250000000)||(gaji>=250000001)) && (status=='menikah'||status=='lajang') && (tanggung=='tidak'||tanggung=='ya'))
            //       )
            //       && (sedia=='tidak')
            //     )
            //   ) {
            //    $("#result ul").append('<li>AXA CitraDinamis AXA MaestroSaham, MaestroBerimbang, AXA MaestroObligasi Plus<span class="tab"></span></li>');
            //       var id_produk='4308,4313,4324'; //masih ada yg kurang tbc
            //       //console.log('condition 6');
            //       //console.log('pilihan='+pilihan);
            //       //console.log('status='+status);
            //       //console.log('umur='+umur);
            //       //console.log('gaji='+gaji);
            //       //console.log('tanggungan='+tanggung);
            //       //console.log('bersedia='+sedia);
            // }

        
             else {
              console.log('bukan');
            };
           
            if (id_produk!='') {
                  $.ajax({
                  type: 'GET',
                  url: siteUrl+'/produk-advisor-json/?produk='+id_produk,
                  dataType: "json",
                  success: function(data)
                  {    
                    if (data) {
                      var len=data.length;
                      for (var i = 0; i < len; i++) {
                        if (data) {
                          var content_produk= '<li data-entity="'+data[i].entity+'" class="clearfix elements produk" style="float:left;"><div class="box w-244 h-315 radius-all-5 bg-white relative"><span class="separate-small absolute"></span><img width="244" height="80" src="'+data[i].thumbnail+'" class="attachment-matrix_small wp-post-image" alt="produk'+i+'"><div class="details p-all-20"><h2 class="f-16 c-blue"><a href="'+siteUrl+'/produk/'+data[i].slug+'">'+data[i].title+'</a></h2><ul class="list-grey"><li class="f-12 c-grey" style="float:left;text-align:left;">'+data[i].manfaat[0]+'</li><li class="f-12 c-grey" style="float:left;text-align:left;">'+data[i].manfaat[1]+'</li><li class="f-12 c-grey" style="float:left;text-align:left;">'+data[i].manfaat[2]+'</li></ul></div><a href="'+siteUrl+'/produk/'+data[i].slug+'" class="view-more bg-bluelight block text-center p-all-10 f-13 absolute">Lebih Lanjut</a></div><a onclick="show_form(); javascript:return tc_events_2(this,\'virtual_page\',{virtual_page_name:\'solusi_untuk_anda::contact_us::open\', product_label:\'GI::'+data[i].product_label+'\', page_status:\'lead_started\'});" class="button minat" data-label=\'GI::'+data[i].product_label+'\' data-entity="'+data[i].entity+'" data-produk="'+data[i].title+'">Saya berminat</a></li>';
                          // //console.log(content_produk);
                          $("#result ul#listing-items").append(content_produk); 
                          var rusak=$("li.produk").find("img[src='null']");
                          rusak.remove();
                          $('li.f-12.c-grey:contains("undefined")').remove();
                          // pilih produk

                        }
                      }
                      var solusi=data[0].solusi;
                      // $("#result").append('<a class="button bandingkan" href="'+siteUrl+'/bandingkan-produk/'+solusi+'/?produk='+id_produk+'">Bandingkan Produk Terkait</a>'); 
                    } 
                     
                  },
                  error: function()
                  {
                      alert("Error!");
                  }
                });
              
            } else{

            };
        };
        
        // $("#result").show();
      return false;
      });


      


});
    function show_form() {
       $('#listing-items a.button.minat').click(function(){
          var produk_name = $(this).data('produk');
          var product_label = $(this).data('label');
          var entity_produk = $(this).data('entity');

          $("#entity-hasil").val(entity_produk);
          $("#produk-hasil").val(produk_name);
          $("#product_label").val(product_label);
          $("#step5").show();
          $('#advisor .notification .success').hide();
          $('#advisor .notification .error').hide();
          $('.call-me.button').removeAttr( 'disabled' );
      });
          var produk_name = $('#listing-items .button.minat').data('produk');
          var entity_produk = $('#listing-items .button.minat').data('entity');
          var product_label = $('#listing-items .button.minat').data('label');

          $("#entity-hasil").val(entity_produk);
          $("#produk-hasil").val(produk_name);
          $("#product_label").val(product_label);
          $("#step5").show();
          $('#advisor .notification .success').hide();
          $('#advisor .notification .error').hide();
          $('.call-me.button').removeAttr( 'disabled' );
      }
      //logic advisor

