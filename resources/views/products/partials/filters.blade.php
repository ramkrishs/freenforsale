<div class="filters ">
    <div class="" >

        <form role="form" method="POST" action="{{ route('product.search') }}">
            <div class="">Filters  <a class="search-filter-clear-all">clear <i class="fa fa-eraser"></i></a></div>
            <div class="" id="search-filter-elements">
                <div class="form-group">
                    <label for="search-type" class="">
                        <i class="fa fa-search"></i> Keyword
                    </label>
                    <div id="" class="">
                        <input type="text" name="query"  class="form-control" id="" placeholder="Product Title" value="">
                    </div>
                </div>


                <div class="form-group" id="search-type-container">
                    <label for="search-type">
                        <i class="fa fa-bars"></i> Type
                    </label>
                    <div >
                        <div class="clearfix"></div>
                        <div class="">
                            <input type="checkbox" name="all" id=value="" checked="checked">
                            <label for="search-type-any" class="default">All</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="Furniture" >
                            <label for="search-type-101" class="default">Furniture</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="Electronics" >
                            <label for="search-type-101" class="default">Electronics</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="HomeCare" >
                            <label for="search-type-102" class="default">HomeCare</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="PersonalCare" >
                            <label for="search-type-102" class="default">PersonalCare</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="Vehicle" >
                            <label for="search-type-102" class="default">Vehicle</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="Sports">
                            <label for="search-type-103" class="default">Sports</label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>


                <div class="form-group" id="">
                    <label >
                        <i class="fa fa-money"></i> Price Range
                    </label>
                    <div >
                        <div class=" input-group ">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" placeholder="Min Price"/>
                        </div>
                        <br>
                        <div class=" input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" placeholder="Max Price"/>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <div class="form-group">
                    <input type="submit" value="Filter Products" class="form-control btn btn-default">
                </div>
            </div>

        </form>
    </div>
</div>