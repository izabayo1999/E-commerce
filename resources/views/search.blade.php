<div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('web') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-7 mt-4">
                            <button class="btn btn-info" type="submit" title="Search products">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-6" name="term" placeholder="Search products" id="product">
                        <a href="{{ route('web') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
