<div class="row">
	                    <div class="col-md-12">
							<!-- <h4 class="title">DataTables.net</h4>
							<p class="category">A powerful jQuery plugin handcrafted by our friends from <a href="https://datatables.net/" target="_blank">dataTables.net</a>. It is a highly flexible tool, based upon the foundations of progressive enhancement and will add advanced interaction controls to any HTML table. Please check out the <a href="https://datatables.net/manual/index" target="_blank">full documentation.</a></p>

							<br> -->

	                        <div class="card">
	                            <div class="card-content">
	                                <div class="toolbar">
	                                    <!--Here you can write extra buttons/actions for the toolbar-->
	                                </div>
                                    <div class="fresh-datatables">
										<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Nilai Basic</th>
												<th>Nilai Intermediate</th>
												<th>Total</th>
												<th>Level</th>
												<th class="disabled-sorting">Actions</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Nilai Basic</th>
												<th>Nilai Intermediate</th>
												<th>Total</th>
												<th>Level</th>
												<th>Actions</th>
											</tr>
										</tfoot>
										<tbody>
										<?php 
											$no = 1;foreach ($hasil as $h) : ?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $h['nama']; ?></td>
												<td><?= $h['total_basic']; ?></td>
												<td><?= $h['total_intermediate']; ?></td>
												<td><?= $h['total_hasil']; ?></td>
												<td><?= $h['level']; ?></td>
												<td>
													<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
												</td>
											</tr>
											<?php 
										  $no++;
										  endforeach; ?>
										   </tbody>
									    </table>
									</div>
	                            </div>
	                        </div><!--  end card  -->
	                    </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->
                    <script type="text/javascript">
	    $(document).ready(function() {

	        $('#datatables').DataTable({
	            "pagingType": "full_numbers",
	            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
	            responsive: true,
	            language: {
	            search: "_INPUT_",
		            searchPlaceholder: "Search records",
		        }
	        });


	        var table = $('#datatables').DataTable();
	         // Edit record
	         table.on( 'click', '.edit', function () {
	            $tr = $(this).closest('tr');

	            var data = table.row($tr).data();
	            alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
	         } );

	         // Delete a record
	         table.on( 'click', '.remove', function (e) {
	            $tr = $(this).closest('tr');
	            table.row($tr).remove().draw();
	            e.preventDefault();
	         } );

	        //Like record
	        table.on( 'click', '.like', function () {
	            alert('You clicked on Like button');
	         });

	    });
	</script>