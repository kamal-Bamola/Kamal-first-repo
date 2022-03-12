<div class="prop-modal modal fade" id="addProperty" tabindex="-1" aria-labelledby="addPropertyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="addPropertyLabel">Add Property</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="la la-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>Property Name</label>
                                    <div class="controls">
                                        <input class="form-control" name="prop_name" type="text"
                                            placeholder="Enter property name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>Property Type</label>
                                    <div class="controls">
                                        <select class="form-control" name="prop_type">
                                            <option>Select property type</option>
                                            <option>Living Room</option>
                                            <option>Swimming Pool</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>Price</label>
                                    <div class="controls">
                                        <input class="form-control" name="price" type="text" placeholder="Enter price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>Area</label>
                                    <div class="controls">
                                        <input class="form-control" name="area" type="text" placeholder="Enter area">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>No. of Guest</label>
                                    <div class="controls">
                                        <select class="form-control" name="guest">
                                            <option>Select no. of guest</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>Address</label>
                                    <div class="controls">
                                        <input class="form-control" name="address" type="text"
                                            placeholder="Enter address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>Upload Featured Image</label>
                                    <div class="form-upload">
                                        <div class="upload-c u-input">
                                            <label>Browse file...</label>
                                            <input type="file" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label>Amenities</label>
                                    <div class="multi-g">
                                        <span>Wi-Fi Internet <button><i class="la la-times"></i></button></span>
                                        <span>Room Cleaning <button><i class="la la-times"></i></button></span>
                                        <span>Micro Waves <button><i class="la la-times"></i></button></span>
                                        <span>Oven <button><i class="la la-times"></i></button></span>
                                        <span>Induction Plate <button><i class="la la-times"></i></button></span>
                                        <span>TV <button><i class="la la-times"></i></button></span>
                                        <span>Cutleries <button><i class="la la-times"></i></button></span>
                                        <span>Table <button><i class="la la-times"></i></button></span>
                                        <span>Coffee Machine <button><i class="la la-times"></i></button></span>
                                        <span>Sofa <button><i class="la la-times"></i></button></span>
                                        <span>Speakers <button><i class="la la-times"></i></button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="control-group">
                                    <label>Description</label>
                                    <div class="controls">
                                        <textarea class="form-control" name="description" type="text"
                                            placeholder="Enter description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="control-group">
                                    <label>Upload Gallery Images</label>
                                    <div class="upload-area">
                                        <div class="upload-s">
                                            <figure style="background-image: url(images/property-main1.png)">
                                                <button><i class="la la-times"></i></button>
                                            </figure>
                                        </div>
                                        <div class="upload-s">
                                            <figure style="background-image: url(images/property-main1.png)">
                                                <button><i class="la la-times"></i></button>
                                            </figure>
                                        </div>
                                        <div class="upload-s">
                                            <figure style="background-image: url(images/property-main1.png)">
                                                <button><i class="la la-times"></i></button>
                                            </figure>
                                        </div>
                                        <div class="upload-s">
                                            <figure style="background-image: url(images/property-main1.png)">
                                                <button><i class="la la-times"></i></button>
                                            </figure>
                                        </div>
                                        <div class="upload-s">
                                            <div class="u-image">
                                                <img src="images/upload-icon.png">
                                                <p>Upload Image</p>
                                                <input type="file" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-btn text-center">
                        <button class="btn btn-g-blue" type="submit">Save</button>
                        <a href="#">
                            <button class="btn btn-grey">Cancel</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/bundle.min.js"></script>
<script src="js/dashboard.js"></script>

</body>

</html>