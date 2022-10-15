
            
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                 <h5 style="text-align: center;" class="modal-title" id="ModalLabel">Add New Incident</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="POST" class="form-horizontal" action="incidentadd.php" enctype='multipart/form-data'>
                                    <div class="form-group">
                                        <label for="Sector" class="control-label col-md-2">Sector</label>
                                         <div class="col-md-10">
                                             <input type="text" name="sector" id="sector" class="form-control">
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Date</label>
                                         <div class="col-md-10">
                                             <input type="date" name="date" class="form-control">
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label class="control-label col-md-8">Incident Type</label>
                                     <div class="col-md-10">
                                         <select name="type" class="form-control">
                                             <option style="color: red">Select Incident Type </option>
                                             <option>Smuggling Of Goods(Drugs,Alcohol,Illegal Substances)</option>
                                             <option>Smuggling Of Weapons</option>
                                             <option>Human Trafficking</option>
                                             <option>Illegal Fishing</option>
                                             <option>SAR(Search and Rescue)</option>
                                             <option>Maritime Pollution</option>
                                             <option>Piracy</option>
                                             <option>Speeding Vessel</option>
                                             <option>Port Security</option>
                                             <option>Border Breach</option>
                                         </select>
                                     </div>
                                </div>

                                <div class="form-group">
                                        <label class="control-label col-md-8">Who was involved</label>
                                         <div class="col-md-10">
                                             <textarea type="text" name="involved" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Description</label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="des" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-10">Location / Coordinates</label>
                                         <div class="col-md-10">
                                             <input type="text" name="location" class="form-control">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-8">Explain If Casualties</label>
                                         <div class="col-md-10">
                                         <textarea type="text" name="casualties" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-5">Actions Taken</label>
                                         <div class="col-md-10">
                                             <textarea type="text" name="actions" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-10">Which Other Entities Were Informed</label>
                                         <div class="col-md-10">
                                             <textarea type="text" name="entities" class="form-control"  rows ="3" cols="33"></textarea>
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Evidence</label>
                                         <div class="col-md-10">
                                             <input type="file" name="evidence" class="form-control">
                                         </div>

                                    </div>

                                    <div class="form-group" class="btn-group" role="group">
                                    <div class="text-left">
                                	<button name="Add" class="btn btn-md btn-success col-md-14" type="button" >Add Incident</button>
                                    </div>

                                    <div class="text-right">
	                                <button class="btn btn-md btn-secondary col-md-14" type="button" data-dismiss="modal"> Cancel</button>
                                    </div>
                                    </div>

                                    <style>

div button {
   float: left;
   margin: 0;
}
                                   </style>

                                    




                                    
                                </form>
                </div>
                <div class="modal-footer">
                
                    
                </div>
            </div>
        </div>
    </div>