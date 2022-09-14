@extends('frontend.layouts.master')

@section('title', 'Return and Refund Policy')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="#">Return and Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="about-content">
                        <h3>Return and Refund <span> Policy</span></h3>
                        <p>Thank you for shopping at ABC.
                            If, for any reason, You are not completely satisfied with a purchase We invite You to review our
                            policy on refunds and returns. This Return and Refund Policy has been created with the help of
                            the Free Return and Refund Policy Generator.
                            The following terms are applicable for any products that You purchased with Us.
                        </p>
                        <br>
                        <h5>Interpretation and Definitions</h5><br>
                        <P>
                        <h6>Interpretation</h6>
                        <br>
                        The words of which the initial letter is capitalized have meanings defined under the following
                        conditions. The following definitions shall have the same meaning regardless of whether they appear
                        in singular or in plural.
                        <br>
                        <br>
                        <h6>Definitions</h6>
                        <br>
                        For the purposes of this Return and Refund Policy:
                        <br>
                        <ul>
                            <li>• Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement)
                                refers
                                to ABC.</li>
                            <li>• Goods refer to the items offered for sale on the Service.</li>
                            <li>• Orders mean a request by You to purchase Goods from Us.</li>
                            <li>• Service refers to the Website.</li>
                            <li>• Website refers to ABC, accessible from https://www.abc.com/ </li>
                            <li>• You means the individual accessing or using the Service, or the company, or other legal
                                entity on behalf of which such individual is accessing or using the Service, as applicable.
                            </li>
                        </ul>
                        </P>
                        <br>
                        <h6>Your Order Cancellation Rights </h6>
                        <br>
                        <p>
                            You are entitled to cancel Your Order within 7 days without giving any reason for doing so.
                            The deadline for cancelling an Order is 7 days from the date on which You received the Goods or
                            on which a third party you have appointed, who is not the carrier, takes possession of the
                            product delivered.

                            In order to exercise Your right of cancellation, You must inform Us of your decision by means of
                            a clear statement. You can inform us of your decision by:
                            <br>
                            By email: abc@gmail.com We will reimburse You no later than 14 days from the day on which We
                            receive the returned Goods. We will use the same means of payment as You used for the Order, and
                            You will not incur any fees for such reimbursement.

                        </p>
                        <br>
                        <h6>Conditions for Returns </h6>
                        <br>
                        <p>
                            In order for the Goods to be eligible for a return, please make sure that:
                            <br>
                        <ul>
                            <li>
                                • The Goods were purchased in the last 7 days
                            </li>
                            <li>
                                • The Goods are in the original packaging
                            </li>
                            <li>
                                • The following Goods cannot be returned:
                            </li>
                            <li>• The supply of Goods made to Your specifications or clearly personalized.</li>
                            <li>
                                • The supply of Goods which are, after delivery, according to their nature, inseparably
                                mixed with
                                other items.
                            </li>
                            <li>
                                • The supply of Goods which are not suitable for return due to health protection or hygiene
                                reasons and were unsealed after delivery.
                            </li>
                            <li>• The supply of Goods which according to their nature are not suitable to be returned,
                                deteriorate rapidly or where the date of expiry is over.</li>

                            </li>
                        </ul>
                        <br>
                        We reserve the right to refuse returns of any merchandise that does not meet the above return
                        conditions in our sole discretion.
                        Only regular priced Goods may be refunded. Unfortunately, Goods on sale cannot be refunded. This
                        exclusion may not apply to You if it is not permitted by applicable law.
                        </p>
                        <br>
                        <h6>
                            Returning Goods
                        </h6>
                        <br>
                        <p>
                            You are responsible for the cost and risk of returning the Goods to Us. You should send the
                            Goods at the following address:

                            We cannot be held responsible for Goods damaged or lost in return shipment. Therefore, We
                            recommend an insured and trackable mail service. We are unable to issue a refund without actual
                            receipt of the Goods or proof of received return delivery.
                            Gifts

                            If the Goods were marked as a gift when purchased and then shipped directly to you, You'll
                            receive a gift credit for the value of your return. Once the returned product is received, a
                            gift certificate will be mailed to You.
                            If the Goods weren't marked as a gift when purchased, or the gift giver had the Order shipped to
                            themselves to give it to You later, We will send the refund to the gift giver
                        </p>
                        <h6>
                            Contact Us
                        </h6>
                        <br>
                        <p>If you have any questions about our Returns and Refunds Policy, please contact us:</p>
                        <div class="button">
                            <a href="{{ route('contact') }}" class="btn primary">Contact Us</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Us -->


    <!-- Start Shop Services Area -->
    <section class="shop-services section pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->
@endsection
