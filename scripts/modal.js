$(document).ready(function(){

  // MODAL
  var modalText = {
    Cigna: {
      title: 'Cigna',
      tag: 'LadyBird',
      detail: 'The scope of Strategic Frontend Program will include design, development of components for the mentioned projects in the cloudscape platform, for Cigna Supplemental Benefits. Beneficiary will have the following responsibilities for this program. Equotes application is to generate web pages for Agent operations. This application uses the configuration provided by Underwriting for building web pages. This application is designed to be a single sign on application so Agent View Portal login will provide access to Equotes as well. Logged-in agents are allowed to perform activities like campaign selection, applicant search/registration, product search and selection, quote generation, and policy Enrollment. This application is designed to handle incomplete (partially filled) applications as well. A logged-in Agent is allowed to fill in the insurance application in single/multiple interactions through phone or personal meeting. Agents can start a fresh new application or they can search for existing incomplete applications, if any. If an incomplete application is selected, pre-population process of this application takes care of populating available applicants and already selected products(if any) details with updated rates. For incomplete application, agents are provided an option to start from the page where they left it, in their last interaction. Major responsibilities of the Beneficiary for this project, are listed below',
      
    },
    USAA: {
      title: 'USAA',
      tag:'Shared PQ & The Bulk Attribute Tool(BAT)',
      detail: ' USAA call centre receives numerous calls per day, all dialed-in customer information is stored in 3P file format in different locations respectively in referent databases. This application works as a translation layer to process these 3P files saves in different databases. These 3P files reached to the system on a scheduled manner and stores in OADB Databases, Shared PQ JSR Batch gathers this data from different databases and stores in centralized QA Report Database, Share PQ handles the burden in removing the redundant 3p records and reprocessing 3P files in its business defined manner USAA The Bulk Attribute Tool(BAT) is used to alter the attributes of agents both in bulk and individually. An Attribute identify a call routing requirement, such as language, location, or Agent expertise. Here we using Tool React and redux for design and connecting API. We are using React for Design Single pages and Redux we are using for API connecting We are creating our Own components not using the other components'    ,
    },
    DTE1: {
      title: 'DTE',
      tag: '',
      detail: 'DTE energy Project Angery Bird .We are developing the Smart Mobile app Which can help full to custemor there can pay there PG&E bill there mobiles app. This Application we using the Technology React JS and React Native    ',
    },
    DTE: {
      title: 'DTE',
      tag: 'Snapwork',
      detail: 'DTE energy is PG&E payments on this application i Just working on fix the issue UI design and changing code to reducing the code by using genic and dynamic component make reusable.  ',
    },
    
    
  };

  $('#gallery .button').on('click', function(){
    fillModal(this.id);
    $('.modal-wrap').addClass('visible');
  });

  $('.close').on('click', function(){
    $('.modal-wrap, #modal .button').removeClass('visible');
  });

  $('.mask').on('click', function(){
    $('.modal-wrap, #modal .button').removeClass('visible');
  });

  var carousel = $('#carousel'),
      slideWidth = 700,
      threshold = slideWidth/3,
      dragStart, 
      dragEnd;

  setDimensions();

  $('#next').click(function(){ shiftSlide(-1) })
  $('#prev').click(function(){ shiftSlide(1) })

  carousel.on('mousedown', function(){
    if (carousel.hasClass('transition')) return;
    dragStart = event.pageX;
    $(this).on('mousemove', function(){
      dragEnd = event.pageX;
      $(this).css('transform','translateX('+ dragPos() +'px)');
    });
    $(document).on('mouseup', function(){
      if (dragPos() > threshold) { return shiftSlide(1) }
      if (dragPos() < -threshold) { return shiftSlide(-1) }
      shiftSlide(0);
    });
  });

  function setDimensions() {
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     slideWidth = $(window).innerWidth();
    }
    $('.carousel-wrap, .slide').css('width', slideWidth);
    $('.modal').css('max-width', slideWidth);
    $('#carousel').css('left', slideWidth * -1)
  }

  function dragPos() {
    return dragEnd - dragStart;
  }

  function shiftSlide(direction) {
    if (carousel.hasClass('transition')) return;
    dragEnd = dragStart;
    $(document).off('mouseup')
    carousel.off('mousemove')
            .addClass('transition')
            .css('transform','translateX(' + (direction * slideWidth) + 'px)'); 
    setTimeout(function(){
      if (direction === 1) {
        $('.slide:first').before($('.slide:last'));
      } else if (direction === -1) {
        $('.slide:last').after($('.slide:first'));
      }
      carousel.removeClass('transition')
      carousel.css('transform','translateX(0px)'); 
    },700)
  }

  function fillModal(id) {
    $('#modal .title').text(modalText[id].title);
    $('#modal .detail').text(modalText[id].detail);
    $('#modal .tag').text(modalText[id].tag);
    if (modalText[id].link) $('#modal .button').addClass('visible')
                                               .parent()
                                               .attr('href', modalText[id].link)

    $.each($('#modal li'), function(index, value ) {
      $(this).text(modalText[id].bullets[index]);
    });
    $.each($('#modal .slide'), function(index, value) {
      $(this).css({
        background: "url('img/slides/" + id + '-' + index + ".jpg') center center/cover",
        backgroundSize: 'cover'
      });
              
    });
  }
})
