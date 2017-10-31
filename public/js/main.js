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
			$(".show-off-canvas-menu-shade").removeClass("active");

			$(".signup-popup-menu").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});
// backup, integrate with the page later
		$(".sign-with-mail").on('click', function (event) {
			event.preventDefault();
			$(".create-account-popup-menu").removeClass("active");
			$(".show-off-canvas-menu-shade").removeClass("active");

			$(".signup-popup-menu").addClass("active");
			$(".show-off-canvas-menu-shade").addClass("active");
		});


		$(".menu-close, .show-off-canvas-menu-shade").on('click', function () {
			$(".create-account-popup-menu").removeClass("active");
			$(".login-popup-menu").removeClass("active");
			$(".signup-popup-menu").removeClass("active");
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
			endDate: 'today'
		});

		/* STACKABLE TABLE FOR MOBILE RESPONSIVE */
		$('.league-details-body').stacktable();
		$('#data-table-simple').stacktable();




		/* MOBILE DETECTION */
		var is_mobile = ((/Mobile|Android|iPhone|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera) ? true : false);

		/* BROWSER WINDOW DETECTION */
		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
		var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

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


		$('.logout').click(function (e, element) {
			e.preventDefault();
            $(e.target).parent('li').next('form').submit();
        });
		$('.bold-btn').click(function () {
			document.execCommand('bold');
		});
		$('.italic-btn').click(function () {
			document.execCommand('italic');
		});
		$('.underline-btn').click(function () {
			document.execCommand('underline');
		});
	});

	jQuery(window).load(function ($) {

	});
})(jQuery);
