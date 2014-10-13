$(function(){

	$(document).ready(function() {

		// disbles the backspace navigation, except in the input or textarea..
		$(document).on("keydown", function (e) {
		    if (e.which === 8 && !$(e.target).is("input, textarea")) {
		        e.preventDefault();
		    }
		});

		var base_url = "http://edostate.gov.ng/bipatas/";

    // assuming the controls you want to attach the plugin to
    // have the "datepicker" class set
    $('input.date_pick').Zebra_DatePicker({
		view: 'years',
		});

	// this is for the date of birth..
	 $('input.date_birth').Zebra_DatePicker({
		view: 'years',
		direction: ['1900-01-01', '1999-12-31']
		});

	//Relationship specify functionalit
	 $('#rship').change(function(){
		  var what = $(this).val();
		   if (what == "others"){
		    $('#lbl_specify').slideDown();
		  }else{
		    $('#lbl_specify').slideUp();
		  }

		});
	//relationship functionality ends here

	//Religion specify functionalit
	 $('#religion').change(function(){
		  var what = $(this).val();
		   if (what == "Others"){
		    $('#lbl_specify_rel').slideDown();
		  }else{
		    $('#lbl_specify_rel').slideUp();
		  }

		});
	//religion functionality ends here

    //change of name date functionality
	 $('input.date_con').Zebra_DatePicker({
		view: 'years',
		direction: ['1900-01-01', '2015-12-31']
		});
	//change of name date functionality ends here

    $('.yr_date').Zebra_DatePicker({
	  format: 'Y'
	  });

	  // Primary school year logic
	  $('.pri_yr_date').Zebra_DatePicker({
	  	format: 'Y',
	  	direction: ['1900', '2000']
	  });
	  // Primary school year Logic ends  here

	// Tertiary school year logic
	  $('.ter_yr_date').Zebra_DatePicker({
	  	format: 'Y',
	  	direction: ['1900', '2010']
	  });
	  // Tertiary school year Logic ends  here

	$("#jtitle").autocomplete(base_url+"js/autocomplete.php", {
        selectFirst: false
  	});

	$('input.number').focusout(function(){
		var value = $(this).val();
		if(!($.isNumeric(value))){
		  $(this).attr('value', '');
		  $(this).css('background', 'rgba(255,0,0,.2)');
		  alert("The highlighted field should be numeric");
		}else{
		   $(this).css('background', 'rgba(0,0,0,.2)');
		}
	 }); // end of input number should be numeric oo..

	//$('.emp_span').hide();
	//$('input.prom_date').attr('readonly', '');

	$('.emp_date').focusout(function(){
		$('.prom_date').val(" ");
		var emp_date = $(this).val();
		if(emp_date != ''){
			$('input.emp_date').attr('readonly', 'readonly');
			$('.prom_date').removeAttr('readonly');
			$('.prom_date').Zebra_DatePicker({
				view: 'years',
			  	direction: [emp_date, false]
			});
		}
	}); // End of date of last promotion logic ..


    // Start date of Primary School logic..
	$('.start_date').focusout(function(){
		$('.end_date').val(" ");
		var start_date = $(this).val();
		if(start_date != ''){
			$('input.start_date').attr('readonly', 'readonly');
			$('.end_date').removeAttr('readonly');
			$('.end_date').Zebra_DatePicker({
				format: 'Y',
			  	direction: [start_date, false]
			});
		}
	}); // End of Primary School logic ..

	// Start date of secondary School logic..
	$('.sec_start_yr').focusout(function(){
		$('.sec_end_yr').val(" ");
		var start_date = $(this).val();
		if(start_date != ''){
			$('input.start_date').attr('readonly', 'readonly');
			$('.sec_end_yr').removeAttr('readonly');
			$('.sec_end_yr').Zebra_DatePicker({
				format: 'Y',
			  	direction: [start_date, '2010']
			});
		}
	}); // End of Primary secondary logic ..

	// Start date of Tertiary School logic..
	$('.ter_start_yr').focusout(function(){
		$('.ter_end_yr').val(" ");
		var start_date = $(this).val();
		if(start_date != ''){
			$('input.start_date').attr('readonly', 'readonly');
			$('.ter_end_yr').removeAttr('readonly');
			$('.ter_end_yr').Zebra_DatePicker({
				format: 'Y',
			  	direction: [start_date, '2010']
			});
		}
	}); // End of Primary Tertiary logic ..


	$('#accnotype').focusout(function(){
		$('#accno').val(" ");
		var acct_type = $(this).val();
		if(acct_type == 'Regular'){
			$('#accno').attr('maxlength', '15');
		}else{
			$('#accno').attr('maxlength', '11');
		}
	}); // account number characters logic


	$('table.sec_sch').hide();
	$('table.ter_sch').hide();
	$('.ter_inst').attr('disabled', 'disabled');
	$('#nysc').attr('disabled', 'disabled');




	$('button.add_sec_sch').click(function(e){
		e.preventDefault();
		$('.equal_edit_form').css('display', 'block');

		var secschname = $('#nosecsch').val();
		var yroentry = $('#syoentry').val();
		var yrograd = $('#syograd').val();
		var secqual = $('#squalobt').val();

		if(secschname==""||yroentry==""||yrograd==""||secqual==""){
			alert("Please feel the necessary fields");
			return;
		}

		if($('table.sec_sch').is(":hidden")) {
			$('table.sec_sch').show();
		}

		var i;
		$(".sec_sch tbody").append(
        "<tr>"+
        "<td class=\"use\">"+ secschname +"</td>"+
        "<td>"+ yroentry +"</td>"+
        "<td>"+ yrograd +"</td>"+
        "<td>"+ secqual +"</td>"+
        "<td>"+ "<button class=\"rmv\">-</button>" +"</td>"+
        "</tr>");
        $('.ter_inst').removeAttr('disabled'); // this removes the hold on tertiary in stitution fields

        $.ajax({
	        url: base_url+'register/ajax_call',
	        data : {
	        	secschname: secschname,
	        	yroentry: yroentry,
	        	yrograd: yrograd,
	        	secqual: secqual,
	        	},
	        success: function(data){ alert(data);},
	        error: function(data){alert('failed');},
	        });

	        $('button.rmv').click(function(e){
	        	var that = $(this);
			e.preventDefault();
			i = $(this).parents('tr').find('td.use').html();
	        	$.ajax({
		        url: base_url+'register/ajax_call',
		        data : {
		        	del_sec_sch: secschname,
		        	},
		        success: function(data){
		        	alert(data);
		        	that.parents('tr').hide();
		        	},
		        error: function(data){alert('failed');},
		        });

			});

		      $('#nosecsch').val("");
	          $('#syoentry').val("");
	          $('#syograd').val("");
	          $('#squalobt').val("");

	}); // end of add secondary school logic..


	// prevents field from accepting Numbers
	$('input.onlytext').bind('keyup blur',function(){
	    var node = $(this);
	    node.val(node.val().replace(/[^A-Za-z ]/g,'') ); }
	);


	$('button.add_ter_sch').click(function(e){
		e.preventDefault();
		var nameotersch = $('#notersch').val();
		var tyoentry = $('#tyoentry').val();
		var tyograd = $('#tyograd').val();
		var tqualobt = $('#tqualobt').val();
		var matno = $('#matno').val();
		var spectn = $('#spectn').val();

		if(notersch=""||tyoentry==""||tyograd==""||tqualobt==""||spectn==""){
			alert("Please feel the necessary fields");
			return;
		}

		if($('table.ter_sch').is(":hidden")) {
			$('table.ter_sch').show();
		}

		var i;
		$(".ter_sch tbody").append(
        "<tr>"+
        "<td class=\"use2\">"+ nameotersch +"</td>"+
        "<td>"+ tyoentry +"</td>"+
        "<td>"+ tyograd +"</td>"+
        "<td>"+ tqualobt +"</td>"+
        "<td>"+ matno +"</td>"+
        "<td>"+ spectn +"</td>"+
        "<td>"+ "<button class=\"rmv2\">-</button>" +"</td>"+
        "</tr>");

        $('#nysc').removeAttr('disabled'); // this removes the hold on NYSC fields

         $.ajax({
	        url: base_url+'register/ajax_call',
	        data:{
	        	notersch: nameotersch,
	        	tyoentry: tyoentry,
	        	tyograd: tyograd,
	        	tqualobt: tqualobt,
	        	matno: matno,
	        	spectn: spectn,
	        	},
	        success: function(data){ alert(data);},
	        error: function(data){alert('failed');},
	        });

	     $('button.rmv2').click(function(e){
	        	var that = $(this);
				e.preventDefault();
				i = $(this).parents('tr').find('td.use2').html();
	        	$.ajax({
		        url: base_url+'register/ajax_call',
		        data : {
		        	del_tert_sch: nameotersch,
		        	},
		        success: function(data){
		        	alert(data);
		        	that.parents('tr').hide();
		        	},
		        error: function(data){alert('failed');},
		        });

			});

		$('#notersch').val("");
	    $('#tyoentry').val("");
	    $('#tyograd').val("");
	    $('#tqualobt').val("");
	    $('#matno').val("");
	    $('#spectn').val("");

	}); // End of add tertiary institution

	$('button.add_training').click(function(e){
		e.preventDefault();
		var course = $('#tracourse').val();
		var cert = $('#tracert').val();
		var from = $('#fyear').val();
		var to = $('#tyear').val();

		if(course==""||cert==""||from==""||to==""){
			alert("Please feel the necessary fields");
			return;
		}

		var i;
		$(".trainings tbody").append(
        "<tr>"+
        "<td class=\"use3\">"+ course +"</td>"+
        "<td>"+ cert +"</td>"+
        "<td>"+ from +"</td>"+
        "<td>"+ to +"</td>"+
        "<td>"+ "<button class=\"rmv3\">-</button>" +"</td>"+
        "</tr>");

        $.ajax({
	        url: base_url+'register/ajax_call',
	        data : {
	        	course: course,
	        	cert: cert,
	        	from: from,
	        	to: to,
	        	},
	        success: function(data){ alert(data);},
	        error: function(data){alert('failed');},
	        });

	        $('button.rmv3').click(function(e){
	        	var that = $(this);
				e.preventDefault();
				i = $(this).parents('tr').find('td.use3').html();
	        	$.ajax({
		        url: base_url+'register/ajax_call',
		        data : {
		        	del_trainig: course,
		        	},
		        success: function(data){
		        	alert(data);
		        	that.parents('tr').hide();
		        	},
		        error: function(data){alert('failed');},
		        });

			});

		      $('#tracourse').val("");
	          $('#tracert').val("");
	          $('#fyear').val("");
	          $('#tyear').val("");

	}); // end of add training logic..


	$('.right .section button').click(function(){
   		$('.sub_section').show();
   		var details = $(this).parent().next('div');
   		details.hide();
   		$('div.edit_form').hide();
   		details.next('div.edit_form').show();
   }); // edit detals button click


   // This function fetches secondary schools from session
   function get_sec_schls(arg){
   		var details = '';
		$.ajax({
			url: base_url+'staff/fetch_edu_data/'+arg,
			dataType: "JSON"
		}).done(function (data) {
				$.each(data, function () {
					details += "<tr>"+
					"<td class=\"use\">"+ this.secsch_name +"</td>"+
			        "<td>"+ this.secsch_entry_yr +"</td>"+
			        "<td>"+ this.secsch_grad_yr +"</td>"+
			        "<td>"+ this.secsch_qual +"</td>"+
			        "<td>"+ "<button class=\"rmv\">-</button>" +"</td>"+
			        "</tr>";
			});
			//alert(details);
			$(".sec_sch tbody").append(details);
		});
	}// The Secondary school fetch function ends here


	// this function fetches tertiary schools from session
	function get_ter_schls(arg){
   		var details = '';
		$.ajax({
			url: base_url+'staff/fetch_edu_data/'+arg,
			dataType: "JSON"
		}).done(function (data) {
				$.each(data, function () {
					details += "<tr>"+
			        "<td class=\"use2\">"+ this.notersch +"</td>"+
			        "<td>"+ this.tyoentry +"</td>"+
			        "<td>"+ this.tyograd +"</td>"+
			        "<td>"+ this.tqualobt +"</td>"+
			        "<td>"+ this.matno +"</td>"+
			        "<td>"+ this.spectn +"</td>"+
			        "<td>"+ "<button class=\"rmv2\">-</button>" +"</td>"+
			        "</tr>";
			});
			//alert(details);
			$(".ter_sch tbody").append(details);
		});
	}// The Tertiary school fetch ends here..

	// this function fetches trainings from session
	function get_training(arg){
   		var details = '';
		$.ajax({
			url: base_url+'staff/fetch_edu_data/'+arg,
			dataType: "JSON"
		}).done(function (data) {
				$.each(data, function () {
					details += "<tr>"+
			        "<td class=\"use3\">"+ this.course_name +"</td>"+
			        "<td>"+ this.certificate +"</td>"+
			        "<td>"+ this.from_yr +"</td>"+
			        "<td>"+ this.to_yr +"</td>"+
			        "<td>"+ "<button class=\"rmv3\">-</button>" +"</td>"+
			        "</tr>";
			});
			//alert(details);
			$(".trainings tbody").append(details);
		});
	}// The Training fetch ends here..




	get_sec_schls(1);
	get_ter_schls(2);
	get_training(3);

	$('.gtp button').click(function(){
		window.location.href = 'print_page';
	});


 });

});// end of document.ready.