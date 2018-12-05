<!-- Search area -->
<div class="poster" style="background-image:url('images/forest.jpeg')">
            <div class="banner">
                <strong>Free amazing wallpapers for you on FoxWallpaper</strong>
            </div>
            <div class="s003">
                <form action="search_index.php" method="GET">
                    <div class="searchtitle">
                        <p>Find stunning wallpapers here</p>
                    </div>
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <div class="input-select">
                                <select data-trigger="" name="cat_id">
                                    <option value="0" placeholder="">All..</option>
                                    <option value="1">3D Abstract</option>
                                    <option value="2">Anime</option>
                                    <option value="3">Bike</option>
                                    <option value="4">Landscape</option>
                                    <option value="5">Girl</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap">
                            <input name="searchinput" id="search2" type="text" placeholder="Find wallpaper..." />
                        </div>
                        <div class="input-field third-wrap">
                            <button class="btn-search" name="submit" type="submit">
                                <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="suggest">
                        <span>Examples:</span>
                        <a href="search_index.php?cat_id=0&searchinput=girl&submit">girl,</a>
                        <a href="search_index.php?cat_id=0&searchinput=nature&submit">nature,</a>
                        <a href="search_index.php?cat_id=0&searchinput=motorbike&submit">motorbike,</a>
                        <a href="search_index.php?cat_id=0&searchinput=beautiful&submit">beautiful,</a>
                        <a href="search_index.php?cat_id=0&searchinput=cloud&submit">cloud...</a>
                    </div>
                </form>
            </div>
            <script src="js/extention/choices.js"></script>
            <script>
                const choices = new Choices('[data-trigger]', {
                    searchEnabled: false,
                    itemSelectText: '',
                });
            </script>
        </div> <!-- End of poster -->