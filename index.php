<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>File UpLoad</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</head>
<body>
	
<div class="container">
<h2>This is a code for image update using Form-Modal</h2>	

	<div class="row jumbotron bg-light">
		<div class="col-sm-10"><h3>click hear to upload file</h3></div>
		<div class="col-sm-2"><a href="#" class="btn btn-sm btn-block btn-info" data-toggle="modal" data-target="#add_file">File Upload</a></div>
	</div>	
		
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped ">
					<thead>
					<tr > 
						<th> ID </th>
						<th> File Name</th>
						<th> File </th>
						<th>Delete</th>
						<!-- <th>Update</th> -->
					</tr>
				</thead>
				<tbody>
					<?php 
					include 'config.php';
						$query = "SELECT * FROM file";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						$row=$stmt->fetchAll();
						//$conn=null();

						foreach ($row as $key) {
					?>
					<tr>
						<td><?php echo $key['id'];?></td>
						<td><?php echo $key['image'];?></td>
						<td><img src="destFile/<?php echo $key['image'];?>" style="height: 5rem" class="img" ></td>
						<td><a class="btn btn-danger m-2" href="back.php?id=<?php echo $key['id'];?>" name="deleteFile">Delete</a></td>
						<!-- <td><a class="btn btn-info m-2" href="back.php?id=<?php echo $key['ID'];?>" >Update</a></td> -->
					</tr>
					<?php } ?>
				</tbody>			
				</table>		
			</div>			
		</div>
	</div>

	
</div>	
	<!-- This is a code for image update using modal -->


<div id="add_file" class="modal fade" role="dialog" >
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">File Upload</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                     <form action="back.php" method="post" enctype="multipart/form-data">
                        <div class="form-row">
							<div class="col-12">
								<b><label for="name">Image</label></b>
								<input type="file" name="image" id="image" class="form-control" required>
								<input type="hidden" name="id" id="id">
							</div>
                        </div><br>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1" name="uploadFile">Upload</button>        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
       
<script type="text/javascript">
	
</script>

</body>
</html>