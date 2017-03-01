@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a movie</div>
                <div class="panel-body">
                  <p>If you want to add a movie, use this form. If a movie passes the tests but only on a technicality (like a woman only speaking to a minor character once) you can mention this in the <b>Comments</b> field. Feel free to enter other comments there as well (if you want to name all moments in the movie that cause it to pass, for example, feel free to do so).</p>
                  <form method="post" action="/add/save_movie/">
                    <fieldset>
                        <legend>The movie</legend>
                        <p><label for="imdb">IMDb link</label><input class="" id="imdb" type="text" name="imdb"> <input type="button" name="fetchinfo" onclick="fetchInfo();" value="Get title and year" style="display: inline;"><span style="display: none;" id="progressIndicator"> <img src="/static/progress.gif" alt="[Busy...]" title="Fetching movie info from IMDb..."></span></p>
                        <p><label for="title">Title</label>
                        <input type="text" name="title" id="title" class=""></p>
                        <p><label for="year">Year</label>
                        <input type="text" name="year" size="6" id="year" class=""></p>
                    </fieldset>
                    <fieldset>
                        <legend>The rating</legend>  <p><input type="radio" name="rating" id="test0" value="0"><label for="test0">This movie doesn't have two (named) female characters.</label></p>
                        <p><input type="radio" name="rating" id="test1" value="1"><label for="test1">It has at least two women in it;</label></p>
                        <p><input type="radio" name="rating" id="test2" value="2"><label for="test2">... and they talk to each other;</label></p>
                        <p><input type="radio" name="rating" id="test3" value="3"><label for="test3">... about something besides a man.</label></p>
                        <p style="padding-top: 5px;"><input type="radio" name="dubious" id="dubious"><label for="dubious">Although I think it matches, it's dubious.</label></p>
                    </fieldset>
                    <fieldset>
                        <legend>Your comment</legend>
                        <p>Please give some information on why this movie got this rating. In particular when a movie matches all tests, it's helpful to describe why it matches (for example, just because two women speak for half a minute in one scene, or because there are actual important female characters that discuss plot-relevant things regularly).</p>
                        <textarea rows="8" cols="40" name="comment" class=""></textarea>
                    </fieldset>
                    <fieldset>
                        <legend>Your contact info</legend>
                        <p><label for="yourname">Name or handle</label>
                        <input type="text" name="name" id="yourname" class=""></p>
                        <p><label for="youremail">E-mail address</label>
                        <input type="email" name="email" id="youremail" class=""> (won't be visible)</p>
                    </fieldset>
                    <div class="submit"><input type="submit" value="Submit"></div>
                    <div style="display: none;"><input type="hidden" name="add" value="yup"></div>
                    <p style="font-size: 80%;">By adding a movie to the list you agree that it will be available with all other movies and ratings licensed as <a href="http://creativecommons.org/licenses/by-nc/3.0/"><img src="/static/by-nc-30-80x15.png" alt="Attribution-NonCommercial 3.0 Unported (CC BY-NC 3.0)" title="Attribution-NonCommercial 3.0 Unported (CC BY-NC 3.0)"></a></p>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection