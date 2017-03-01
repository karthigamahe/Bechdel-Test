@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bechdel Test</div>

                <div class="panel-body">
                    <h2>About</h2>
                    <p>The <b>Bechdel Test</b>, sometimes called the <i>Mo Movie Measure</i> or <i>Bechdel Rule</i> is a simple test which names the following three criteria: (1) it has to have at least two women in itwho (2)talk to each other, about (3) something besides a man. The test was popularized by <b>Alison Bechdel</b>'s comic <b>Dykes to Watch Out For</b>, in a 1985 strip called <a href="http://alisonbechdel.blogspot.com/2005/08/rule.html"><i>The Rule</i></a>. For a nice video introduction to the subject please check out <a href="http://www.feministfrequency.com/2009/12/the-bechdel-test-for-women-in-movies/">The Bechdel Test for Women in Movies</a> on <a href="http://www.feministfrequency.com/">feministfrequency.com</a>.</p>
                    <h2>Add a movie</h2>
                    <p>If you want to add a movie to this list, please go to the <a href="/add" style="text-decoration: underline; font-weight: bold">Add a movie</a> page and fill in the form. If you want to correct an entry or contact me about anything, please visit the <a href="/contact/">contact</a> page. If you disagree with a rating, please leave a comment on the appropriate movie page instead.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
