<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Categories">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Author">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="fa fa-pen"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Publisher">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
            </li>










        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="<?php echo e(asset('adminAsset')); ?>/assets/images/dash-logo3.png" width="100%" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Product Manage content</small>
                    </div>
                    <a href="<?php echo e(route('add-product')); ?>" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Product</a>
                    <a href="<?php echo e(route('manage-product')); ?>" class="list-group-item"><i class="bi bi-archive"></i>Manage Product</a>
                    <a href="#" class="list-group-item"><i class="bi bi-cast"></i>View Product</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Categories</h5>
                        </div>
                        <small class="mb-0">Manage Categories content</small>
                    </div>
                    <a href="<?php echo e(route('add-category')); ?>" class="list-group-item"><i class="bi bi-check2-square"></i>Add Category</a>
                    <a href="<?php echo e(route('manage-category')); ?>" class="list-group-item"><i class="bi bi-receipt"></i>Manage Category</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-widgets">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Author</h5>
                        </div>
                        <small class="mb-0">Author content</small>
                    </div>
                    <a href="<?php echo e(route('add-author')); ?>" class="list-group-item"><i class="bi bi-check2-square"></i>Add Author</a>
                    <a href="<?php echo e(route('manage-author')); ?>" class="list-group-item"><i class="bi bi-receipt"></i>Manage Author</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ecommerce">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Publisher</h5>
                        </div>
                        <small class="mb-0">Publisher content</small>
                    </div>
                    <a href="<?php echo e(route('add-publisher')); ?>" class="list-group-item"><i class="bi bi-check2-square"></i>Add Publisher</a>
                    <a href="<?php echo e(route('manage-publisher')); ?>" class="list-group-item"><i class="bi bi-receipt"></i>Manage Publisher</a></div>
            </div>





























        </div>
    </div>
</aside>
<?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/admin/include/left-sidebar.blade.php ENDPATH**/ ?>