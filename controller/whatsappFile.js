// 

function decorateWhatsAppLink() {
    //set up the url
    var url = 'whatsapp://send?phone=';
  
    //define the message text
    var phone = '0023780090489';
  
    //encode the text
    var encodedPhone = encodeURIComponent(phone);
  
    //find the link
    var $whatsApp = $('.whatsapp a');
  
    //set the href attribute on the link
    $whatsApp.attr('href', url + encodedPhone);
  }
  
  //call the decorator function
  decorateWhatsAppLink()