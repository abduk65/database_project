$(document).ready(function() {
    "use strict";

    //LEFT MOBILE MENU OPEN
    $(".ts-menu-5").on('click', function() {
        $(".mob-right-nav").css('right', '0px');
    });

    //LEFT MOBILE MENU OPEN
    $(".mob-right-nav-close").on('click', function() {
        $(".mob-right-nav").css('right', '-270px');
    });

    //LEFT MOBILE MENU CLOSE
    $(".mob-close").on('click', function() {
        $(".mob-close").hide("fast");
        $(".menu").css('left', '-92px');
        $(".mob-menu").show("slow");
    });

    //mega menu
    $(".t-bb").hover(function() {
        $(".cat-menu").fadeIn(50);
    });
    $(".ts-menu").mouseleave(function() {
        $(".cat-menu").fadeOut(50);
    });

    //mega menu
    $(".sea-drop").on('click', function() {
        $(".sea-drop-1").fadeIn(100);
    });
    $(".sea-drop-1").mouseleave(function() {
        $(".sea-drop-1").fadeOut(50);
    });
    $(".dir-ho-t-sp").mouseleave(function() {
        $(".sea-drop-1").fadeOut(50);
    });

    //mega menu top menu
    $(".sea-drop-top").on('click', function() {
        $(".sea-drop-2").fadeIn(100);
    });
    $(".sea-drop-1").mouseleave(function() {
        $(".sea-drop-2").fadeOut(50);
    });
    $(".top-search").mouseleave(function() {
        $(".sea-drop-2").fadeOut(50);
    });

    //ADMIN LEFT MOBILE MENU OPEN
    $(".atab-menu").on('click', function() {
        $(".sb2-1").css("left", "0");
        $(".btn-close-menu").css("display", "inline-block");
    });

    //ADMIN LEFT MOBILE MENU CLOSE
    $(".btn-close-menu").on('click', function() {
        $(".sb2-1").css("left", "-350px");
        $(".btn-close-menu").css("display", "none");
    });

    //mega menu
    $(".t-bb").hover(function() {
        $(".cat-menu").fadeIn(50);
    });
    $(".ts-menu").mouseleave(function() {
        $(".cat-menu").fadeOut(50);
    });
    //review replay
    $(".edit-replay").on('click', function() {
        $(".hide-box").show();
    });

    //PRE LOADING
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });

    //Collapsible
    $('.collapsible').collapsible();

    //material select
    $('select').material_select();
	

    //HOME PAGE FIXED MENU
    $(window).scroll(function() {

        if ($(this).scrollTop() > 450) {
            $('.hom-top-menu').fadeIn();
            $('.cat-menu').hide();
        } else {
            $('.hom-top-menu').fadeOut();
        }
    });
});

	$(document).ready(function() {
		$("body").on("contextmenu",function(){
		   return true;
		});
	document.onkeydown = function(e) {
			if (e.ctrlKey && 
				(e.keyCode === 67 || 
				 e.keyCode === 86 || 
				 e.keyCode === 85 || 
				 e.keyCode === 117)) {
				return true;
			} else {
				return true;
			}
	};	
	}); 
	$(document).keydown(function(event){
		if(event.keyCode==123){
		return true;
	   }
	else if(event.ctrlKey && event.shiftKey && event.keyCode==73){        
		  return true;  //Prevent from ctrl+shift+i
	   }
	});	


$(document).ready(function (){
  var myTable =   $("#myTable").DataTable({
        paging: true, 
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            {
                text: 'Email',
                className: 'email-btn',
                action: customButton
            }
        ],
        columnDefs: [
            {
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }
        ],
        select: {
            style: 'multiple',
            selector: 'td'
        },
        order: [[1, 'asc']]
    });

    myTable.on('select', function() 
    {
        if (myTable.rows('.selected').length > 0) {
            
        } else {
            myTable.buttons().remove('deleteSelectedRows');
        }
    });


})

function customButton(e, dt, node, config) {
    var data = dt.row(node.parentNode).data();

    console.log(data)
          // Create a new email form
          var form = document.createElement('form');
          form.action = 'mailto:' + data.email;
          form.method = 'post';

          // Add the email subject and body to the form
          var subject = document.createElement('input');
          subject.type = 'text';
          subject.name = 'subject';
          subject.placeholder = 'Subject';

          var body = document.createElement('textarea');
          body.name = 'body';
          body.placeholder = 'Body';

          form.appendChild(subject);
          form.appendChild(body);

          // Display the email form in a popup
          var popup = window.open('', 'Email', 'width=500,height=300');
          popup.document.body.appendChild(form);
}

function deleteSelectedRows(tableId) {
    const table = $("#" + tableId).DataTable();
    const selectedRows = table.rows({selected: true});

    if (confirm("Are you sure you want to delete the selected rows?")) {
        table.rows('.selected').remove();
    }
}