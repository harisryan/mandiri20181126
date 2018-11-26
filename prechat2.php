<?php/** * Template Name: Prechat2 Form */?>
<apex:page showHeader="false">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript">
  </script>

  <img id="liveagent_button_online_57328000000L31o" onclick="liveagent.startChat('57328000000L31o')" src="https://servicecloudtrial-155c0807bf-1567dbb608d.force.com/resource/1471676675000/IconChat" />
  <img id="liveagent_button_offline_57328000000L31o" src="https://servicecloudtrial-155c0807bf-1567dbb608d.force.com/resource/1470988243000/Closed" />

  <script type="text/javascript">
  if (!window._laq) {
    window._laq = [];
  }

  window._laq.push(function(){liveagent.showWhenOnline('57328000000L31o', document.getElementById('liveagent_button_online_57328000000L31o'));
    liveagent.showWhenOffline('57328000000L31o', document.getElementById('liveagent_button_offline_57328000000L31o'));
  });
  </script>

  <h1>Isi Form Berikut Ini :</h1>
  <!-- Form that gathers information from the chat visitor and sets the values to Live Agent Custom Details used later in the example -->
  <form method='post' id='prechatForm'>
    Nama : <input type='text' name='liveagent.prechat.name' id='prechat_field_name' required/><br />
    <!-- Last name: <input type='text' name='liveagent.prechat:ContactLastName' id='lastName' required/><br /> -->
    Email: <input type='text' name='liveagent.prechat:ContactEmail' id='email' required/><br />
    Phone: <input type='text' name='liveagent.prechat:ContactPhone' id='phone' required/><br />
    Nomor Polis: <input type='text' name='liveagent.prechat:NomorPolis' placeholder = "xxx-xxxxxxxxxx" id='polis__c'/><br />
    <input type="hidden" name="liveagent.prechat.buttons" id="valID" value="57328000000L2zh">
    <!-- Department: <select name="liveagent.prechat.buttons"> -->
      <!-- Values are LiveChatButton and/or User IDs. -->
      <!-- <option value="57328000000L2zh">General</option>
      <option value="57328000000L2yw">AMFS</option>
      <option value="57328000000L31o">MAGI</option>
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
    <input type="hidden" name="liveagent.prechat.findorcreate.map:Contact" value="Name,name;Email,ContactEmail;Phone,ContactPhone;Polis__c,NomorPolis" />
    <input type="hidden" name="liveagent.prechat.findorcreate.map:Case" value="Subject,CaseSubject;Status,CaseStatus;Origin,CaseOrigin;RecordTypeId,CaseRecordType" />
    <!-- doFind, doCreate and isExactMatch example for a Contact:
    Find a contact whose Email exactly matches the value provided by the customer in the form
    If there's no match, then create a Contact record and set it's First Name, Last Name, Email, and Phone to the values provided by the customer -->
    <input type="hidden" name="liveagent.prechat.findorcreate.map.doFind:Contact" value="Email,true" />
    <input type="hidden" name="liveagent.prechat.findorcreate.map.isExactMatch:Contact" value="Email,true" />
    <input type="hidden" name="liveagent.prechat.findorcreate.map.doCreate:Contact" value="Name,true;Email,true;Phone,true;Polis__c,true" />
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
    <input type='submit' value='Chat Now' id='prechat_submit'/>
    <!-- Set the visitor's name for the agent in the Console to first and last name provided by the customer -->

    <script type="text/javascript">
    $('#polis__c')
    .keydown(function (e) {
      var key = e.charCode || e.keyCode || 0;
      $phone = $(this);

      // Auto-format- do not expose the mask as the user begins to type
      if (key !== 8 && key !== 9) {
        if ($phone.val().length === 3) {
          $phone.val($phone.val() + '-');
        }
      }

      // Allow numeric (and tab, backspace, delete) keys only
      return (key == 8 ||
          key == 9 ||
          key == 46 ||
          (key >= 48 && key <= 57) ||
          (key >= 96 && key <= 105));
    })

    function setName() {
      document.getElementById("prechat_field_name").value =
      document.getElementById("firstName").value + " " + document.getElementById("lastName").value;
    }

    $('#polis__c').change(function() {
      if($(this).val().length >= 10) {
        $('#prechat_submit').attr('disabled', 'disabled');
        var no_polis = $(this).val();
        $.ajax({
          type: 'GET',
          url: '<?=site_url()?>'+'/get-entity/?no_polis='+no_polis,
          dataType: "json",
          success: function(data)
          {
            if (data.entity == 'MAGI') {
              $('#valID').val('57328000000L31o');
            }
            if (data.entity == 'AMFS') {
              $('#valID').val('57328000000L2yw');
            }

            $('#prechat_submit').removeAttr('disabled');
          },
          error: function()
          {
            $('#prechat_submit').removeAttr('disabled');
          }
        });
      }
    });

    </script>

    <style type="text/css">
    p {font-weight: bolder }
    </style>

  </form>
</apex:page>
