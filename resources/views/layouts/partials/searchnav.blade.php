<div class="container search-nav ">
    <div class="row">
        <div class="col-xs-2">
            <img class="home-logo" src="{{ URL::asset('_img/utd-logo.png') }}">
        </div>
        <div class="col-xs-7">
            <div class="title text-center">Free and For Sale </div>

        </div>
        <div class="col-xs-3">
            <div class="form-group sort-bar form-inline pull-right">
                <label for="sortby" class="">Sort by:</label>
                <select id="sortby" name="sortby" class="form-control">
                    <option value="0">Select Option</option>
                    <option value="1">Ascending order</option>
                    <option value="2">Decending order</option>
                    <option value="3">Price: Low-High</option>
                    <option value="4">Price: High-Low</option>
                </select>
            </div>
        </div>
    </div>
</div>