<link rel="stylesheet" href="modules/vendor/test/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/test/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/test/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/test/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/test/template/bootstrap/bootstrap.bundle.min.js"></script>

<style></style>

<div class="container mt-3">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#general">General</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#data">Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#image">Image</a>
    </li>
  </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="general" class="tab-pane active"><br>
            <div class="form-group">
                <label for="product_name">Product Name *</label>
                <input type="text" class="form-control" id="product_name" name="product_name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" rows="5" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="meta_title">Meta Tag Title</label>
                <input type="text" class="form-control" id="meta_title" name="meta_title">
            </div>
            <div class="form-group">
                <label for="meta_description">Meta Tag Description</label>
                <textarea class="form-control" rows="5" id="meta_description"></textarea>
            </div>
            <div class="form-group">
                <label for="meta_keyword">Meta Tag Keywords</label>
                <textarea class="form-control" rows="5" id="meta_keyword"></textarea>
            </div>
            <div class="form-group">
                <label for="tag">Product Tags</label>
                <input type="text" class="form-control" id="tag" name="tag">
            </div>
        </div>
        <div id="data" class="tab-pane fade"><br>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" name="model">
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku">
            </div>
            <div class="form-group">
                <label for="upc">UPC</label>
                <input type="text" class="form-control" id="upc" name="upc">
            </div>
            <div class="form-group">
                <label for="ean">EAN</label>
                <input type="text" class="form-control" id="ean" name="ean">
            </div>
            <div class="form-group">
                <label for="jan">JAN</label>
                <input type="text" class="form-control" id="jan" name="jan">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn">
            </div>
            <div class="form-group">
                <label for="mpn">MPN</label>
                <input type="text" class="form-control" id="mpn" name="mpn">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="tax_class_id">Tax Class</label>
                <select class="form-control" id="tax_class_id">
                    <option value="0"> --- None --- </option>
                    <option value="9">Taxable Goods</option>
                    <option value="10">Downloadable Products</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="1">
            </div>
            <div class="form-group">
                <label for="minimum">Minimum Quantity</label>
                <input type="text" class="form-control" id="minimum" name="minimum" value="1">
            </div>
            <div class="form-group">
                <label for="subtract">Subtract Stock</label>
                <select class="form-control" id="subtract">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="stock_status_id">Out Of Stock Status</label>
                <select class="form-control" id="stock_status_id">
                    <option value="6">2-3 Days</option>
                    <option value="7">In Stock</option>
                    <option value="5">Out Of Stock</option>
                    <option value="8">Pre-Order</option>
                </select>
            </div>
            <div class="form-group">
                <label for="shipping">Requires Shipping</label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="shipping" value="1" checked>Yes
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="shipping" value="0">No
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="date_available">Date Available</label>
                <input type="date" class="form-control" id="date_available" name="date_available" value="2023-02-01">
            </div>
            <div class="form-group">
                <label for="length">Dimensions (L x W x H)</label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" id="length" name="length">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="width" name="width">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="height" name="height">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="length_class_id">Length Class</label>
                <select class="form-control" id="length_class_id">
                    <option value="1">Centimeter</option>
                    <option value="2">Millimeter</option>
                    <option value="3">Inch</option>
                </select>
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight">
            </div> 
            <div class="form-group">
                <label for="weight_class_id">Weight Class</label>
                <select class="form-control" id="weight_class_id">
                    <option value="1">Kilogram</option>
                    <option value="2">Gram</option>
                    <option value="5">Pound</option>
                    <option value="6">Ounce</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status">
                    <option value="1">Enabled</option>
                    <option value="0">Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sort_order">Sort Order</label>
                <input type="text" class="form-control" id="sort_order" name="sort_order" value="1">
            </div>
        </div>
        <div id="image" class="tab-pane fade"><br>
            <div class="form-group">
                <input type="file" id="input_img_file" class="form-control-file border">
            </div>
            <br />
            <span id="uploaded_image"></span>
        </div>
    </div>
</div>

<div class="d-flex justify-content-end mt-3 container">
    <button id="save_id" class="btn btn-outline-primary" type="button"><i class="fa fa-save mr-1"></i>Save</button>
</div>

<script type="text/javascript">
    var BASIC_OPEN_CART_SERVER_API = 'http://localhost/UNA-v.13.0.0-RC2/store/index.php?';

    $.fn.uploadImageFile = function() {
        var name = $('#input_img_file').prop('files')[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
        {
            alert("Invalid Image File");
        }
        var oFReader = new FileReader();
        oFReader.readAsDataURL($('#input_img_file').prop('files')[0]);
        var f = $('#input_img_file').prop('files')[0];
        var fsize = f.size||f.fileSize;
        if(fsize > 2000000)
        {
            alert("Image File Size is very big");
        } else {
            form_data.append("file", $('#input_img_file').prop('files')[0]);
            $.ajax({
                url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/uploadProductImage',
                method:"POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend:function(){
                    $('#uploaded_image').html("<div class='spinner-grow text-primary'></div>");
                },   
                success:function(data)
                {
                    $('#uploaded_image').html(data);
                }
            });
        }
    }

    $('#save_id').click((event)=> {
        $.fn.uploadImageFile();
        var data = {
            model: $('#model').val(),
            sku: $('#sku').val(),
            upc: $('#upc').val(),
            ean: $('#ean').val(),
            jan: $('#jan').val(),
            isbn: $('#isbn').val(),
            mpn: $('#mpn').val(),
            location: $('#location').val(),
            quantity: $('#quantity').val(),
            minimum: $('#minimum').val(),
            subtract: $('#subtract').val(),
            stock_status_id: $('#stock_status_id').val(),
            date_available: $('#date_available').val(),
            manufacturer_id: '',
            shipping: $("input[type='radio'][name='shipping']:checked").val(),
            price: $('#price').val(),
            points: '',
            weight: $('#weight').val(),
            weight_class_id: $('#weight_class_id').val(),
            length: $('#length').val(),
            width: $('#width').val(),
            height: $('#height').val(),
            length_class_id: $('#length_class_id').val(),
            status: $('#status').val(),
            tax_class_id: $('#tax_class_id').val(),
            sort_order: $('#sort_order').val(),
            image: 'catalog/demo/' + $('#input_img_file').prop('files')[0].name,
            product_description: [{
                name: $('#product_name').val(),
                meta_description: $('#meta_description').val(),
                meta_keyword: $('#meta_keyword').val(),
                description: $('#description').val(),
                tag: $('#tag').val(),
                meta_title: $('#meta_title').val()
            }],
            product_store: [0],
            product_attribute: [{
                name: '',
                attribute_id: '',
                product_attribute_description: [
                    {text: ''},
                    {text: ''},
                ]
            }],
            product_layout: [{layout_id: ''}]
        }
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/add',
            data,
            success: function(response){
                alert('Success!');
            },
            error: function(error, ajaxOptions, thrownError) {
                // debugger;
            }
        });
    });
</script>

