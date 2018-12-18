@extends ('layouts.app')
<style>
    #guideheader {
        font-weight: bold
    }
</style>
<div class="container">

    @include ('inc.profile_halfheroimg')

    <br>

    <div class="row">

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="profile_miniheader">
                    <div class="styled-heading">
                        <h3>- TOURNAME - in - CITY-</h3>
                    </div>
                    <i>Tour location: - CITY -</i><br>
                    <p> SHORT TOUR DESCRIPTION </p>
                </div>
            </div>
            <br>
            <h5>Summary</h5>
            <p>Go on a 5-hour pub crawl in the city centre of Groningen and it’s Red Light district. You’ll make stops
                at 8 pubs and 2 clubs, enjoy free drinks and drink specials – and even get a free T-shirt, on
                Groningen’s most fun night out!</p>

            <p><h5>Highlights:</h5>
            <ul>
                <li>Drink at 8 bars, pubs, and 2 clubs.<br></li>
                <li>Get a free shot at every venue.<br></li>
                <li>Remember the night with a free souvenir T-shirt.</li>
                <li>From € 24.99 (per person)</li>
            </ul>
            </p>

            <h5>Overview:</h5><br>
            Go on a 5-hour pub crawl in the city centre of Groningen and it’s Red Light district. You’ll make stops at 8
            pubs and 2 clubs, enjoy free drinks and drink specials – and even get a free T-shirt, on Groningen’s most
            fun night out!</p>

            <h5>Description:</h5><br>
            <p>Make the most of your time in Groningen. Take a 5-hour stumble through the depths of Groningen’s Red
                Light district on a guided pub crawl. Drink unlimited shots of vodka from 20:00-20:30 at the start of
                the tour!You’ll make stops at 8 pubs and 2 clubs and get a free shot at every place you visit! In
                addition, you can take advantage of great drink specials at all of the venues, plus enjoy free entrance
                to all pubs & clubs.</p>
            <p>This is the ultimate party pub crawl through the Red Light district with a professional guide. Go home
                with a souvenir T-shirt to help you remember the night! Even if it will be the only thing you can
                remember 😉</p>

            <p><h5>What’s Included:</h5><br>
            <ul>
                <li>FREE shot at every venue.</li>
                <li>FREE entrance to all pubs, bars and clubs.</li>
                <li>FREE Souvenir T-shirt.</li>
            </ul>
            </p>
        </div>
        <div class="col-md-4">
            @section ('sidebar_tour')
                <div class="card bg-faded" id="sidebar">
                    <h3>Tour details</h3>
                    <p>
                        <img src="{{asset('img/portrait2.jpeg')}}" width=100%>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Message"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="View My Tours"/>
                    </div>
                    TOUR NAME:<br>
                    - tourname -<br>
                    GUIDE NAME:<br>
                    - guidename -<br>
                    TOUR CATEGORY:<br>
                    - categories -<br>
                    START LOCATION<br>
                    Groningen<br>
                    PRICE<br>
                    10 EURO<br>
                    LANGUAGE(S) SPOKEN:<br>
                    Dutch, English<br>
                    MEMBER SINCE<br>
                    Oct 18, 2017<br>
                    GUIDE NAME<br>
                    - NAME -<br>
                    GUIDE NUMBER<br>
                    #4482<br>
                    </p>        <br><br>
                    <p>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    </p>
                </div>
            @show
        </div>
    </div>
</div>
