$(document).ready(function(){
	load_data();
	function load_data(page){
		$.ajax({
			url: 'book_data.php',
			method: 'POST',
			data: {
				page: page
			},
			success: function(res){
				$('#load_data').html(res);
			}
		});
	}
	
	$(document).on('click', '.pagination', function(){
		$page = $(this).attr('id');
		load_data($page);
	});
});