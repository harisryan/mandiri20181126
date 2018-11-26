<?php/** * Template Name: Prechat Form Backup*/?>
<apex:page showHeader="false">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- This script takes the endpoint URL parameter passed from the deployment page and makes it the action for the form -->
  <script type='text/javascript'>
  (function() {
    function handlePageLoad() {
      var endpointMatcher = new RegExp("[\\?\\&]endpoint=([^&#]*)");
      document.getElementById('prechatForm').setAttribute('action',
      decodeURIComponent(endpointMatcher.exec(document.location.search)[1]));
    } if (window.addEventListener) {
      window.addEventListener('load', handlePageLoad, false);
    } else {
      window.attachEvent('onload', handlePageLoad, false);
    }
  })();
  </script>

    <!-- JS placeholder for ie9 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://mathiasbynens.github.io/jquery-placeholder/jquery.placeholder.js"></script>
    <script>

       $(function() {
          $('input, textarea').placeholder({customClass:'my-placeholder'});
        });
    </script>

  <img id="liveagent_button_online_5736F0000000FeH" onclick="liveagent.startChat('5736F0000000FeH')" src="https://servicecloudtrial-155c0807bf-1567dbb608d.force.com/resource/1471676675000/IconChat" />
  <img id="liveagent_button_offline_5736F0000000FeH" src="https://servicecloudtrial-155c0807bf-1567dbb608d.force.com/resource/1470988243000/Closed" />
  <script type="text/javascript">
  if (!window._laq) {
    window._laq = [];
  }
  window._laq.push(function(){liveagent.showWhenOnline('5736F0000000FeH', document.getElementById('liveagent_button_online_5736F0000000FeH'));
    liveagent.showWhenOffline('5736F0000000FeH', document.getElementById('liveagent_button_offline_5736F0000000FeH'));
  });
  </script>

  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->

  <link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet">
  <style type="text/css">

    h1{
    font-size: 28px;
    }

  </style>
  <section class="prechat">
    <h1>Isi Form Berikut Ini :</h1>
    <!-- Form that gathers information from the chat visitor and sets the values to Live Agent Custom Details used later in the example -->
    <form method='post' id='prechatForm'>
      <input type='text' class="custom-file-input" name='liveagent.prechat.name' id='prechat_field_name' placeholder = "Nama" required/>
      <!-- Last name: <input type='text' name='liveagent.prechat:ContactLastName' id='lastName' required/><br /> -->
      <input type='text' class="custom-file-input" name='liveagent.prechat:ContactEmail' id='email' placeholder = "Email" required/>
      <input type='text' class="custom-file-input" name='liveagent.prechat:ContactPhone' id='phone' placeholder = "Phone" required/>

      <select class="custom-file-input" id="polis__c" name="entity" required>
        <option value="">--Tipe Asuransi--</option>
        <option value="MAGI">Asuransi Umum dan Kendaraan</option>
        <option value="AMFS">Asuransi Jiwa</option>
      </select>
      <select class="custom-file-input" id="subjectChange" name="liveagent.prechat:CaseSubject" required disabled="disabled">
        <option value="">Pilih Subject</option>
      </select>
      <select class="custom-file-input" id="nasabahChange" name="status_nasabah" required>
        <option value="">Apakah Anda Nasabah?</option>
        <option value="y">Ya</option>
        <option value="t">Tidak</option>
      </select>
      <input type='text' class="custom-file-input" name='liveagent.prechat:ContactPolicy_No_Numeric' id='Policy_No_Numeric__c' placeholder="Nomor Polis (khusus nasabah)" readonly />

      <!-- <input type='text' class="custom-file-input" name='liveagent.prechat:ContactPolicy_No_Numeric' placeholder = "Nomor Polis" id='polis__c'/> -->
      <input type="hidden" name="liveagent.prechat.buttons" id="valID" value="">
      <!-- Department: <select name="liveagent.prechat.buttons"> -->
        <!-- Values are LiveChatButton and/or User IDs. -->
        <!-- <option value="">General</option>
        <option value="5736F0000000Fe7">AMFS</option>
        <option value="5736F0000000FeH">MAGI</option>
      </select> -->
      <!-- Hidden fields used to set additional custom details -->
      <input type="hidden" name="liveagent.prechat:CaseStatus" value="New" /><br />

      <!-- This example assumes that "Chat" was added as picklist value to the Case Origin field -->
      <input type="hidden" name="liveagent.prechat:CaseOrigin" value="Chat" /><br />

      <!-- This example will set the Case Record Type to a specific value for the record type configured on the org. Lookup the case record type's id on your org and set it here -->
      <input type="hidden" name="liveagent.prechat:CaseRecordType" value="012D00123456789" />

      <!-- Used to set the visitor's name for the agent in the Console -->
      <!-- <input type="hidden" name="liveagent.prechat.name" id="prechat_field_name" /> -->
      <!-- map: Use the data from prechat form to map it to the Salesforce record's fields -->
      <input type="hidden" name="liveagent.prechat.findorcreate.map:Contact" value="Name,name;Email,ContactEmail;Phone,ContactPhone;Policy_No_Numeric__c,ContactPolicy_No_Numeric" />
      <input type="hidden" name="liveagent.prechat.findorcreate.map:Case" value="Subject,CaseSubject;Status,CaseStatus;Origin,CaseOrigin;RecordTypeId,CaseRecordType" />
      <!-- doFind, doCreate and isExactMatch example for a Contact:
      Find a contact whose Email exactly matches the value provided by the customer in the form
      If there's no match, then create a Contact record and set it's First Name, Last Name, Email, and Phone to the values provided by the customer -->
      <input type="hidden" name="liveagent.prechat.findorcreate.map.doFind:Contact" id="findContact" value="Policy_No_Numeric__c,true" />
      <input type="hidden" name="liveagent.prechat.findorcreate.map.isExactMatch:Contact" id="matchContact" value="Policy_No_Numeric__c,true" />
      <input type="hidden" name="liveagent.prechat.findorcreate.map.doCreate:Contact" value="Name,true;Email,true;Phone,true;Policy_No_Numeric__c,true" />
      <!-- doCreate example for a Case: create a case to attach to the chat, set the Case Subject to the value provided by the customer and set the case's Status and Origin fields -->
      <input type="hidden" name="liveagent.prechat.findorcreate.map.doCreate:Case" value="Subject,true;Status,true;Origin,true;RecordTypeId,true" />
      <!-- linkToEntity: Set the record Contact record, found/created above, as the Contact on the Case that's created -->
      <input type="hidden" name="liveagent.prechat.findorcreate.linkToEntity:Contact" value="Case,ContactId" />
      <!-- showOnCreate: Open the Contact and Case records as sub-tabs to the chat for the agent in the Console -->
      <input type="hidden" name="liveagent.prechat.findorcreate.showOnCreate:Contact" value="true" />
      <input type="hidden" name="liveagent.prechat.findorcreate.showOnCreate:Case" value="true" />
      <!-- saveToTranscript: Associates the records found / created, i.e. Contact and Case, to the Live Chat Transcript record. -->
      <input type="hidden" name="liveagent.prechat.findorcreate.saveToTranscript:Contact" value="ContactId" />
      <input type="hidden" name="liveagent.prechat.findorcreate.saveToTranscript:Case" value="CaseId" />
      <!-- displayToAgent: Hides the case record type from the agent -->
      <input type="hidden" name="liveagent.prechat.findorcreate.displayToAgent:CaseRecordType" value="false" />
      <!-- searchKnowledge: Searches knowledge article based on the text, this assumes that Knowledge is setup -->
      <input type="hidden" name="liveagent.prechat.knowledgeSearch:CaseSubject" value="true" />
      <input type='submit' class="custom-file-submit" value='Chat Now' id='prechat_submit'/>
      <!-- Set the visitor's name for the agent in the Console to first and last name provided by the customer -->
      <script type="text/javascript">
    $('#prechat_submit').click(function(e){
      if($("#prechat_field_name").val() != '' && $("#email").val() != '' && $("#phone").val() != '' && $("#polis__c").val() != '' && $("#subjectChange").val() != '' && $("#nasabahChange").val() != '' )
      {
        if (($("#nasabahChange").val()=='y' && $("#Policy_No_Numeric__c").val()!='') || $("#nasabahChange").val()=='t')
        {
          //$('#prechat_submit').prop('disabled', true);
          //e.preventDefault();
          $.ajax({
            type: "POST",
            url: "<?=site_url()?>/axamandiri_form/kontak/submit_prechat",
            data: $('form').serialize(),
            success: function(msg)
            {
              console.log('Success');
            }
          });
        }
      };
    });

      jQuery('#Policy_No_Numeric__c').keyup(function (){
          this.value = this.value.replace(/[^0-9\.]/g,'');
      });

      $('#polis__c')
        .keydown(function (e) {
          var key = e.charCode || e.keyCode || 0;
          $polis = $(this);
          // Auto-format- do not expose the mask as the user begins to type
          if (key !== 8 && key !== 9) {
            if ($polis.val().length === 3) {
              $polis.val($polis.val() + '-');
            }
          }
          // Allow numeric (and tab, backspace, delete) keys only
          return (key == 8 ||
              key == 9 ||
              key == 46 ||
              key == 189 ||
              (key >= 48 && key <= 57) ||
              (key >= 96 && key <= 105));
        })

        function setName() {
          document.getElementById("prechat_field_name").value =
          document.getElementById("firstName").value + " " + document.getElementById("lastName").value;
        }

        $('#polis__c').change(function() {
          var entity = $(this).val(),
          caseTypeAMFS = '<option value="">Pilih Subject</option><option value="Informasi Produk">Informasi Produk</option><option value="Informasi Polis">Informasi Polis</option><option value="Informasi Status Klaim">Informasi Status Klaim</option><option value=" Informasi Saldo Investasi"> Informasi Saldo Investasi</option><option value="Prosedur Klaim">Prosedur Klaim</option><option value="Prosedur Penarikan Dana">Prosedur Penarikan Dana</option><option value="Prosedur Pengkinian Data">Prosedur Pengkinian Data</option><option value="Prosedur Keluhan">Prosedur Keluhan</option><option value="Other">Other</option>';
          caseTypeMAGI = '<option value="">Pilih Subject</option><option value="Informasi Produk">Informasi Produk</option><option value="Informasi Polis">Informasi Polis</option><option value="Informasi Status Klaim">Informasi Status Klaim</option><option value="Layanan Derek">Layanan Derek</option><option value="Other">Other</option>'
          if (entity != '') {
            $('#subjectChange').empty();
            if (entity == 'MAGI') {
              $('#valID').val('5736F0000000FeH');
              $('#subjectChange').append(caseTypeMAGI);
            }
            if (entity == 'AMFS') {
              $('#subjectChange').append(caseTypeAMFS);
              $('#valID').val('5736F0000000Fe7');
            }
            $('#subjectChange').removeAttr('disabled');
          } else {
            $('#subjectChange').attr('disabled', 'disabled');
          }

          if (entity == "MAGI") {
            $('#Policy_No_Numeric__c').val("Non Customer MAGI");
          } else if (entity == "AMFS") {
            $('#Policy_No_Numeric__c').val("Non Customer AMFS");
          } else {
            $('#Policy_No_Numeric__c').val("");
          }
        });

        $('#nasabahChange').change(function() {
            var statusNasabah = $(this).val();
            $('.custom-file-submit').removeClass("cp-display--none");
      console.log('Change');
            if (statusNasabah == 'y') {
              // $('#Policy_No_Numeric__c').removeClass("cp-display--none");
              // $('#Policy_No_Numeric__c').addClass("cp-display--block");
              // $('#Policy_No_Numeric__c').show();
              // $('#Policy_No_Numeric__c').removeAttr('disabled');
              $('#Policy_No_Numeric__c').removeAttr('readonly');
              $('#Policy_No_Numeric__c').attr('required', 'required');
              $('#Policy_No_Numeric__c').val('');
              console.log('pass change yes')
            } else {
              // $('#Policy_No_Numeric__c').removeClass("cp-display--block");
              // $('#Policy_No_Numeric__c').addClass("cp-display--none");
              // $('#Policy_No_Numeric__c').hide();
              $('#Policy_No_Numeric__c').removeAttr('required', 'required');
              // $('#Policy_No_Numeric__c').attr('disabled', 'disabled');
              $('#Policy_No_Numeric__c').attr('readonly', 'readonly');
              console.log('pass change no');

              if ($('#polis__c').val() == "MAGI") {
                $('#Policy_No_Numeric__c').val("Non Customer MAGI");
              } else if ($('#polis__c').val() == "AMFS") {
                $('#Policy_No_Numeric__c').val("Non Customer AMFS");
              } else {
                $('#Policy_No_Numeric__c').val("");
              }
            }
          });

        (function ($) {
          $.support.placeholder = ('placeholder' in document.createElement('input'));
        })(jQuery);


        //fix for IE7 and IE8
        $(function () {
          if (!$.support.placeholder) {
             $("[placeholder]").focus(function () {
                 if ($(this).val() == $(this).attr("placeholder")) $(this).val("");
             }).blur(function () {
                 if ($(this).val() == "") $(this).val($(this).attr("placeholder"));
             }).blur();

             $("[placeholder]").parents("form").submit(function () {
                 $(this).find('[placeholder]').each(function() {
                     if ($(this).val() == $(this).attr("placeholder")) {
                         $(this).val("");
                     }
                 });
             });
          }
        });

      </script>
      <style type="text/css">
      p {font-weight: bolder }
      </style>
    </form>
  </section>
</apex:page>
