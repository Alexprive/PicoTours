@extends ('layouts.app')

<div class="container">

    @include ('inc.profile_carousel')

    <br>

    <div class="row">

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="profile_miniheader">
                    <div class="styled-heading">
                        <h3>Angela</h3>
                    </div>
                    <i>- Groningen -</i><br>
                    <p> Tourguide since 2017, experienced in the local cuisine and art scene. </p>
                </div>
            </div>
            <br>
            I specialise in city tours highlighting the history, lifestyle and culture. I love showing off areas that
            have a story to tell as well as the fabulous architecture and scenic backdrops.
            I have travelled to many countrys and been inspired by their passionate Tour Guides.<br><br>

            I started my working life in Hotel Management before jumping into Tourism 22 years ago, I love how they
            blend and coincide. I mostly worked in food and beverage which has assisted with the natural creation of my
            food tours. My latest being 'The Taste of Sydney' a 6 hour discovery of 4 of Sydney's newest neighbourhoods.
            Traveling in a comfortable van or sedan you will enjoy exclusive access and prime seating with plenty of
            delicious food and drink at all venues. You can find out more in my list of tour offerings.<br><br>

            I also enjoy getting out of the city. The South Coast and Southern Highlands (my favourite) is full of
            diverse landscapes, the Blue Mountains is stunningly beautiful with pristine clean air and the Hunter Valley
            has an abundance of vineyards and gourmet delights.<br><br>

            During my professional career as a tour guide I have introduced thousands of people to the vast aspects of
            Sydney, but what most people love and appreciate the most is 'The Story' of Sydney. It isn't a long and
            detailed story but the rapid transformation from penal colony to proud international city is captivating.
            It tells of the visionaries, global effects, change in society, destruction, glory and celebration.
            Sydney, with it's abundance of international influence is only 230 years old and has so much to show for it.<br><br>

            I judge my personal success by the reactions I get from my guests on board throughout the day. It makes the
            job very satisfying when people get involved and want to experience the local life for what it truly is.
            Please take a moment to review my tour itineraries and decide which experience most appeals to you.<br><br>

            Please also take a look at the testimonials my guests have written about me and message me directly to
            discuss your requirements further.<br><br>

            Thank you for taking the time to read my introduction and for your consideration to have me show you my
            Sydney and surrounds.

            Sincerley, Helen
        </div>
        <div class="col-md-4">
            @section ('sidebar')
                <div class="card bg-faded" id="sidebar">
                    <h3>Guide details</h3>
                    <p>
                        <img src="{{asset('img/portrait2.jpeg')}}" width=100%>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Message"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="View My Tours"/>
                    </div>
                    LIVES IN<br>
                    Groningen<br>
                    LANGUAGE(S) SPOKEN:<br>
                    Dutch, English<br>
                    TOURS GIVEN (EVT)<br>
                    142<br>
                    MEMBER SINCE<br>
                    Oct 18, 2017<br>
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
