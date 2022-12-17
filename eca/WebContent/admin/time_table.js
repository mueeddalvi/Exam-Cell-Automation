
$(document).ready(function () { /* DOM ready */
	$('#submitsubject').click(function () {
		$.post('addStuff.php', {
			BRANCH: $("#branchID2 :selected").val(),
			YEAR: $("#yearID2 :selected").val(),
			SEM: $("#semID2 :selected").val(),
			SUBN: $("#subname").val(),
			SUBC: $("#subcode").val(),
			DAT: $('#date').val()
		}, function (res) {
			var areas = JSON.parse(res);
			var temp = '';
			temp += `<thead> <tr>
						  <th> </th>
						  <th>Subject Name</th>
						  <th>Subject Code</th>
						  <th>Date </th>
						</tr> <thead>`;
			for (var i = 0; i < areas.length; i++) {
				temp += '<tbody> <tr> <td> <input type="radio" id="checkid" name="radiocheck" value="' + areas[i].subject_code + '" ></td> <td value="' + areas[i].subject_name + '">' + areas[i].subject_name + '</td>' + '<td value="' + areas[i].subject_code + '">' + areas[i].subject_code + '</td>' + '<td value="' + areas[i].date_time + '">' + areas[i].date_time + '</td> </tr> </tbody> ';
			}
			$('#subject_t').empty();
			$('#subject_t').append(temp);
		});
	});
	$('#deletesub').click(function () {
		$.post('deleteStuff.php', {
			SUBC: $('input[name="radiocheck"]:checked').val(),
			BRANCH: $("#branchID :selected").val(),
			YEA: $("#yearID :selected").val(),
			SEM: $("#semID :selected").val()
		}, function (res) {
			var areas = JSON.parse(res);
			var temp = '';
			temp += `<thead> <tr>
			  <th> </th>
			  <th>Subject Name</th>
			  <th>Subject Code</th>
			  <th>Date </th>
			</tr> <thead>`;
			for (var i = 0; i < areas.length; i++) {
				temp += ' <tbody> <tr> <td> <input type="radio" id="checkid" name="radiocheck" value="' + areas[i].subject_code + '" ></td> <td value="' + areas[i].subject_name + '">' + areas[i].subject_name + '</td>' + '<td value="' + areas[i].subject_code + '">' + areas[i].subject_code + '</td>' + '<td value="' + areas[i].date_time + '">' + areas[i].date_time + '</td> </tr> </tbody> ';
			}
			$('#subject_t').empty();
			$('#subject_t').append(temp);
		});
	});
	$('select[name="year1"]').change(function () {
		$.post('getStuff.php', {
			BRANCH: $("#branchID :selected").val(),
			YEA: $("#yearID :selected").val(),
			SEM: $("#semID :selected").val()
		}, function (res) {
			var areas = JSON.parse(res);
			var temp = '';
			temp += `<thead> <tr>
			  <th> </th>
			  <th>Subject Name</th>
			  <th>Subject Code</th>
			  <th>Date</th>
			</tr> <thead>`;
			for (var i = 0; i < areas.length; i++) {
				temp += '<tbody> <tr> <td> <input type="radio" id="checkid" name="radiocheck" value="' + areas[i].subject_code + '" ></td> <td value="' + areas[i].subject_name + '">' + areas[i].subject_name + '</td>' + '<td value="' + areas[i].subject_code + '">' + areas[i].subject_code + '</td>' + '<td value="' + areas[i].date_time + '">' + areas[i].date_time + '</td> </tr> </tbody> ';
			}
			$('#subject_t').empty();
			$('#subject_t').append(temp);
		});
	});
	$('select[name="branch1"]').change(function () {
		$.post('getStuff.php', {
			BRANCH: $("#branchID :selected").val(),
			YEA: $("#yearID :selected").val(),
			SEM: $("#semID :selected").val()
		}, function (res) {
			// alert('hey');
			var areas = JSON.parse(res);
			var temp = '';
			temp += `<thead> <tr>
			  <th> </th>
			  <th>Subject Name</th>
			  <th>Subject Code</th>
			  <th>Date</th>
			</tr> <thead>`;
			for (var i = 0; i < areas.length; i++) {
				temp += '<tbody> <tr> <td> <input type="radio" id="checkid" name="radiocheck" value="' + areas[i].subject_code + '" ></td> <td value="' + areas[i].subject_name + '">' + areas[i].subject_name + '</td>' + '<td value="' + areas[i].subject_code + '">' + areas[i].subject_code + '</td>' + '<td value="' + areas[i].date_time + '">' + areas[i].date_time + '</td> </tr> </tbody>';
			}
			$('#subject_t').empty();
			$('#subject_t').append(temp);
		});
	});
	$('select[name="sem1"]').change(function () {
		$.post('getStuff.php', {
			BRANCH: $("#branchID :selected").val(),
			YEA: $("#yearID :selected").val(),
			SEM: $("#semID :selected").val()
		}, function (res) {
			console.log(res);
			var areas = JSON.parse(res);
			var temp = '';
			temp += `<thead> <tr>
			  <th> </th>
			  <th>Subject Name</th>
			  <th>Subject Code</th>
			  <th>Date</th>
			</tr> <thead>`;
			for (var i = 0; i < areas.length; i++) {
				temp += '<tbody> <tr> <td> <input type="radio" id="checkid" name="radiocheck" value="' + areas[i].subject_code + '"></td> <td value="' + areas[i].subject_name + '">' + areas[i].subject_name + '</td>' + '<td value="' + areas[i].subject_code + '">' + areas[i].subject_code + '</td>' + '<td value="' + areas[i].date_time + '">' + areas[i].date_time + '</td> </tr> </tbody>';
			}
			$('#subject_t').empty();
			$('#subject_t').append(temp);
		});
	});
});



