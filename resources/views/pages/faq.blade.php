<!-- Red line can be deleted if h5 is not used -->
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                    <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                        <i class="mdi mdi-help-circle"></i> Frequently Asked Questions
                    </a>
                    <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                        <i class="mdi mdi-account"></i> Booking tours
                    </a>
                    <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                        <i class="mdi mdi-account-settings"></i> Register as guide
                    </a>
                    <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                        <i class="mdi mdi-heart"></i> Creating a tour 
                    </a>
                    <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5" aria-selected="false">
                        <i class="mdi mdi-coin"></i> Payment
                    </a>
                    <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
                        <i class="mdi mdi-help"></i> General help
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="faq-tab-content">
                    <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <div class="accordion" id="accordion-tab-1">
                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-1">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">How does Pico Tours work</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>The basics of Pico Tours are plain and simple: just visit our get started page for a graphical explanation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-2">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">What is Pico Tours?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Whether you are a guide, a tourist or a local looking to learn more about your city Pico tours is there for you! Pico Tours is a platform where local guides can offer their services, and where tourists can browse through and book tours in their city of interest.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-3">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">Who is behind Pico Tours</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Pico Tours is a project started by junior webdevelopers: Alex Poot, Sven Wilpstra, Matthijs Schooneveld and Wouter Tamminga during their education at Code Gorilla.</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                        <div class="accordion" id="accordion-tab-2">
                            <div class="card">
                                <div class="card-header" id="accordion-tab-2-heading-1">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1">After I book a tour, in what manner will i recieve confirmation?</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                    <div class="card-body">
                                        <p>You will recieve confirmation within the hour by e-mail. Would you rather recieve confirmation via whatsapp or text-message? Let us know!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-2-heading-2">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2">Is the tour I booked suited for children?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
                                    <div class="card-body">
                                        <p>All of our tours, except the pubcrawls, are suited for children </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-2-heading-3">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3">Why can`t i book a certain tour?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
                                    <div class="card-body">
                                        <p>The tour is probably booked full. You are alway free to e-mail the guide and ask for more information ofcourse!</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                        <div class="accordion" id="accordion-tab-3">
                            <div class="card">
                                <div class="card-header" id="accordion-tab-3-heading-1">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1">Why can`t I find a my city to add my tour to?</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                    <div class="card-body">
                                        <p>Because there are no tours in that city yet. Contact our admins, we will be happy to add your city</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-3-heading-2">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2">Why is my tour deleted?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                                    <div class="card-body">
                                        <p>Either because you recieved complaints, or an error at our servers. Either way feel free to contact us for more information </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-3-heading-3">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3" aria-expanded="false" aria-controls="accordion-tab-3-content-3">Do I have to pay to register as a guide?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                                    <div class="card-body">
                                        <p>No! Our site is completely free!</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                        <div class="accordion" id="accordion-tab-4">
                            <div class="card">
                                <div class="card-header" id="accordion-tab-4-heading-1">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1" aria-expanded="false" aria-controls="accordion-tab-4-content-1">Can I edit the details of my tour after I added it?</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                    <div class="card-body">
                                        <p>Yes, just use the edit button on the bottom of your tour page.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-4-heading-2">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-2" aria-expanded="false" aria-controls="accordion-tab-4-content-2">Why do I get an error message when I want to add my tour?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-4-content-2" aria-labelledby="accordion-tab-4-heading-2" data-parent="#accordion-tab-4">
                                    <div class="card-body">
                                        <p>This can occur because of various reasons. Please contact us so we can resolve the problem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-4-heading-3">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-3" aria-expanded="false" aria-controls="accordion-tab-4-content-3">There already are a lot of simmilar tours in my city, is it still possible to add mine?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-4-content-3" aria-labelledby="accordion-tab-4-heading-3" data-parent="#accordion-tab-4">
                                    <div class="card-body">
                                        <p>Yes, whethter you want to add your tour is entirely up to you.</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                        <div class="accordion" id="accordion-tab-5">
                            <div class="card">
                                <div class="card-header" id="accordion-tab-5-heading-1">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-1" aria-expanded="false" aria-controls="accordion-tab-5-content-1">What payment methods are available</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="accordion-tab-5-content-1" aria-labelledby="accordion-tab-5-heading-1" data-parent="#accordion-tab-5">
                                    <div class="card-body">
                                        <p>That depends on your tourguide. Most of the times you can pay with cash, IDEAL or banktransfer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-5-heading-2">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-2" aria-expanded="false" aria-controls="accordion-tab-5-content-2">If I am not satisfied with my booked tour, am I entitled to a refund?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-5-content-2" aria-labelledby="accordion-tab-5-heading-2" data-parent="#accordion-tab-5">
                                    <div class="card-body">
                                        <p>If you are not satisfied with you tour try to negosiate with your tourguide. Otherwise feel free to contact us.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-5-heading-3">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-3" aria-expanded="false" aria-controls="accordion-tab-5-content-3">Can i pay for my tour in advance?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-5-content-3" aria-labelledby="accordion-tab-5-heading-3" data-parent="#accordion-tab-5">
                                    <div class="card-body">
                                        <p>Usually you can. Contact your tourguide.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                        <div class="accordion" id="accordion-tab-6">
                            <div class="card">
                                <div class="card-header" id="accordion-tab-6-heading-1">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">Can I leave a review?</button>
                                    </h5>
                                </div>
                                <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                                    <div class="card-body">
                                        <p>Not yet. But you can like us on facebook on leave a comment about your experience there!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-6-heading-2">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-2" aria-expanded="false" aria-controls="accordion-tab-6-content-2">What do you do with the profits made by Picotours?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-6-content-2" aria-labelledby="accordion-tab-6-heading-2" data-parent="#accordion-tab-6">
                                    <div class="card-body">
                                        <p>We invest it in local sustainable energy initiatives!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-6-heading-3">
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-3" aria-expanded="false" aria-controls="accordion-tab-6-content-3">I would like to advertise on your website, how do I contact you?</button>
                                    </h5>
                                </div>
                                <div class="collapse" id="accordion-tab-6-content-3" aria-labelledby="accordion-tab-6-heading-3" data-parent="#accordion-tab-6">
                                    <div class="card-body">
                                        <p>Use the contact form at the bottom of the main page!</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection