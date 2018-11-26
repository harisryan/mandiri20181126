  // // Load the IFrame Player API code asynchronously on DOM load
  // var tag = document.createElement('script');
  // tag.src = "http://www.youtube.com/player_api";
  // var firstScriptTag = document.getElementsByTagName('script')[0];
  // firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // // Create YouTube player(s) after the API code downloads.
  // var video;

  // function onYouTubeIframeAPIReady() {
  //     video = new YT.Player('ytvideo');
  //     video2 = new YT.Player('ytvideo-mobile');
  // }
$(document).ready(function() {
      
        //INSPIRASI WIDGET
      $("#article-post .date").timeago();
      $("#inspirasi-section .toggleNav a").click(function(){
          $(this).parents().toggleClass("expanded");
          //console.log("Asd");
          return false;
      });

      $(window).load(function() {
          if ($(window).width() > 1025 ) {
            $('.tablet-content').remove();
          };

          if ($(window).width() < 1025 ) {
            $('.hide-on-tablet').remove();
          };
        });

    $("#fixed-navigation").hide();
        $(window).scroll(function(){
          if($(window).scrollTop()>500){
            $("#fixed-navigation").fadeIn("fast")
          }
          else{
            $("#fixed-navigation").fadeOut("fast")
          }
      });

      $("#customercare-fixed").hide();
        $(window).scroll(function(){
          if($(window).scrollTop()>500){
            $("#customercare-fixed").fadeIn("fast")
          }
          else{
            $("#customercare-fixed").fadeOut("fast")
          }
      });

      $.fn.scrollBottom = function() { 
        return $(document).height() - this.scrollTop() - this.height(); 
      };

      $("#customercare-fixed").hide();
        $(window).scroll(function(){
          if($(window).scrollBottom()<80){
            $("#customercare-fixed").addClass('stuck')
          }
          else{
            $("#customercare-fixed").removeClass("stuck")
          }
      });

      $(".liveagent").show();
        $(window).scroll(function(){
          if($(window).scrollBottom()<80){
            $(".liveagent").addClass('stuck')
          }
          else{
            $(".liveagent").removeClass("stuck")
          }
      });

      $(".liveagents").show();
        $(window).scroll(function(){
          if($(window).scrollBottom()<80){
            $(".liveagents").addClass('stuck')
          }
          else{
            $(".liveagents").removeClass("stuck")
          }
      });  

      $('#liveagents').click(function() {
        $('#liveagent-details').toggle();
      });

    function delayHover (element) {
        timer = setTimeout ( function () {
          $(element).toggleClass("expanded");
          }, 200);
      };

        function delayBlue (element) {
        timer = setTimeout ( function () {
          $(element).toggleClass("blue");
          }, 300);
      };

      $(".main-nav > li > div > div > ul > li > div").append("<a href='#' id='change__url'><div class='banner-menu right'></div></a>");
      $(".main-nav > li.menu-item-has-children").hover(function(){
          delayHover($(this));
          //$("#main-navigation").toggleClass("blue");
          delayBlue ($("#main-navigation"));
          var image_url = $(this).find('.sub-menu-wrap .row .sub-menu .change__image a .title-menu img').attr('src'),
          belionline_url = $(this).find('.sub-menu-wrap .row .sub-menu .change__image a').attr('href');

          $(".main-nav > li > div > div > ul > li.last-child").addClass("hovered");
		  $(".main-nav > li > div > div > ul > li.last-child").attr("width","290px!important");
          if(image_url != " "){
            // $("#change__url").attr('href', belionline_url);
           // $(".banner-menu").parent().attr('href', belionline_url);
            //$(".banner-menu").css("background", "url("+image_url+") no-repeat");
          } else {

          }
          // $(".main-nav > li > div > div > ul > li > div").append("<div class='banner-menu-traveller right'><a href='https://indonesia.merimen.com/epolicy/index.cfm?fusebox=MICsec&fuseaction=act_ssologin&lf=EPLAXAID&GCOID=712001&USERID=AXANOLOGIN&SESSIONID=axa67$x&LANGID=2' onclick=\"trackOutboundLink('https://indonesia.merimen.com/epolicy/index.cfm?fusebox=MICsec&fuseaction=act_ssologin&lf=EPLAXAID&GCOID=712001&USERID=AXANOLOGIN&SESSIONID=axa67$x&LANGID=2'); return false;\" target='_blank'></a></div>");

          return false;
      });

      $('#menu-item-11910').hover(function(){
        $('#menu-item-11910 .banner-menu').toggleClass('banner-menu-active');
      });

      $(".change__adjust").hover(function(){
        $('ul.sub-menu').attr("style", "background : #073B91 !important");
      });

      $('.change__product').hover(function() {
        var image_url = $(this).find('.sub-menu-wrap .row .sub-menu .change__image a .title-menu img').attr('src');
        $(".banner-menu").css("background", "url("+image_url+") no-repeat");
      })

      $(".main-nav > li > div > div > ul > li ").hover(function () {
          $(".main-nav > li > div > div > ul > li:first-child").removeClass("hovered");
          $(this).toggleClass("hovered");
      });


      $(".main-nav > li > div > div > ul > li > a > span").append("<i class='fa fa-chevron-right right m-top-18 c-yellow'></i>");

     

      //$("#mainmenu > li > div > div > ul > li").hoverIntent();

    /* ==========================================================================
      Modify Offcanvas Menu
    ========================================================================== */
      $(".left-off-canvas-toggle").click(function(){
          $("body").toggleClass("offcanvas-active");
          $("html").addClass("active");
          $('html, body').animate({
              scrollTop: $(".inner-wrap").offset().top
          }, 50);
      });

        $(".exit-off-canvas").click(function(){
          $(".off-canvas-wrap").removeClass("move-right");
          $(".off-canvas-wrap").removeClass("move-left");
          $("body").removeClass("offcanvas-active");
          $("html").removeClass("active");
      });

      $('.right-off-canvas-toggle').click(function(){
          $("#customerCare").addClass('expanded');
          $("body").toggleClass("offcanvas-active");
          $("html").addClass("active");
            $('html, body').animate({
              scrollTop: $(".inner-wrap").offset().top
          }, 50);
      })


    /* ==========================================================================
      Main Sider
    ========================================================================== */
      $("#slideContent").owlCarousel({
          navigation : true, // Show next and prev buttons
          autoPlay : 5000,
          paginationSpeed : 1000,
          stopOnHover : true,
          singleItem:true,
          goToFirstSpeed : 2000,
          autoHeight : true,
          transitionStyle:"fade",
          lazyLoad : true
      });

      $("#mobile-slide").owlCarousel({
          navigation : true, // Show next and prev buttons
          autoPlay : 5000,
          paginationSpeed : 1000,
          stopOnHover : true,
          singleItem:true,
          goToFirstSpeed : 2000,
          autoHeight : true,
          transitionStyle:"fade",
          lazyLoad : true
      });

        var owl = $("#slideContent").data('owlCarousel');




          // if ($("body").hasClass("page-home")) {
          //    $('.video-bg').get(0).play();
          // };


        $("#slideContent .playvideo").click(function(){
          $('html, body').animate({
              scrollTop: $("#mainSlider").offset().top
          }, 1000);
          owl.stop();

          $(".slideBG, #separate, .cstCare, .owl-controls").hide();
          $("#ytvideo").show().css("height", "600px");
          $(".closeVideo").show();
          video.playVideo();
          return false;

        });

        $(".closeVideo").click(function(){
          $(this).hide();
          $(".slideBG, #separate, .cstCare, .owl-controls").show();
          $("#ytvideo").hide()
            video.stopVideo();
            video2.stopVideo();
          return false;
        });

        $("#mobile-slide .playvideo").click(function(){
          $('html, body').animate({
              scrollTop: $("#mainSlider").offset().top
          }, 1000);
          owl.stop();

          $(".slideBG, #separate, .cstCare, .owl-controls").hide();
          $("#ytvideo-mobile").show().css("height", "400px");
          //$("#ytvideo-mobile").attr("src").replace("autoplay=0", "autoplay=1");
          $("iframe#ytvideo-mobile").attr("src", $("iframe#ytvideo-mobile").attr("src").replace("autoplay=0", "autoplay=1"));
          $(".closeVideo").show();
          //video2.playVideo();
          return false;

        });

    /* ==========================================================================
      Banner main slider
    ========================================================================== */
      $("#main_slidebanner").owlCarousel({
          navigation : true, // Show next and prev buttons
          items:4
      });

    /* ==========================================================================
      Solusi Slider
    ========================================================================== */
      $("#manfaat-slide").owlCarousel({
          navigation : true, // Show next and prev buttons
          items:3,
          afterInit : function() {
            var maxHeight = 0;

            $(".manfaat-element .box").each(function(){
              if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
            });

            $(".manfaat-element .box").height(maxHeight);
          }
          //itemsDesktop : [767,1],
          //itemsDesktopSmall : [767,1]
      });

      $("#tahukah-anda").owlCarousel({
          navigation : true, // Show next and prev buttons
          items:1
      });

    /* ==========================================================================
      BOD Slider
    ========================================================================== */
      $(".bod-section").owlCarousel({
          navigation : true, // Show next and prev buttons
          items: 2,
          itemsDesktop : [1199,2],
          itemsDesktopSmall : [979,2],
          itemsTablet : [768,2],
          itemsMobile : [479,1],
          navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      });


    /* ==========================================================================
      Unit Slider
    ========================================================================== */
        $(".slideshow-unit").owlCarousel({
          navigation : false, // Show next and prev buttons
          autoPlay : 5000,
          paginationSpeed : 1000,
          stopOnHover : true,
          singleItem:true,
          goToFirstSpeed : 2000,
          transitionStyle:"goDown"
      });

      var unitSlide = $(".slideshow-unit").data('owlCarousel');
      $(".nextprev #prev").click(function(){
          unitSlide.prev();
          return false;
      });

        $(".nextprev #next").click(function(){
          unitSlide.next();
          return false;
      });

        /* ==========================================================================
      Teaser Slider
    ========================================================================== */
        $(".teaser-slider").owlCarousel({
          navigation : false, // Show next and prev buttons
          autoPlay : 3000,
          paginationSpeed : 1000,
          stopOnHover : true,
          singleItem:true,
          goToFirstSpeed : 2000,
          transitionStyle:"fade"
      });


      /* ==========================================================================
      Responsive Menu
    ========================================================================== */
    $(".off-canvas-list li.parent-menu").click(function(){
        $(this).toggleClass("expanded");
        return false;
    });

    $(".off-canvas-list .sub-parent").click(function(){
        $(this).toggleClass("expanded");
        return false;
    });

    $(".sub-menu-second  a").click(function(){
      //console.log('asd');
      window.location = $(this).attr('href');
        return true;
    });

    function fixedNavigation(){
        if($( window ).width() <= 1200){
          var fixednavi = $('#fixed-navigation .row').width();
          var menufix = $('.menu-primary-menu-container').width();
          var padding = $('#fixed-navigation ul > li').css('padding-right');
          var parsing = padding.replace( /[^\d.]/g, '' );

          var widthpadding = menufix - (parsing * 2 * 19);

          padding = parseInt(fixednavi) - parseInt(widthpadding);
          padding = padding / 2;
          padding = padding / 19;

          padding = parseInt(padding);
          //console.log(padding);
          $('#fixed-navigation ul > li').css('padding-right', padding + "px");
          $('#fixed-navigation ul > li').css('padding-left', padding + "px");
          $('#fixed-navigation ul li.home').css('padding-left', 15);
          $('#fixed-navigation ul li.home').css('padding-right', 15);
        // var menufixed = $('#fixedmenu .other').outerWidth(true);
        // fixednavi = fixednavi - menufixed - 200;
        // $('.menu-primary-menu-container').css("width", fixednavi+"px");
        }
    }

      $(window).resize(fixedNavigation);
      $(window).load(fixedNavigation);

      $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
              $("#mobile-navigation").addClass("fixed");
            } else {
              $("#mobile-navigation").removeClass("fixed");
            }
            fixedNavigation();
            return false;
        });



    /* ==========================================================================
      Responsive width
    ========================================================================== */
      function containerW(){
        //harga unit widget
        var unitW = $('#unitWidget .row').width();
        var unitBox = $('#unitWidget .boxContainer').outerWidth(true);
        unitW = unitW - unitBox - 20;
        $('.slideshow-unit').css("width",unitW+"px");

        //direktori widget
        var dirWidget = $('#direktori-widget').width();
        var dirbuttonW = $('#direktori-widget .button').outerWidth(true);
        dirWidget = dirWidget - dirbuttonW - 20;
        $('#direktori-widget input').css("width",dirWidget+"px");

        //news widget
        var newsTitle = $('#berita-terbaru .box').width();
        newsTitle = newsTitle - 55;
        $('#berita-terbaru h5').css("width",newsTitle+"px");
        $('#berita-terbaru .home_list_news_h5').css("width",newsTitle+"px");

        //newsletter widget
        var newsletterInput = $('#newsletter .box').width();
        var dirnewSW = $('#newsletter .button').outerWidth(true);
        newsletterInput = newsletterInput - dirnewSW - 20;
        $('#newsletter input').css("width",newsletterInput+"px");


        var findBranchInput2 = $('.large-4.branch').width();
        var findbuttonW2 = $('.large-4.branch .button').outerWidth(true);
        findBranchInput2 = findBranchInput2 - findbuttonW2 - 20;
        $('#kantor-cabang').css("width",findBranchInput2+"px");

        var searchPremi = $('#search-premi').width();
        var buttonPremi = $('#search-premi .buttonContainer').outerWidth(true);
        searchPremi = searchPremi - buttonPremi - 20;
        $('#premi-polis').css("width",searchPremi+"px");

        var contactUs = $('#contact-form').width();
        var labelContact = $('#contact-form label').outerWidth(true);
        contactUs = contactUs - labelContact - 20;
        $('#contact-form span.wpcf7-form-control-wrap').css("width",contactUs+"px");

        var manfaatList = $('#manfaat-luas li').width();
        var manfaatIcon = $('#manfaat-luas li span').outerWidth(true);
        manfaatList = manfaatList - manfaatIcon - 20;
        $('#manfaat-luas li p').css("width",manfaatList+"px");

        var perlindunganList = $('#listing-header li').width();
        var perlindunganIcon = $('#listing-header li span').outerWidth(true);
        perlindunganList = perlindunganList - perlindunganIcon - 20;
        $('#listing-header li p').css("width",perlindunganList+"px");

        var syaratList = $('#list-syarat li').width();
        var perlindunganIcon = $('#list-syarat li span').outerWidth(true);
        syaratList = syaratList - perlindunganIcon - 20;
        $('#list-syarat li .details').css("width",syaratList+"px");

        var selectIstilah = $('#istilah-asuransi').width();
        var istilahBtn = $('#istilah-asuransi button').outerWidth(true);
        selectIstilah = selectIstilah - istilahBtn - 40;
        $('#istilah-asuransi select').css("width",selectIstilah+"px");

        var uploadFile = $('.NFI-wrapper').width();
        var uploadBtn = $('.NFI-button').outerWidth(true);
        uploadFile = uploadFile - uploadBtn - 10;
        $('.NFI-filename').css("width",uploadFile+"px");

        var inputDir = $('#searchdir').width();
        var btnDir = $('.btn-dir').outerWidth(true);
        inputDir = inputDir - btnDir - 20;
        $('.inputdir').css("width",inputDir +"px");

        var iconDir = $('#chooseDir li').width();
        var textDir = $('#chooseDir .icon').outerWidth(true);
        iconDir = iconDir - textDir - 20;
        $('#chooseDir .details').css("width",iconDir +"px");

        var dirList = $('.direktori-list').width();
        var dirDetail = $('.direktori-list .map-details').outerWidth(true);
        dirList = dirList - dirDetail - 20;
        $('.direktori-list .details').css("width",dirList +"px");

        var pageWrapper = $('#page-container').width();
        var pageSidebar = $('aside .w-322').outerWidth(true);
        pageWrapper = pageWrapper - 360;
        $('#page-container .large-8.columns').css("width",pageWrapper +"px");

        var pageHalf = $('#page-half').width();
        pageHalf = pageHalf - 322;
        $('#page-half .large-8.columns').css("width",pageHalf +"px");

        var pageHalf = $('#custquick-care').width();
        pageHalf = pageHalf - 322;
        $('#custquick-care .large-8.columns').css("width",pageHalf +"px");

        var pageHalf = $('#custcare-center').width();
        pageHalf = pageHalf - 322;
        $('#custcare-center .large-8.columns').css("width",pageHalf +"px");

        var pageHalf = $('#bantuan').width();
        pageHalf = pageHalf - 322;
        $('#bantuan .large-8.columns').css("width",pageHalf +"px");

        var dirwrapper = $('#maincontent').width();
        dirwrapper = dirwrapper - 322;
        $('#direktori-wrapper.large-8.columns').css("width",dirwrapper +"px");
      }

      // Bind event listener
      $(window).resize(containerW);
      $(window).load(containerW);


    /* ==========================================================================
      addClass for selected menu Homepage
    ========================================================================== */
      if ( $("body").hasClass("home") ) {
          $("#mainmenu li.home").addClass("current-menu-item");
      }

    /* ==========================================================================
      addClass for search scroll fixed
    ========================================================================== */
      $("#fixed-navigation li.search-menu a").click(function(){
        $(".other").toggleClass('active');
      });

    /* ==========================================================================
      uniform init
    ========================================================================== */
    $(":radio").uniform();
    // //console.log('asdasdasd');

    /* ==========================================================================
      AXA Costumer Care
    ========================================================================== */
    $(".cstCare .costumer").click(function(){
      $(".cstCare").toggleClass("expanded");
      //console.log("expanded");
      return false;
    });

    $(".cstCare .produk-asuransi").click(function(){
      $(".selectwrapper").show();
      $(".cstCare .list-icon").hide();
      return false;
    });


      $('.productContact').change(function(){
        getContact = $(this).val();
        $(this).each(function(){
          if(getContact == 0){
            $(".contact-axa").hide();
          }
          else {
            $(".productContact option[value='"+getContact+"']").attr('selected','selected');
            $( ".ajaxContact" ).load( getContact +"#contact-axa" );
          }
        });
        return false;
      });
    /* ==========================================================================
      Harga Unit Harian Widget Expand
    ========================================================================== */
      function loadChart(current) {
        var $table = jQuery("#unit-table"),
            $rows  = $table.find("tbody tr");
        var rows  = [];

        $rows.each(function(row,v) {
            jQuery(this).find("td").each(function(cell,v) {
                if (typeof rows[cell] === 'undefined') rows[cell] = [];
                if (cell != 0) {
                    rows[cell][row] = parseFloat(jQuery(this).text().replace(/,/g, ""));
                } else {
                    //rows[cell][row] = Date.parse(jQuery(this).text());
                    rows[cell][row] = jQuery(this).text();
                }
                ////console.log(cell+": "+rows[cell][row]);
                ////console.log(moment());
                    //filterCategories = filterCategories;

            });
        });

        function transpose(a)
        {
            return Object.keys(a[0]).map(function (c) { return a.map(function (r) { return r[c]; }); });
        }

        var datas = transpose(rows);

        var datas = transpose(rows);

        //OFFER Pending Further Notice
        datas=datas.reverse();
        datas.unshift(Array('x',current));



        function drawVisualization() {
          // Create and populate the data table.
          var data = google.visualization.arrayToDataTable(datas

          );
                //console.log(datas);
                var datas2 = datas.slice(1);
                //console.log(datas2);
                var max = Math.max.apply(Math, datas2.map(function(i) {
                    return i[1];
                }));
                var min = Math.min.apply(Math, datas2.map(function(i) {
                    return i[1];
                }));
                //console.log(max);
                //console.log(min);

                var datalength = datas.length;
                //console.log(datalength);
                //console.log(datas[datalength-1]);
                if(datas[datalength-1][1] < datas[datalength-2][1] && datas[datalength-2][1] < datas[datalength-3][1] && datas[datalength-3][1] < datas[datalength-4][1]) {
                  var option = {
                    width: 353,
                        chartArea:{width: 353, top:10, left:50 },
                    legend: {position: "none"},
                        backgroundColor : "#F4F4F4",
                    vAxis: {maxValue: max + 10, minValue: min - 10}
                };
                //console.log("manual");
                } else {
                var option = {
                  width: 353,
                        chartArea:{width: 353, top:10, left:50 },
                  legend: {position: "none"},
                        backgroundColor : "#F4F4F4"

                };
                //console.log("auto");
                }

          // Create and draw the visualization.
          new google.visualization.LineChart(document.getElementById('visualization')).draw(data, option);    }

        google.load('visualization', '1.0', {'packages':['corechart'], 'callback' : drawVisualization});
      }
      $("#ulip-product select").change(function(){
          $("#unitWidget").addClass("expanded");
          value = $('#ulip-product select option:selected').attr('value');
          if(value == 0){
              $("#unitWidget").removeClass("expanded");
              return false;
          }

          var $loadElement = $('#chartContainer');
          $loadElement.html('<div class="loading absolute" style="height: 100%; width:100%; background:url('+bloginfo+'/images/loader.gif) center center no-repeat";></div>');

          $.ajax({
                type: 'GET',
                url: value+'?via_ajax=1',
                dataType: "html",
                success: function(data)
                {
                    $('.loading.absolute').hide();
                    $loadElement.append(data);
                    loadChart($('#ulip-product select option:selected').html());
                },
                error: function()
                {
                    console.log("error.");
                }
            });
        });

      // var d = new Date(year);
      // console.log(d);
      $( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true, yearRange: '2008:+0' });
      $( ".birthdate" ).datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true, yearRange: '1951:+0' });
      $( ".datepicker22" ).datepicker({ dateFormat: "dd/mm/yy", changeMonth: true, changeYear: true, yearRange: '1951:+0' });
      $( ".datepicker-ulip" ).datepicker();

      //Get selected date input type (preset or range)
      $("#uniform-range input[name=date-input-option]").change(function(){
        $("#ulipDateSelector .wrapper").toggleClass("disable");
        $("input[name=date-input]").val($(this).val()); //get value of selected input to pass to url
      });

      $("#preset").change(function(){
        $("#ulipDateSelector .wrapper").toggleClass("disable");
      });

      //Disable submit button if date is empty
      $("#ulipDateSelector .hasDatepicker").change(function(){
        var empty = false;
        $(".hasDatepicker").each(function(){
          if($(this).val() == '') {
            empty = true;
          }
        })
        if(empty) {
          $("#ulipDateSelector input[type=submit]").attr("disabled",true);
        } else {
          $("#ulipDateSelector input[type=submit]").attr("disabled",false);
        }
      });

      //based on selected date preset, redirect to proper page
    $(function(){
    $("#date-preset option:first").attr("selected","selected");
    });

      $("#date-preset").change(function(){
        var today = moment().format('YYYY-MM-DD');
        var startDate;
        switch($(this).val()) {
          case "10d" :
            startDate = moment().subtract('days',10).format('YYYY-MM-DD');
            break;
          case "1m" :
            startDate = moment().subtract('months',1).format('YYYY-MM-DD');
            break;
          case "3m" :
            startDate = moment().subtract('months',3).format('YYYY-MM-DD');
            break;
          case "6m" :
            startDate = moment().subtract('months',6).format('YYYY-MM-DD');
            break;
          case "1y" :
            startDate = moment().subtract('years',1).format('YYYY-MM-DD');
            break;
          case "2y" :
            startDate = moment().subtract('years',2).format('YYYY-MM-DD');
            break;
        }
        //window.location = "?datequery=false&date-input-option=range&startDate="+startDate+"&endDate="+today+"&val="+$(this).val();

        if($('body').hasClass('single-unit')){
          value = document.URL;
        }else{
          value = $('#ulip-product select option:selected').val();
        }

        url1 = value+"?datequery=false&date-input-option=range&startDate="+startDate+"&endDate="+today+"&val="+$(this).val()+"&via_ajax=1";

        $('#chartContainer').html('<div class="loading absolute" style="height: 100%; width:100%; background:url('+bloginfo+'/images/loader.gif) center center no-repeat";></div>');

        $.ajax({
          type: 'GET',
          url: url1,
          dataType: "html",
          success: function(data)
          {
            $('#chartContainer').html(data);
            $('.loading.absolute').hide();
            word = $('#tableArray').html().substring(0,4);

            if(word == 'Data'){
              $('#tableArray').css('display', 'block');
            }else{
              loadChart($('#ulip-product select option:selected').html());
            }
          },
          error: function()
          {
              console.log("error.");
          }
        });
      });

      //Form Harga Unit Submit
      jQuery("#endDate").change(function() {
          var startDate = $("#startDate").val();
          var endDate = $("#endDate").val();
          value = $('#ulip-product select option:selected').val();
          url1 = value+"?datequery=false&date-input-option=range&startDate="+startDate+"&endDate="+endDate+"&via_ajax=1";

          $.ajax({
            type: 'GET',
            url: url1,
            dataType: "html",
            success: function(data)
            {
              $('#chartContainer').html(data);
              word = $('#tableArray').html().substring(0,4);
              if(word == 'Data'){
                $('#tableArray').css('display', 'block');
              }else{
                loadChart($('#ulip-product select option:selected').html());
              }
            },
            error: function()
            {
                console.log("error.");
            }
          });
        });

      //set and update date preset based on url parameter
      $("#date-preset").val(getURLParameter("val"));
      $.uniform.update("#date-preset");

    function getURLParameter(name) {
        return decodeURI(
            (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
        );
    }


    /* ==========================================================================
      Isotope for Blog
    ========================================================================== */

      // var $container2 = $('#blog');
      //   $container2.isotope({
      //     itemSelector : '.news-bucket',
      //      masonry : {
      //           columnWidth : 255,
      //         }
      //   });

    /* ==========================================================================
      Isotope with filtering
    ========================================================================== */
      var $container = $('#product-listing #listing-items');
        $container.isotope({
          itemSelector : '.elements'
        });


        var $optionSets = $('#options .option-set'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
          var $this = $(this);
          // don't proceed if already selected
          if ( $this.hasClass('selected') ) {
            return false;
          }
          var $optionSet = $this.parents('.option-set');
          $optionSet.find('.selected').removeClass('selected');
          $this.addClass('selected');

          // make option object dynamically, i.e. { filter: '.my-filter-class' }
          var options = {},
              key = $optionSet.attr('data-option-key'),
              value = $this.attr('data-option-value');
          // parse 'false' as false boolean
          value = value === 'false' ? false : value;
          options[ key ] = value;
          if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
            // changes in layout modes need extra logic
            changeLayoutMode( $this, options )
          } else {
            // otherwise, apply new options
            $container.isotope( options );
          }

          return false;
        });

      /* ==========================================================================
      Bandingkan
    ========================================================================== */
      $('.matrix-cat').on('change', function (e) {
        //var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        var current = $(this)[0]['id'];

        var split = current.split("-");

        $(this).parent().next().removeClass("disable");
        ////console.log($(this)[0]['id']);
        $.ajax({
          type: 'GET',
          url: bloginfo+'/getProdukMatrix.php?post='+valueSelected,
          dataType: "html",
          success: function(data)
          {
              //console.log(data);
              $("#result-matrix-"+split[1]).html(data);
              //$('#matrix-result').append(data);
              $('.matrix-cat').each(function(){
                if(current == $(this)[0]['id'])
                {
                  ////console.log($(this));
                }
                else if($(this)[0]['id'] == "matrixcat-1")
                {

                }
                else{
                  $(this).children().each(function(){
                    ////console.log($(this));
                    if(valueSelected == this.value)
                    {
                      $(this)[0]['disabled'] = true;
                    }
                  });
                }
              });
          },
          error: function()
          {
              alert("Error!");
          }
        });
      });

    /* ==========================================================================
      Widget Pengajuan Klaim
    ========================================================================== */

      $('#pilih-solusi').on('change', function (e) {
        var valueSelected = this.value;
        var title = $("#pilih-solusi option[value='"+valueSelected+"']").text();
        $("#z").val(title);
        $("#q").val(valueSelected);
        $('#pilih-produk').load(bloginfo+'/getProduk.php?place=' + valueSelected);
        $('#produk-wrapper').removeClass('disable');
      });

      $("#polis").keyup(function(){
        var str = $(this).val();
        if(str.match(/^507|508|307|308|506|CMS0|CL|63|60|502|201/)) { //check if polis start with these numbers
            //$("span").text("AFI");
            $('#pilih-solusi option').removeAttr("selected");
            $('#pilih-solusi option[value="axa-financial-indonesia"]').attr("selected","selected");
            var valueSelected = $('#pilih-solusi').val();
            var title = $("#pilih-solusi option[value='"+valueSelected+"']").text();
            $("#z").val(title);
            $("#q").val(valueSelected);
        } else if(str.match(/^100-100|100-200|1001100|1010101|1010102|201|501|502/)){ //or these
            $('#pilih-solusi option').removeAttr("selected");
            $('#pilih-solusi option[value="axa-life-indonesia"]').attr("selected","selected");
            var valueSelected = $('#pilih-solusi').val();
            var title = $("#pilih-solusi option[value='"+valueSelected+"']").text();
            $("#z").val(title);
            $("#q").val(valueSelected);
        } else {
            $('#pilih-solusi option').removeAttr("selected");
            $('#pilih-solusi option:first-child').attr("selected","selected");
        }
      });


    /* ==========================================================================
      Others
    ========================================================================== */
      $(".brochure-menu").click(function(){
        $("#brochure-download").toggleClass("expanded", 500);
        return false;
      });

      $("input[type=file]").nicefileinput({
        label : 'Browse' // Spanish label
      });

        $('#pilih-tahun-berita').change(function() {
          year = $('#pilih-tahun-berita option:selected').text();
          //console.log(year);
          window.location = "?fyear="+year ;
        });

        $('#kinerja-bulan').change(function(){
          $('#kinerja-tahun').removeAttr("disabled");
        });

        $('#kinerja-tahun').change(function(){
          $('#button').removeAttr("disabled");
        });


        // $('#kinerja-bulanan').submit(function() {
        //    month1 = $('#kinerja-bulan option:selected').val();
        //    year1 = $('#kinerja-tahun option:selected').text();
        //    ////console.log("asd");
        //    window.location = baseurl+"/laporan-kinerja-bulanan"+"?fyear="+year1+"&"+fentity;
        //    return false;
        // });

        $('#laporan-tahunan, .validate').each(function(){
          $(this).validate();
        });


      $(".NFI-button").addClass("button blue right");
      $(".NFI-filename").attr('placeholder','Upload CV');
      $(".NFI-filename").attr("name","file_name");
      $(".NFI-filename").addClass("required");

      /* ==========================================================================
      Responsive functions
    ========================================================================== */
      /*layanan nasabah menu*/
        $("#layanan-submenu-mobile").change(function(){
            window.location = this.value
        });

        $("#layanan-submenu-mobile .current-menu-item").attr('selected', 'selected');

        /*direktori menu*/
        $("#dir-menu").change(function(){
            window.location = this.value
        });


    });


    /*===========================================================================
    Hide Maestrilink maxi advantage widget (GUARANTEED PRICE)
    =============================================================================*/
        $("#product").change(function(){
          var value = this.value;
          if (value=="http://www.axa-mandiri.co.id/unit/maestro-link-maxi-advantage-idr/"){
            $("#guaranteed_price").show();
          }
          else{
            $("#guaranteed_price").hide();
          }
        });
    // date picker page-contact.php
    $('#tgl_lahir.datepicker').datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true, yearRange: '1945:2000', defaultDate: '1945-01-01' });
    // $('#kode_unik.datepicker').datepicker({ dateFormat: "dd/mm/yy", changeMonth: true, changeYear: true, yearRange: '1945:2000', defaultDate: '1945-01-01' });

    //analytics

      $('ul#mainmenu li.menu-item-object-page').click(function(){
        // var arr = $('ul#mainmenu li.menu-item-object-page span').map(function(){
        //            return $(this).text();
        //            var test=$(this).text();
        //            // console.log(test);
        // }).get();
        // console.log(arr);
        var test=$(this).text();
                  console.log(test);
       
        
        
        // ga('send', 'event', 'button', 'click','Download Button');
      });

    /*===========================================================================
    FANCYBOX INLINE FOR HOMEPAGE
    =============================================================================*/
    if ($('body').hasClass('home')) {
      if ($(window).width()  > 640) {
      $(".various").fancybox({
          maxWidth  : 900,
          fitToView : true,
          width   : '90%',
          autoHeight  : false,
          autoSize  : false,
          closeClick  : false,
          autoCenter  : true,
          padding : 0
        });
    }else{
        $(".various").fancybox({
          maxWidth  : 600,
          maxHeight : 300,
          fitToView : true,
          width   : '80%',
          autoHeight  : true,
          autoSize  : false,
          closeClick  : false,
          autoCenter  : true,
          padding : 0
        });
    }
    };


    /*===========================================================================
    LAZY LOAD
    =============================================================================*/
    $('.lazy').lazy({
          effect: "fadeIn",
              // effectTime: 2000,
              // threshold: 10,

      });

    // Add Specific class for fixed menu
    // ---------------------------------
    $('#fixed-navigation').children().children().children().children().children().children().addClass('fix');
