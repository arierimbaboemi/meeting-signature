<div class="row">
        <div class="col-md-6">
            <div class="panel panel-default panel-shadow" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">FORM TTD</div>
                </div>

                <div class="panel-body">
					<div id="signArea" >

						<?php 
							if($meeting_id != 0)
							{
								$row = $this->db->get_where('meeting', ['meeting_id' => $meeting_id])->row();
								$meeting_day = $row->meeting_day;
								$meeting_date = $row->meeting_date;
								$meeting_time = $row->meeting_time;
								$event = $row->event;						?>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Hari</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="meeting-day" name="meeting_day" value="<?php echo $meeting_day;?>" disabled>
								</div>
							</div>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Tanggal</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="meeting-date" name="meeting_date" value="<?php echo $meeting_date;?>" disabled>
								</div>
							</div>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Waktu</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="meeting-time" name="meeting_time" value="<?php echo $meeting_time;?>" disabled>
								</div>
							</div>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Agenda</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="event" name="event" value="<?php echo $event;?>" disabled>
								</div>
							</div>
						<?php
							}
							else
							{
								$meeting_day = '';
								$meeting_date = '';
								$meeting_time = '';
								$event = '';
						?>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Hari</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="meeting-day" name="meeting_day">
								</div>
							</div>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Tanggal</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="meeting-date" name="meeting_date">
								</div>
							</div>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Waktu</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="meeting-time" name="meeting_time">
								</div>
							</div>
					        <div class="form-group">
					            <label for="field-2" class="col-sm-4 control-label">Agenda</label>

					            <div class="col-sm-7">
									<input type="text" class="form-control" id="event" name="event">
								</div>
							</div>
						<?php } ?>
						<div class="form-group">
							<label for="field-2" class="col-sm-4 control-label">Nama</label>

							<div class="col-sm-7">
								<input type="text" class="form-control" id="pic-name" name="pic_name">
							</div>
						</div>
						<div class="form-group">
							<label for="field-2" class="col-sm-4 control-label">Jabatan</label>

							<div class="col-sm-7">
								<input type="text" class="form-control" id="relation" name="relation">
							</div>
						</div>
						<div class="form-group">
							<label for="field-2" class="col-sm-4 control-label">Tanda Tangan</label>
							<div class="col-sm-8">
								<div class="sig sigWrapper" style="height:auto;">
									<div class="typed"></div>
									<canvas class="sign-pad" id="sign-pad" width="150%" height="100%"></canvas>
								</div>
							</div>
						</div>
						
						<input type="text" class="form-control" id="meeting-id" name="meeting_id" value="<?php echo $meeting_id;?>" style="display: none">
						<button class="btn btn-info" id="btnSaveSign"><i class="fa fa-save"></i> Simpan Tanda Tangan</button>
					</div>
				</div>
			</div>
		</div>

        <div class="col-md-6">
            <div class="panel panel-default panel-shadow" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">List Kehadiran</div>
                </div>

                <div class="panel-body">
                	<table class="table table-bordered datatable" id="table-leave">
	                    <thead>
	                        <tr>
	                            <th colspan="4">
	                            	<table border="0">
	                            		<tr>
											<td>Hari</td>
											<td> : <?php echo $meeting_day;?></td>
	                            		</tr>
	                            		<tr>
											<td>Tanggal</td>
											<td> : <?php echo $meeting_date;?></td>
	                            		</tr>
	                            		<tr>
											<td>Waktu</td>
											<td> : <?php echo $meeting_time;?></td>
	                            		</tr>
	                            		<tr>
											<td>Agenda</td>
											<td> : <?php echo $event;?></td>
	                            		</tr>
	                            	</table>
	                            </th>
	                        </tr>
	                        <tr>
	                            <th width="10%">#</th>
	                            <th width="40%">Nama</th>
	                            <th width="30%">Jabatan</th>
	                            <th width="30%">TTD</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <?php
	                        $query = $this->db->get_where('signatures', ['meeting_id' => $meeting_id]);
		                        $count = 1;      
		                        foreach($query->result() as $list){ ?>
		                            <tr>
		                                <td><?php echo $count++; ?></td>
		                                <td><?php echo $list->pic_name;?></td>
		                                <td><?php echo $list->relation;?></td>
		                                <td><img src="<?php echo $list->signatures;?>" width="100%"></td>
		                            </tr>
		                    <?php } ?>
	                    </tbody>
	                </table>
                </div>
            </div>
        </div>
</div>
		
		<script>
			$(document).ready(function() {
				$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
			});
			
			$("#btnSaveSign").click(function(e){
				html2canvas([document.getElementById('sign-pad')], {
					onrendered: function (canvas) {
						var canvas_img_data = canvas.toDataURL('image/png');
						//ajax call to save image inside folder
						$.ajax({
							url: siteUrl+'api/app/create',
							data: { 
								signatures : canvas_img_data,
								meeting_id : $('#meeting-id').val(),
								pic_name : $('#pic-name').val(),
								relation : $('#relation').val(),
								meeting_day : $('#meeting-day').val(),
								meeting_date : $('#meeting-date').val(),
								meeting_time : $('#meeting-time').val(),
								event : $('#event').val(),
							},
							type: 'post',
							dataType: 'json',
							success: function (result) {
								if (result.total == 1){
									$('#modal_ajax').hide();
									$('#message-notif-success').text('Berhasil simpan tanda tangan');
									$('#notif-success').modal('show');
									setTimeout(function () {
										window.location = siteUrl + 'signature/existing_meeting/'+result.meeting_id;
									}, 1000);
								} else {
									$('#message-notif-failed').text('Gagal simpan tanda tangan');
									$('#notif-failed').modal('show');
								}
							}
						});
					}
				});
			});
		  </script> 
