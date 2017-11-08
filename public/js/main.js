(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {

		/* MAGNIFIC POPUP FOR VIDEO */
		$(".video-play-btn").magnificPopup({
			type: 'video',
		});

		/* LOGIN, SIGNUP, CREATE ACCOUNT POPUP INTERACTION */
		$(".login-btn").on('click', function (event) {
			event.preventDefault();
			$(".create-account-popup-menu").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});

		$(".login-popup").on('click', function () {
			$(".create-account-popup-menu").removeClass("active");
			$(".show-off-canvas-menu-shade").removeClass("active");

			$(".login-popup-menu").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});


		$(".sign-up-btn").on('click', function () {
			$(".login-popup-menu").removeClass("active");
			$(".view-scoring-popup-menu").removeClass("active");
			$(".show-off-canvas-menu-shade").removeClass("active");

			$(".signup-popup-menu").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});

        $(".sign-with-mail").on('click', function (e) {
        	e.preventDefault();
            $(".login-popup-menu").removeClass("active");
            $(".view-scoring-popup-menu").removeClass("active");
            $(".show-off-canvas-menu-shade").removeClass("active");

            $(".signup-popup-menu").addClass("active");
            $(".show-off-canvas-menu-shade").addClass("active");
        });


		$(".menu-close, .show-off-canvas-menu-shade, .insert-image-btn, .insert-link-btn").on('click', function () {
			$(".create-account-popup-menu").removeClass("active");
			$(".login-popup-menu").removeClass("active");
			$(".signup-popup-menu").removeClass("active");
			$(".show-off-canvas-menu-shade").removeClass("active");
			$(".input-image-area").removeClass("active");
			$(".input-link-area").removeClass("active");
			$(".switch-popup-menu").removeClass("active");
			$(".private-access-popup-menu").removeClass("active");
			$(".public-access-popup-menu").removeClass("active");
			$(".view-scoring-popup-menu").removeClass("active");
		});

		$(".cl-btn-normal").on('click', function () {


			if($("input[type='radio']#test3x").is(':checked')) {
				var card_type = $("input[type='radio']#test3x:checked").val();
				/* alert(card_type); */
			}
			/* alert(selectedVal); */

			if (card_type == 'on') {
				$(".view-scoring-popup-menu").addClass("active");
				$(".show-off-canvas-menu-shade").addClass("active");

				$(".view-scoring-table thead tr th.custom-view-scoring").removeClass("show");
				$(".view-scoring-table tbody tr td.custom-view-scoring").removeClass("show");

				$(".view-scoring-table thead tr th.custom-view-scoring").addClass("hidden");
				$(".view-scoring-table tbody tr td.custom-view-scoring").addClass("hidden");



			} else {
				$(".view-scoring-popup-menu").addClass("active");
				$(".show-off-canvas-menu-shade").addClass("active");

				$(".view-scoring-table thead tr th.custom-view-scoring").removeClass("hidden");
				$(".view-scoring-table tbody tr td.custom-view-scoring").removeClass("hidden");

				$(".view-scoring-table thead tr th.custom-view-scoring").addClass("show");
				$(".view-scoring-table tbody tr td.custom-view-scoring").addClass("show");
			}



			$(".view-scoring-popup-menu").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});




		$(".image-btn").on('click', function () {
			$(".input-image-area").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});

		$(".link-btn").on('click', function () {
			$(".input-link-area").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});

		$("#inputFileToLoad").on('change', function () {
			$(".input-image-area").removeClass("active");
			$(".show-off-canvas-menu-shade").removeClass("active");
		});


		/* RESPONSIVE MENU INTERACTION */
		$(".mobile-menu-bar").on('click', function () {
			$(".mobile-menu-bar").removeClass("active");
			$(".mobile-menu-close").addClass("active");
			$(".responsive-menu").addClass("active");
		});
		$(".mobile-menu-close").on('click', function () {
			$(".mobile-menu-close").removeClass("active");
			$(".responsive-menu").removeClass("active");
			$(".mobile-menu-bar").addClass("active");
		});


		/* DATE PICKER INITIALIZATION */
		$('.datepicker').datepicker({
			startDate: '-3d'
		});

		/* STACKABLE TABLE FOR MOBILE RESPONSIVE */

		$('#data-table-simple').stacktable();





		/* MOBILE DETECTION */
		var is_mobile = ((/Mobile|Android|iPhone|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera) ? true : false);

		/* BROWSER WINDOW DETECTION */
		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
		var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

		if (is_mobile || (w < 767)) {
			$('.owner-info-table').stacktable();
			$('.league-home-table').stacktable();
			$('.league-details-body').stacktable();
			$('.roster-starter-table').stacktable();
			$('.roster-starter-table2').stacktable();
		}

		/* DATATABLE INITIALIZATION FOR LARGE DEVICE */
		if (!is_mobile && (w > 991)) {

			$('#data-table-simple').DataTable({

				// when initialization is completed then apply scroll plugin
				"fnInitComplete": function () {
					/* $('.dataTables_scrollBody').perfectScrollbar(); */
					var ps = new PerfectScrollbar('.dataTables_scrollBody');
				},

				//apply scroll on this height
				"scrollY": 350,

				//on paginition page 2,3.. often scroll shown, so reset it and assign it again
				"fnDrawCallback": function (oSettings) {
					/* $('.dataTables_scrollBody').perfectScrollbar('destroy').perfectScrollbar(); */
				},
				"bPaginate": false,
				"bFilter": false,
				"bInfo": false,
				"responsive": true
			});


			var table = $('#data-table-row-grouping').DataTable({
				"columnDefs": [
					{ "visible": false, "targets": 2 }
				],
				'aoColumnDefs': [{
					'bSortable': false,
					'aTargets': ['no-sort']
				}],
				"order": [[2, 'asc']],
				"displayLength": 25,
				"drawCallback": function (settings) {
					var api = this.api();
					var rows = api.rows({ page: 'current' }).nodes();
					var last = null;

					api.column(2, { page: 'current' }).data().each(function (group, i) {
						if (last !== group) {
							$(rows).eq(i).before(
								'<tr class="group"><td colspan="5">' + group + '</td></tr>'
							);

							last = group;
						}
					});
				}
			});

			// Order by the grouping
			$('#data-table-row-grouping tbody').on('click', 'tr.group', function () {
				var currentOrder = table.order()[0];
				if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
					table.order([2, 'desc']).draw();
				}
				else {
					table.order([2, 'asc']).draw();
				}
			});
		}


		$('.bold-btn').click(function () {
			document.execCommand('bold');
		});
		$('.italic-btn').click(function () {
			document.execCommand('italic');
		});
		$('.underline-btn').click(function () {
			document.execCommand('underline');
		});


		$("#theSelect").change(function () {
			var value = $("#theSelect option:selected").val();

			if (value == 'Yes') {
				$(".invite-message").removeClass("hidden");
				$('.invite-message').addClass('show');
			} else {
				$(".invite-message").removeClass("show");
				$('.invite-message').addClass('hidden');
			}
		});

		$(".roster-edit").on('click', function () {
			$(".roster-edit").removeClass("show");
			$(".roster-edit").addClass("hidden");
			$(".roster-submit").removeClass("hidden");
			$('.roster-submit').addClass("show");


			$(".roster-text").removeClass("show");
			$(".roster-text").addClass("hidden");
			$(".roster-input").removeClass("hidden");
			$('.roster-input').addClass("show");
		});
		$(".roster-submit").on('click', function () {
			$(".roster-submit").removeClass("show");
			$(".roster-submit").addClass("hidden");
			$(".roster-edit").removeClass("hidden");
			$('.roster-edit').addClass("show");

			$(".roster-input").removeClass("show");
			$(".roster-input").addClass("hidden");
			$(".roster-text").removeClass("hidden");
			$('.roster-text').addClass("show");
		});

		$(".switch-btn").on('click', function () {
			$(".switch-popup-menu").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});

		$(".join-btn-1").on('click', function () {
			var text = $(".league-details-body tbody tr td#access-1").text();
			/* alert(text); */
			if(text == "Private"){
				$(".private-access-popup-menu").addClass("active");
				$(".show-off-canvas-menu-shade").addClass("active");
			}else{
				$(".public-access-popup-menu").addClass("active");
				$(".show-off-canvas-menu-shade").addClass("active");
			}
		});

		$(".join-btn-2").on('click', function () {
			var text = $(".league-details-body tbody tr td#access-2").text();
			/* alert(text); */
			if(text == "Private"){
				$(".private-access-popup-menu").addClass("active");
				$(".show-off-canvas-menu-shade").addClass("active");
			}else{
				$(".public-access-popup-menu").addClass("active");
				$(".show-off-canvas-menu-shade").addClass("active");
			}
		});

        $('.logout').click(function (e) {
            e.preventDefault();
            $(this).parent('li').next('form').submit();
        });

        $('#c1').click(function () {
			$(this).is(':checked')? $('#signup-email').attr('type', 'text') : $('#signup-email').attr('type', 'password');
        })


	});

	jQuery(window).load(function ($) {

	});
})(jQuery);
